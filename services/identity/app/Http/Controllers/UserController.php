<?php

namespace App\Http\Controllers;

use App\Actions\CreateUserAction;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Response;

class UserController extends Controller
{
    public function store(
        StoreUserRequest $request,
        CreateUserAction $createUser
    ) {
        $user = $createUser->execute(
            $request->getName(),
            $request->getUsername(),
            $request->getPassword()
        );

        return response([
            'data' => $user->toData(),
        ], Response::HTTP_CREATED);
    }
}
