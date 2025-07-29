<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Information;

class CompanyController extends Controller
{
    public function index()
    {
        $company = Information::get()->first();
        return view('admin.pages.company.index', compact('company'));
    }

    public function update(Request $request, Information $company)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $imagePath = $company->image;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('company', 'public');
        }

        $company->update([
            'name' => $request->name,
            'about' => $request->about,
            'address' => $request->address,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.company.index')->with('success', 'Company updated successfully.');
    }
}
