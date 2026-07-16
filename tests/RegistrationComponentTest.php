<?php

use RainLab\User\Models\User;
use RainLab\User\Components\Registration;

/**
 * RegistrationComponentTest covers the Registration component
 */
class RegistrationComponentTest extends PluginTestCase
{
    /**
     * invokeCreateNewUser calls the protected createNewUser method
     */
    protected function invokeCreateNewUser(array $input): User
    {
        $component = new Registration(null, []);

        $method = new ReflectionMethod(Registration::class, 'createNewUser');
        $method->setAccessible(true);

        return $method->invoke($component, $input);
    }

    /**
     * validInput returns a baseline valid input payload
     */
    protected function validInput(array $overrides = []): array
    {
        return array_merge([
            'first_name' => 'Some',
            'last_name' => 'User',
            'email' => 'test@example.tld',
            'password' => 'ChangeMe888',
            'password_confirmation' => 'ChangeMe888',
        ], $overrides);
    }

    public function testCreateNewUserRegistersUser()
    {
        $user = $this->invokeCreateNewUser($this->validInput());

        $this->assertInstanceOf(User::class, $user);
        $this->assertFalse((bool) $user->is_guest);
        $this->assertEquals('test@example.tld', $user->email);
    }

    public function testCreateNewUserAllowsRegistrationWhenGuestExistsWithSameEmail()
    {
        $guest = User::create([
            'first_name' => 'Guest',
            'email' => 'shared@example.tld',
            'is_guest' => true,
        ]);

        $user = $this->invokeCreateNewUser($this->validInput([
            'email' => 'shared@example.tld',
        ]));

        $this->assertTrue($guest->is_guest);
        $this->assertFalse((bool) $user->is_guest);
        $this->assertNotEquals($guest->id, $user->id);
        $this->assertEquals(2, User::where('email', 'shared@example.tld')->count());
    }

    public function testCreateNewUserRejectsDuplicateRegisteredEmail()
    {
        User::create([
            'first_name' => 'Existing',
            'email' => 'taken@example.tld',
            'password' => 'ChangeMe888',
            'password_confirmation' => 'ChangeMe888',
        ]);

        $this->expectException(\Illuminate\Validation\ValidationException::class);

        $this->invokeCreateNewUser($this->validInput([
            'email' => 'taken@example.tld',
        ]));
    }
}
