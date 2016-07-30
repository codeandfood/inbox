<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegisterUserTest extends TestCase
{
	Use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testNewUserRegistration()
    {
        $this->visit('/register')
        	->type('Oz','name')
        	->type('oz@gmail.com','email')
        	->type('oz1234','password')
        	->type('oz1234','password_confirmation')
        	->press('Register')
        	->seePageIs('/');
        $this->seeInDatabase('Users',[
        	'name' => 'Oz',
        	'email' => 'oz@gmail.com',
        ]);
    }
}
