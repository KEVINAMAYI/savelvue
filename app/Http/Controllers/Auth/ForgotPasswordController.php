<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\ResetPasswordRequest;
use App\Http\Requests\SendPasswordResetCodeRequest;
use App\Mail\ForgotPassword;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Reminder;
use Sentinel;
use Symfony\Component\HttpFoundation\Response;

class ForgotPasswordController extends Controller
{
    public function sendPasswordResetCode(SendPasswordResetCodeRequest $request)
    {

        $user = User::whereEmail($request->input('email'))->get();

        if (count($user) == 0) {
            return response(['error' => 'No account existS with such email'], Response::HTTP_UNAUTHORIZED);
        }

        $reminder = Reminder::create(Sentinel::findById($user[0]->id));
        $reminderCode = $reminder->code;

        Mail::to($user->email)->send(new ForgotPassword($reminderCode, $user));

        return response(['message' => 'Password Reset code has been send to your email',
        ], Response::HTTP_OK);

    }

    public function resetPassword(ResetPasswordRequest $request)
    {
        //normal user extends sentinel EloquentUser
        $user = User::whereEmail($request->input('email'))->get();

        if (count($user) == 0) {
            return response(['error' => 'Unauthorized activity detected', Response::HTTP_UNAUTHORIZED]);
        }

        $sentinelUser = Sentinel::findById($user[0]->id);

        if (Reminder::complete($sentinelUser, $request->input('reset_password_code'), $request->input('password'))) {
            return response(['message' => 'Password Reset was successfully'], Response::HTTP_OK);
        } else {
            return response(['error' => 'Password Reset Failed, Try Again'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }
}
