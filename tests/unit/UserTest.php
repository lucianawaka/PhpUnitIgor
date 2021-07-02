<?php


class UserTest extends \PHPUnit\Framework\TestCase
{

    //Write TEST First
    
    public function testThatWeCanGetTheFirstName()
    {
        $user = new \App\Models\User;

        $user->setFirstName('Billy');

        $this->assertEquals($user->getFirstName(),'Billy');
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
}