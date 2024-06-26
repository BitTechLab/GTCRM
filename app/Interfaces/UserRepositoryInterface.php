<?php

namespace App\Interfaces;

use App\Http\DataTransferObjects\LoginDto;
use App\Http\DataTransferObjects\UserDto;
use App\Models\User;

interface UserRepositoryInterface extends BaseRepositoryInterface
{

    public function create(UserDto $data): User;
    
    public function update(int $id, UserDto $data): User;

    public function authinticate(LoginDto $data): bool;
}
