<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $produk = Produk::get();
        return view('layouts.user.shop', compact('produk'));
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        // Perform the search query
        $produk = Produk::where('nama_produk', 'like', '%' . $searchTerm . '%')->get();

        // Load the view with the search results
        return view('layouts.user.shop', compact('produk'));
    }
}
