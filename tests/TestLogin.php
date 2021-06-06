<?php

require_once 'PHPUnit/Autoload.php';

use \PHPUnit\Framework\TestCase;
use Auth;
use RainLab\User\Models;

/** @test */
class TestLogin extends \PHPUnit\Framework\TestCase
{
    public function TestonSignin()
    {
        $user = [
            'name' => 'Joe',
            'last_name' => 'Smith',
            'function' => 'Rental Clerk',
            'email' => 'testemail@test.com',
            'password' => 'passwordtest',
            'password_confirmation' => 'passwordtest'
        ];

        $response = $this->post('/registreer', $user);

        $response
            ->assertRedirect('/')
            ->assertSessionHas('status', 'We will send email about details');

        //Remove password and password_confirmation from array
        array_splice($user, 4, 2);

        $this->assertDatabaseHas('users', $user);


    }
}