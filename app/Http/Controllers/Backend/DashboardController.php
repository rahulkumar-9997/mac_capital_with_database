<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Menu;
use App\Models\MenuItems;
use App\Models\VisitorTracking;
class DashboardController extends Controller
{
    public function index(){
        $data = [
            'totalPages' => Page::count(),
            'totalMenus' => Menu::count(),
            'totalMenuItems' => MenuItems::count(),
            'visitorTracking' => VisitorTracking::count(),
        ];
        return view('backend.pages.dashboard.index',  compact('data'));
    }

    public function getDailyVisitors(Request $request)
    {
        $days = $request->input('days', 30);
        $endDate = now();
        $startDate = now()->subDays($days);        
        $query = VisitorTracking::whereBetween('visited_at', [$startDate, $endDate]);
            $data = $query->selectRaw(
            'DATE(visited_at) as date,
            COUNT(DISTINCT session_id) as unique_visitors,
            COUNT(*) as total_visits'
        )
        ->groupBy('date')
        ->orderBy('date')
        ->get();
        $results = [];
        $currentDate = $startDate->copy();        
        while ($currentDate <= $endDate) {
            $dateStr = $currentDate->format('Y-m-d');
            $record = $data->firstWhere('date', $dateStr);            
            $results[] = [
                'date' => $currentDate->format('d M'),
                'unique_visitors' => $record ? $record->unique_visitors : 0,
                'total_visits' => $record ? $record->total_visits : 0
            ];
            
            $currentDate->addDay();
        }
        
        return response()->json([
            'dates' => collect($results)->pluck('date')->toArray(),
            'unique_visitors' => collect($results)->pluck('unique_visitors')->toArray(),
            'total_visits' => collect($results)->pluck('total_visits')->toArray()
        ]);
    }
}
