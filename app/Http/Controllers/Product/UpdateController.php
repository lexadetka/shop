<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{

    public function __invoke(Product $product, UpdateRequest $request)
    {
        $data = $request->validated();

        if (isset($data['tags'])) {
            $tagsIds = $data['tags'];
            unset($data['tags']);
        } else {
            $tagsIds = [];
        }

        if (isset($data['colors'])) {
            $colorsIds = $data['colors'];
            unset($data['colors']);
        } else {
            $colorsIds = [];
        }

        if (isset($data['preview_image'])) $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);

        $product->update($data);
        $product->tags()->sync($tagsIds);
        $product->colors()->sync($colorsIds);

        return view('product.show', compact('product'));
    }
}
