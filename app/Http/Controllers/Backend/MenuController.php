<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\MenuItems;
use App\Models\Page;
class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::with('items')->get();
        return view('backend.pages.menu.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.menu.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
        ]);
        $data = [];
        $data['name'] = $validated['name'];
        $data['location'] = $validated['location'] ?? null;
        Menu::create($data);
        return redirect()->route('menus.index')->with('success', 'Menu created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        return view('backend.pages.menu.edit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
        ]);
        $data = [];
        $data['name'] = $validated['name'];
        $data['location'] = $validated['location'] ?? null;
        $menu->update($data);
        return redirect()->route('menus.index')->with('success', 'Menu updated successfully.');
    }

    public function destroy(Menu $menu)
    {
        $menu->items()->delete();
        $menu->delete();
        
        return redirect()->route('menus.index')->with('success', 'Menu deleted successfully.');
    }

    public function displayMenuItem(Menu $menu){
        $pages = Page::where('is_active', true)->get();
        $menuItems = $menu->items()->with('children')->whereNull('parent_id')->orderBy('order')->get();
        
        return view('backend.pages.menu-items.index', compact('menu', 'pages', 'menuItems'));
    }

    public function storeItem(Request $request, Menu $menu)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'nullable|string|max:255',
            'route' => 'nullable|string|max:255',
            'page_id' => 'nullable|exists:pages,id',
            'parent_id' => 'nullable|exists:menu_items,id',
            'icon' => 'nullable|string|max:255',
            'target' => 'nullable|in:_self,_blank',
        ]);

        $menu->items()->create($request->all());

        return redirect()->route('menus.items', $menu->id)
            ->with('success', 'Menu item added successfully.');
    }

    public function editItem(Menu $menu, MenuItems $item)
    {
        $pages = Page::where('is_active', true)->get();
        $menuItems = $menu->allItems;
        
        return view('backend.pages.menu-items.edit', compact('menu', 'item', 'pages', 'menuItems'));
    }

    public function updateItem(Request $request, Menu $menu, MenuItems $item)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'nullable|string|max:255',
            'route' => 'nullable|string|max:255',
            'page_id' => 'nullable|exists:pages,id',
            'parent_id' => 'nullable|exists:menu_items,id',
            'icon' => 'nullable|string|max:255',
            'target' => 'nullable|in:_self,_blank',
        ]);

        $item->update($request->all());
        return redirect()->route('menus.items', $menu->id)
            ->with('success', 'Menu item updated successfully.');
    }

    public function destroyItem(Menu $menu, MenuItems $item)
    {
        $item->delete();
        return redirect()->route('menus.items', $menu->id)
            ->with('success', 'Menu item deleted successfully.');
    }

    public function orderItems(Request $request, Menu $menu)
    {
        $request->validate([
            'order' => 'required|array',
            'order.*.id' => 'required|exists:menu_items,id,menu_id,'.$menu->id,
            'order.*.order' => 'required|integer',
            'order.*.parent_id' => 'nullable|exists:menu_items,id,menu_id,'.$menu->id,
        ]);

        try {
            MenuItems::updateOrder($request->order);
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
}
