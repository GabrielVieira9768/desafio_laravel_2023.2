<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    public function __construct()
    {
        //
    }

    public function ehAdmin(User $user)
    {
        return $user->ehAdmin;
    }
}
