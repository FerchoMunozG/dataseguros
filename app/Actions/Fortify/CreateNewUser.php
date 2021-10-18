<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Illuminate\Validation\Rule;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        //dd($input);
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'id_type' => ['required', Rule::in(['CC', 'CE', 'NIT', 'P'])],
            'id_doc' => ['required', 'integer', 'min:1'],
            'marital_status' => ['required', Rule::in(['Soltero', 'Casado', 'Unión Marital de Hecho'])],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'birthday' => ['required', 'date'],
        ])->validate();

        $user = User::create([
            'name' => $input['name'],
            'id_type' => $input['id_type'],
            'id_doc' => $input['id_doc'],
            'marital_status' => $input['marital_status'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'birthday' => $input['birthday'],
        ]);

        $user->roles()->attach(5);
        return $user;
    }
}
