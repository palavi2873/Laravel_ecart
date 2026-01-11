<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Getallproductservice;
use App\Facades\GetAllProduct;

class ProductSearch extends Controller
{
    public function searchProduct(Request $req)
    {
    	  // $products = GetAllProduct::getfunction();
       //    dd($products);
       //  die;

    	// using service container;
    	$service = app(Getallproductservice::class);
    	$products=$service->getfunction();
    	 return view('search',compact('products'));
    }
}
