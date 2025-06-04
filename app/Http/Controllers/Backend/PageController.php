<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$pages = Page::with('parent')->orderBy('order')->get();
        $pages = Page::with('children')->whereNull('parent_id')->orderBy('order')->get();
        return view('backend.pages.page-content.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parentPages = Page::get();
        return view('backend.pages.page-content.create', compact('parentPages'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'route_name' => 'nullable|string|max:255',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'nullable|string',
            'parent_id' => 'nullable|exists:pages,id',
            'order' => 'nullable|integer',
            'is_active' => 'nullable|boolean',
            'show_in_sidebar' => 'nullable|boolean',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
        ]);
        $data = [];
        $data['title'] = $validated['title'];
        $data['route_name'] = $validated['route_name'] ?? null;
        $data['content'] = $validated['content'] ?? null;
        $data['parent_id'] = $validated['parent_id'] ?? null;
        $data['order'] = $validated['order'] ?? 0;
        $data['is_active'] = $request->boolean('is_active');
        $data['show_in_sidebar'] = $request->boolean('show_in_sidebar');
        $data['meta_title'] = $validated['meta_title'] ?? null;
        $data['meta_description'] = $validated['meta_description'] ?? null;
        if ($request->hasFile('main_image')) {
            $data['main_image'] = $this->handleImageUpload($request->file('main_image'), $validated['title']);
        }
        Page::create($data);
        return redirect()->route('pages.index')->with('success', 'Page created successfully.');
    }

    /**
     * Upload and convert image to webp.
     */
    private function handleImageUpload($imageFile, $title): string
    {
        $destinationPath = public_path('upload/page');
        $safeTitle = Str::slug($title);
        if (!File::exists($destinationPath)) {
            File::makeDirectory($destinationPath, 0755, true);
        }
        $filename = $safeTitle . '-' . uniqid() . '.webp';
        $img = Image::make($imageFile->getRealPath())->encode('webp', 90);
        $img->save($destinationPath . '/' . $filename);
        return $filename;
    }

    public function edit(Page $page)
    {
        $pages = Page::all();
        $parentPages = Page::where('id', '!=', $page->id)->get();
        return view('backend.pages.page-content.edit', compact('pages', 'parentPages', 'page'));
    }

    public function update(Request $request, Page $page)
    {
        //dd($request->all());
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'route_name' => 'nullable|string|max:255',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'nullable|string',
            'parent_id' => 'nullable|exists:pages,id',
            'order' => 'nullable|integer',
            'is_active' => 'nullable|boolean',
            'show_in_sidebar' => 'nullable|boolean',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
        ]);

        $data = [];
        $data['title'] = $validated['title'];
        $data['route_name'] = $validated['route_name'] ?? null;
        $data['content'] = $validated['content'] ?? null;
        $data['parent_id'] = $validated['parent_id'] ?? null;
        $data['order'] = $validated['order'] ?? 0;
        $data['is_active'] = $request->boolean('is_active');
        $data['show_in_sidebar'] = $request->boolean('show_in_sidebar');
        $data['meta_title'] = $validated['meta_title'] ?? null;
        $data['meta_description'] = $validated['meta_description'] ?? null;

        if ($request->hasFile('main_image')) {
            if ($page->main_image && File::exists(public_path('upload/page/' . $page->main_image))) {
                File::delete(public_path('upload/page/' . $page->main_image));
            }

            $data['main_image'] = $this->handleImageUpload($request->file('main_image'), $validated['title']);
        }

        $page->update($data);

        return redirect()->route('pages.index')->with('success', 'Page updated successfully.');
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


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        if ($page->main_image && File::exists(public_path('upload/page/' . $page->main_image))) {
            File::delete(public_path('upload/page/' . $page->main_image));
        }
        
        $page->delete();
        
        return redirect()->route('pages.index')->with('success', 'Page deleted successfully.');
    }
}
