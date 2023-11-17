<?php

namespace App\Http\Controllers\Auth;

use Sentinel;
use Exception;
use Activation;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\RegisterRequest;
use Symfony\Component\HttpFoundation\Response;

class RegistrationController extends Controller
{
    public function register(RegisterRequest $request)
    {

            $user = Sentinel::register($request->validated());

            $activation = Activation::create($user);

            $this->sendActivationEmail($user, $activation->code);

            return response(['message' => 'Activation Code Has been Send to your Email,Please check your Email'], Response::HTTP_OK);


    }

    private function sendActivationEmail($user, $code)
    {
        Mail::send('emails.activation', [
            'user' => $user,
            'activationCode' => $code
        ], function ($message) use ($user) {
            $message->to($user->email);
            $message->subject("Hello $user->first_name Activate your account");
        });
    }
}
