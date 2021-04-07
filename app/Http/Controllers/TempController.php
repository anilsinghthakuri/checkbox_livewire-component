<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class TempController extends Controller
{
    public function index()
    {
        $data = $this->fetch_product_data();
        return view('temp',[
            'data'=>$data
        ]);
    }
    private function fetch_product_data()
    {
        $data = Product::all();
        return $data;
    }
}
