<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){

        $data = $request->validated();
       unset($data['password_confirmation']);
        User::firstOrCreate([
            'email' => $data['email']
        ],
            $data);

        return redirect()->route('user.index');
    }
}
