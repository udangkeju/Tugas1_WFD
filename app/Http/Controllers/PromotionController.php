<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PromotionController extends Controller
{
    public function index()
    {
        $promotions = Promotion::latest()->get();
        return view('promotions.index', compact('promotions'));
    }

    public function create()
    {
        return view('promotions.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    
        // Simpan gambar ke storage
        $imagePath = $request->file('image')->store('promotions', 'public');
    
        Promotion::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'image' => $imagePath
        ]);
    
        return redirect()->route('promotions.index');
    }

    public function show(Promotion $promotion)
    {
        return view('promotions.show', compact('promotion'));
    }

    public function edit(Promotion $promotion)
    {
        return view('promotions.edit', compact('promotion'));
    }

    public function update(Request $request, Promotion $promotion)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'nullable|string'
        ]);

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($promotion->image) {
                Storage::disk('public')->delete($promotion->image);
            }
            
            // Simpan gambar baru
            $imagePath = $request->file('image')->store('promotions', 'public');
            $validatedData['image'] = $imagePath;
        }

        $promotion->update($validatedData);

        return redirect()->route('promotions.index')
                         ->with('success', 'Promosi berhasil diperbarui!');
    }

    public function destroy(Promotion $promotion)
    {
        // Hapus gambar dari storage
        if ($promotion->image) {
            Storage::disk('public')->delete($promotion->image);
        }

        $promotion->delete();

        return redirect()->route('promotions.index')
                         ->with('success', 'Promosi berhasil dihapus!');
    }
}