<?php

namespace App\Actions;

use App\Models\User;

class CreateUserAction
{
    public function __construct() {}

    public function execute(string $name, string $username): User {
        // Create a new user.
        $user = User::create([
            'name' => $name,
            'username' => $username,
        ]);

        // Dispatch the event.

        return $user;
    }
}
