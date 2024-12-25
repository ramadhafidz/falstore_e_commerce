<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use App\Models\Product;

class ProductController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga' => 'required|integer',
            'kategori_produk' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'foto_produk' => 'required|array',
            'foto_produk.*' => 'image|mimes:jpg,jpeg,png|max:2048',
            'informasi_tambahan' => 'nullable|json',
        ]);

        $fotoProduk = [];
        foreach ($request->file('foto_produk') as $foto) {
            if ($foto->isValid()) {
                $path = $foto->store('images/produk', 'public');
                $fotoProduk[] = basename($path);
                Log::info("Foto berhasil disimpan: " . $path);
            } else {
                Log::error("Foto tidak valid: " . $foto->getErrorMessage());
            }
        }

        $product = Product::create([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'nama_toko' => 'Falstore',
            'foto_produk' => json_encode($fotoProduk),
            'kategori_produk' => $request->kategori_produk,
            'deskripsi' => $request->deskripsi,
            'informasi_tambahan' => json_encode($request->input('informasi_tambahan', [])),
        ]);

        return response()->json([
            'message' => 'Produk berhasil ditambahkan.',
            'data' => [
                'id' => $product->id,
                'nama_produk' => $product->nama_produk,
                'harga' => $product->harga,
                'kategori_produk' => $product->kategori_produk,
                'deskripsi' => $product->deskripsi,
                'foto_produk' => $fotoProduk,
                'informasi_tambahan' => json_decode($product->informasi_tambahan),
            ],
        ], 201);
    }
}