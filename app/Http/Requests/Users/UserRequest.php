<?php

namespace App\Http\Requests\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserRequest extends Controller
{
    public function __construct(Request $request)
    {
        $this->validate(
            $request, [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:5'
            ]
        );

        parent::__construct($request);
    }
}
