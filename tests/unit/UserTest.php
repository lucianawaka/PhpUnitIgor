<?php


class UserTest extends \PHPUnit\Framework\TestCase
{
    //Before every single TEST
    protected $user;
    
    public function setUp() :void {
        $this->user = new \App\Models\User;
    }


    //RED GREEN REFACTOR

    /** @test */
    public function ThatWeCanGetTheFirstName()
    {
       // $user = new \App\Models\User;

        $this->user->setFirstName('Billy');

        $this->assertEquals($this->user->getFirstName(),'Billy');
    }

    public function testThatWeCanGetTheLastName()
    {
        $user = new \App\Models\User;

        $user->setLastName('Joe');

        $this->assertEquals($user->getLastName(),'Joe');
    }

    public function testFullNameIsReturned()
    {
        $user = new \App\Models\User;
        $user->setFirstName('Billy');
        $user->setLastName('Joe');
        
        $this->assertEquals($user->getFullName(),'Billy Joe');
    }

    public function testFirstNameAndLastNameAreTrimmed()
    {
        $user = new \App\Models\User;
        $user->setFirstName('   Billy ');
        $user->setLastName('Joe  ');

        $this->assertEquals($user->getFirstName(), 'Billy');
        $this->assertEquals($user->getLastName(), 'Joe');

    }

    public function testEmailAddressCanBeSet(){

        $email = 'lucianawakabayashi@gmail.com';
        
        $user = new \App\Models\User;
        $user->setEmail($email);

        $this->assertEquals($user->getEmail(),$email);

    }

    public function testEmailVariableContainsCorrectValues(){
        $user = new \App\Models\User;
        $user->setFirstName('Billy');
        $user->setLastName('Joe');
        $user->setEmail('billy@codecourse.com');

        $emailVariables = $user->getEmailVariables();
        $this->assertArrayHasKey('full_name',$emailVariables);
        $this->assertArrayHasKey('email',$emailVariables);
        
        $this->assertEquals($emailVariables['full_name'],'Billy Joe');
        $this->assertEquals($emailVariables['email'],'billy@codecourse.com');
        
    }
}