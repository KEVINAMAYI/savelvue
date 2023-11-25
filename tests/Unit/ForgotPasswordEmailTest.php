<?php

namespace Tests\Unit;

use App\Mail\ForgotPassword;
use App\Models\User;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Support\Facades\Mail;
use Reminder;
use Tests\TestCase;

class ForgotPasswordEmailTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_forgot_password_emails_can_be_sent()
    {

        $user = User::all()->first();
        $reminder = Reminder::create(Sentinel::findById($user->id));
        $reminderCode = $reminder->code;

        Mail::to($user->email)->send(new ForgotPassword($reminderCode, $user));

        Mail::assertSent(ForgotPassword::class);

    }
}
