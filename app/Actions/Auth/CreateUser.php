<?php

namespace App\Actions\Auth;

use App\Models\Compra;
use App\Models\Producto;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\Validator;

final class CreateUser
{
    /** @var array<string, mixed> */
    private array $rules = [
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
    ];

    public function create(array $input): User
    {
        Validator::make($input, $this->rules)->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'role' => user::USER_ROLE
        ]);
    }
}
