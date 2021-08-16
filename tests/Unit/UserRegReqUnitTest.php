<?php

namespace Tests\Unit;

use App\Http\Requests\UserRegistrationRequest;
use PHPUnit\Framework\TestCase;

class UserRegReqUnitTest extends TestCase
{
    public $userRegReq ;
    protected function setUp(): void
    {
        parent::setUp();
        $this->userRegReq = new UserRegistrationRequest();
    }

    /**
     * @test
     */
    public function user_registration_request_should_be_valid(){
       $this->assertEquals([
           'name' => 'required|string|max:255',
           'email' => 'required|string|email|max:255',
           'username' => 'required|string|max:100',
           'password' => 'required|string|min:6|confirmed'
       ],$this->userRegReq->rules());
   }
}
