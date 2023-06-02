<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Product $product){

        $tags = Tag::all();
        $colors = Color::all();
        $categories = Category::all();

        return view('product.edit', compact('tags', 'colors', 'categories', 'product'));
    }
}
