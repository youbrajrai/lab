<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;


class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            'company_name' => ['required'],
            'address' => ['required'],
            'phone'  => ['required'],
            'regd_no'   => ['required'],
            'image'     => ['required']
        ])->validate();

        $user =  User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'company_name' => $input['company_name'],
            'address'   => $input['address'],
            'phone'     => $input['phone'],
            'regd_no'   => $input['regd_no'],
        ]);
        if(isset($input['image'])){
            $user->addMedia($input['image'])->toMediaCollection('images');
        }
        return $user;
    }
}
