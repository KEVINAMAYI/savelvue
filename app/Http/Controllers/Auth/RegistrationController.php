<?php

namespace App\Http\Controllers\Auth;

use Activation;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Mail\SignUp;
use Illuminate\Support\Facades\Mail;
use Sentinel;
use Symfony\Component\HttpFoundation\Response;

class RegistrationController extends Controller
{
    public function register(RegisterRequest $request)
    {

        $user = Sentinel::register($request->validated());

        $activation = Activation::create($user);
        $activationCode = $activation->code;

        Mail::to($user->email)->send(new SignUp($activationCode, $user));

        return response(['message' => 'Account activation link Has been Send to your Email, Please check your Email'], Response::HTTP_OK);

    }
}
