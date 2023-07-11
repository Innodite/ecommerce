<?php

namespace Modules\User\Repositories;

use Modules\User\Entities\User;

class UserRepository
{
    protected $user;

    public function __construct(User $user)
    {

        $this->user = $user;
    }


    public function store(array $data)
    {

        return $this->user->create($data);
    }
}
