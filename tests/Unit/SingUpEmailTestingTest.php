<?php

namespace Tests\Unit;

use Activation;
use App\Mail\SignUp;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class EmailTestingTest extends TestCase
{
    use WithFaker;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_signup_emails_can_be_sent()
    {
        $faker = \Faker\Factory::create();
        $test_user_data = [
            'first_name' => $faker->firstName(),
            'last_name' => $faker->lastName(),
            'email' => $faker->email(),
            'password' => bcrypt('password'),
            'password_confirmation' => bcrypt('password'),
        ];
        $user = Sentinel::register($test_user_data);

        $activation = Activation::create($user);
        $activationCode = $activation->code;
        Mail::fake();

        Mail::to($user->email)->send(new SignUp($user, $activationCode));

        Mail::assertSent(SignUp::class);

    }

}
