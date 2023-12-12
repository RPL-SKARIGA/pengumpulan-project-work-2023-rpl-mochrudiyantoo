<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    // Fungsi untuk menampilkan halaman produk
    public function index(Request $request)
    {
        $query = $request->input('query');

        // Proses pencarian berdasarkan query
        $products = Product::where('nama_barang', 'like', "%$query%")->get();

        return view('products', [
            'products' => $products,
        ]);
    }

    // Fungsi pencarian khusus (jika diperlukan)
    public function search(Request $request)
    {
        $query = $request->input('query');

        $products = Product::where('nama_barang', 'like', "%$query%")->get();

        return view('products', [
            'products' => $products,
        ]);
    }
}
