<?php
namespace App\Http\Composers;

use Illuminate\View\View;
use App\Models\Menu;
use Illuminate\Support\Facades\Log;
class MenuComposer
{
    public function compose(View $view)
    {
        $menu = Menu::with(['items.children'])
            ->where('location', 'Header')
            ->first();
        //   dd($menu->toJson(JSON_PRETTY_PRINT));
        $view->with('menu', $menu);       
    }
}
