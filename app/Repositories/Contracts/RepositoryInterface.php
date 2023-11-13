<?php

namespace App\Repositories\Contracts;

interface RepositoryInterface
{
    public function findAll();
    public function findByEmail($email);
    public function create(array $data);
}
