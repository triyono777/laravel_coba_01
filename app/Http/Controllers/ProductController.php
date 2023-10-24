<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {

        $products = [
            [
                'id' => 1,
                'sku' => '#AB12312',
                'name' => 'Product A',
                'price' => 15000
            ],
            [
                'id' => 2,
                'sku' => '#CD12312',
                'name' => 'Product B',
                'price' => 20000
            ]
        ];

        return response(view('products.index', ['dataProduk' => $products]));
    }

    public function create()
    {
        dd('isi create');
    }

    public function store(Request $request)
    {
        dd('isi store');
    }


    public function show(string $id)
    {
        dd("isi dari route show $id");
    }


    public function edit(string $id)
    {
        dd('isi edit');
    }


    public function update(Request $request, string $id)
    {
        dd('isi update');
    }


    public function destroy(string $id)
    {
        dd('isi destroy');
    }
}
