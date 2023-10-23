<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function tampilData()
    {
        return response(view('products.index'));
    }


    public function index()
    {
        return response(view('products.index'));
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
