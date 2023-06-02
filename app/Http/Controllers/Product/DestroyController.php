<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ColorProduct;
use App\Models\Product;
use App\Models\ProductTag;
use App\Models\User;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function __invoke(Product $product){

        ProductTag::where('product_id', $product->id)->delete();
        ColorProduct::where('product_id', $product->id)->delete();

        $product->delete();
        return redirect()->route('product.index');
    }
}
