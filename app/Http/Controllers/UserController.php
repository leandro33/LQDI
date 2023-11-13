<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{    
    public function list(UserRepository $repository)
    {
    	return $repository->findAll();
    }

    public function getByEmail(string $email, UserRepository $repository)
    {
        return $repository->findByEmail($email);
    }

    public function save(Request $request, UserRepository $repository)
    {
        $user = $this->getByEmail($request->input('email'), $repository);
        $response = false;        

        if (empty($user->id)) {            
            $data = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make('temporary')
            ];

            $repository->create($data);
            $response = true;
        }

        return $response;        
    }
}
