<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Melihovv\ShoppingCart\Facades\ShoppingCart;

class CartAjController extends Controller
{
    public function getAddtoCart(Request $request)
    {
    	$id = $request->pro_id;
    	$quantity = 1;
    	$product = Product::find($id);
    	$name = $product->name;
    	$price = $product->price;
    	$image = $product->image;
  //   	ShoppingCart::add($id, $name, $price, $quantity, [
		//     'image' => $image
		// ]);
		ShoppingCart::add(1, 'iPhone 7', 1000, 1);
		ShoppingCart::add(2, 'iPhone 7', 500, 1);
// ShoppingCart::add(1, 'iPad Pro', 500, 2);
		dd(ShoppingCart::getTotal());
    	return view('customer.cart.cart');
    }
}
