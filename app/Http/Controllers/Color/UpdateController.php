<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;
use App\Http\Requests\Color\UpdateRequest;
use App\Models\Category;
use App\Models\Color;

class UpdateController extends Controller
{

    public function __invoke(Color $color, UpdateRequest $request)
    {
        $data = $request->validated();

        $color->update($data);

        return view('color.show', compact('color'));
    }
}
