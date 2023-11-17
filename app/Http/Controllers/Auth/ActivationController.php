<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\AccountActivationRequest;
use Sentinel;
use Activation;
use App\Models\User;
use App\Http\Controllers\Controller;
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
