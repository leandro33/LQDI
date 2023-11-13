<?php

namespace App\Repositories;

use App\User;

class UserRepository
{
	protected $model;

	public function __construct(User $model)
	{
		$this->model = $model;
	}

    public function findAll()
    {
        return $this->model->all();
    }

    public function findByEmail($email)
    {        
        return $this->model->where('email', '=', $email)->first();
    } 
    
    public function create($data)
    {
        return $this->model->create($data);
    }
}
