<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateRequest;
use App\Models\Category;
use App\Models\User;

class UpdateController extends Controller
{

    public function __invoke(User $user, UpdateRequest $request)
    {
        $data = $request->validated();

        $user->update($data);

        return view('user.show', compact('user'));
    }
}
