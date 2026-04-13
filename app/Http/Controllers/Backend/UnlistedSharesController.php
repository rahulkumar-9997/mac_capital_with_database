<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UnlistedShareList;
use App\Models\UnlistedShareItem;
use Illuminate\Support\Facades\DB;

class UnlistedSharesController extends Controller
{
    public function index()
    {
        $lists = UnlistedShareList::with('items')->latest()->paginate(20); ;
        return view('backend.pages.unlisted-shares.index', compact('lists'));
    }

    public function create()
    {
        return view('backend.pages.unlisted-shares.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'for_date' => 'required|date',
            'script_name.*' => 'required|string|max:255',
            'face_value.*' => 'nullable|string|max:50',
            'landing_price.*' => 'nullable|string|max:50',
        ]);
        DB::beginTransaction();
        try {
            $list = UnlistedShareList::create([
                'for_date' => $request->for_date
            ]);
            if ($request->script_name) {
                foreach ($request->script_name as $key => $name) {
                    if (!empty($name)) {
                        UnlistedShareItem::create([
                            'unlisted_share_list_id' => $list->id,
                            'script_name' => $name,
                            'face_value' => $request->face_value[$key] ?? null,
                            'landing_price' => $request->landing_price[$key] ?? null,
                        ]);
                    }
                }
            }
            DB::commit();
            return redirect()->route('manage-unlisted-shares.index')->with('success', 'Unlisted Shares  added successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->with('error', 'Something went wrong! ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $list = UnlistedShareList::with('items')->findOrFail($id);
        return view('backend.pages.unlisted-shares.edit', compact('list'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'for_date' => 'required|date',
            'script_name.*' => 'required|string|max:255',
            'face_value.*' => 'nullable|string|max:50',
            'landing_price.*' => 'nullable|string|max:50',
        ]);

        DB::beginTransaction();

        try {
            $list = UnlistedShareList::findOrFail($id);

            $list->update([
                'for_date' => $request->for_date
            ]);
            UnlistedShareItem::where('unlisted_share_list_id', $id)->delete();
            foreach ($request->script_name as $key => $name) {
                if (!empty($name)) {
                    UnlistedShareItem::create([
                        'unlisted_share_list_id' => $id,
                        'script_name' => $name,
                        'face_value' => $request->face_value[$key] ?? null,
                        'landing_price' => $request->landing_price[$key] ?? null,
                    ]);
                }
            }
            DB::commit();
            return redirect()->route('manage-unlisted-shares.index')->with('success', 'Unlisted Shares  updated successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withInput()->with('error', 'Something went wrong!' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $list = UnlistedShareList::findOrFail($id);
            UnlistedShareItem::where('unlisted_share_list_id', $id)->delete();
            $list->delete();
            DB::commit();
            return redirect()->route('manage-unlisted-shares.index')->with('success', 'Deleted successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Something went wrong!' . $e->getMessage());
        }
    }
}
