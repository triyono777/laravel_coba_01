<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        dd('isi index');
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
        dd('isi show');

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
