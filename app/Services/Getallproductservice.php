<?php
namespace App\Services;
use App\Models\Product;

class Getallproductservice {

	public function getfunction()
	{
		return Product::all()->toArray();
	}
	public function secondfunction()
	{
		return 'new';
	}
}

?>