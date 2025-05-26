<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Models\Page;

class FrontendPageController extends Controller
{
    public function show($slug)
    {
        $page = Page::where('slug', $slug)->where('is_active', true)->firstOrFail();
        $sidebarData = $page->sidebarMenuFrontend();
        return view('frontend.pages.dynamic-pages.show', [
            'page' => $page,
            'sidebarPages' => $sidebarData['pages'],
            'sidebarTitle' => $sidebarData['title']
        ]);
    }
}
