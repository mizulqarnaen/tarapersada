<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->paginate(10);
        return view('admin.pages.galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.pages.galleries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|mimes:jpg,png,jpeg|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('galleries', 'public');
        }

        Gallery::create([
            'name' => $request->name,
            'image' => $imagePath,
            'type' => $request->type,
            'caption' => $request->caption,
        ]);

        return redirect()->route('admin.galleries.index')->with('success', 'Gallery created successfully.');
    }

    public function edit(Gallery $gallery)
    {
        return view('admin.pages.galleries.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|mimes:jpg,png,jpeg|max:2048',
        ]);

        $imagePath = $gallery->image;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('galleries', 'public');
        }

        $gallery->update([
            'name' => $request->name,
            'image' => $imagePath,
            'type' => $request->type,
            'caption' => $request->caption,
        ]);

        return redirect()->route('admin.galleries.index')->with('success', 'Gallery updated successfully.');
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect()->route('admin.galleries.index')->with('success', 'Gallery deleted successfully.');
    }
}
