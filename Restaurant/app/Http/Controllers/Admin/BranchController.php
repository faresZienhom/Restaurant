<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $branches = Branch::get();
        return view('admin.pages.branches.index', compact('branches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.branches.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'city' => ['required', 'max:20', 'string'],
            'street' => ['required', 'max:50'],
            'phone' => ['required', 'max:50']
        ]);

        Branch::create([
            'city' => $request->city,
            'street' => $request->street,
            'phone' => $request->phone
        ]);

        return back()->with('message', 'data added successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Branch $branch)
    {
        return view('admin.pages.branches.edit', compact('branch'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Branch $branch)
    {
        $request->validate([
            'city' => ['required', 'max:20', 'string'],
            'street' => ['required', 'max:50'],
            'phone' => ['required', 'max:50']
        ]);

        $branch->update([
            'city' => $request->city,
            'street' => $request->street,
            'phone' => $request->phone
        ]);

        return back()->with('message', 'data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Branch $branch)
    {
        $branch->delete();
        return back()->with('message', 'data deleted successfully');
    }
}
