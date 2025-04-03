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
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'nullable|string' // Validasi category
        ]);
    
        // Set default category jika tidak diisi
        $validatedData['category'] = $validatedData['category'] ?? 'bioskop';
    
        // Upload gambar
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('promotions', 'public');
            $validatedData['image'] = $imagePath;
        }
    
        Promotion::create($validatedData);
    
        return redirect()->route('promotions.index')
                         ->with('success', 'Promosi berhasil ditambahkan!');
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