<?php
namespace App\Service;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService {
    /**
     * Store user information
     * 
     * @param array $data 
     * 
     * @return array $user
     */
    public function store($data)
    {   
        $user = User::create([
            'name'      => $data['name'],
            'email'     => $data['email'],
            'phone'     => $data['phone'],
            'address'   => $data['address'],
            'password'  => Hash::make($data['password'])
        ]);

        return $user;
    }
}