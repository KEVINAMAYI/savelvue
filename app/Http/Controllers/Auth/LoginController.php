<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Sentinel;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        try {

            isset($request->remember_me) ? $user = Sentinel::authenticate($request->validated(), true)
                                         : $user = Sentinel::authenticate($request->validated());

            if (! Sentinel::check()) {
                return response(['error' => 'Credentials not Found'], Response::HTTP_UNAUTHORIZED);
            }

            $token = $user->createToken('access_token');

            return response([
                'user' => $user,
                'access_token' => $token->plainTextToken,
            ], Response::HTTP_OK);

        } catch (ThrottlingException $throttlingException) {

            $delay = $throttlingException->getDelay();

            return response([
                'error' => "You are banned for $delay seconds",
            ], Response::HTTP_UNAUTHORIZED);

        } catch (NotActivatedException $notActivatedException) {

            return response([
                'error' => 'Your account is not activated',
            ], Response::HTTP_UNAUTHORIZED);
        }

    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return response(['message' => 'Logout Successful'], Response::HTTP_OK);
    }
}
