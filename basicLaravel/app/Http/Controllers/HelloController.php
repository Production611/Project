<?php

namespace App\Http\Controllers;

class HelloController extends Controller
{
    public function showHello($name)
    {
        return 'Hello : ' . $name . '<hr>';
    }
    public function resultproduct($product)
    {
        return 'show : ' . $product . '<hr>';
    }
    public function show()
    {
        return view('create.index')->with('name', 'Boss')->with('title', 'Laravel');
    }
}
