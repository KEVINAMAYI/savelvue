<?php

namespace App\Http\Controllers\Auth;

use Activation;
use App\Http\Controllers\Controller;
use App\Http\Requests\AccountActivationRequest;
use App\Models\User;
use Sentinel;
use Symfony\Component\HttpFoundation\Response;

class ActivationController extends Controller
{
    public function activate(AccountActivationRequest $request)
    {
        $user = User::whereEmail($request->input('email'))->first();

        $sentinelUser = Sentinel::findById($user->id);

        if (Activation::complete($sentinelUser, $request->input('activation_code'))) {

            return response(['message' => 'User activated successfully'], Response::HTTP_OK);

        } else {

            return response(['error' => 'Activation Failed, Try Again'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }
}
