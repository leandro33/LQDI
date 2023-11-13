<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use App\Mail\HelloUser;
use App\User;
use Illuminate\Support\Facades\Mail;

class SendEmailsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
        $this->middleware('auth');
    }

    public function index()
    {
        $users = $this->repository->findAll();

        return view('landpage.lqdi.emails', ['users' => $users]);
    }
    
    public function ship(Request $request)
    {
        $user = User::findOrFail($request->input('userId'));
 
        Mail::to($user->email)->send(new HelloUser($user));
    }
}
