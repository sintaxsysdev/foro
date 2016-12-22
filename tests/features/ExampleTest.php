<?php

class ExampleTest extends FeatureTestCase
{

    function test_basic_example()
    {
        $user = factory(\App\User::class)->create([
            'name' => 'Eddy Loayza',
            'email' => 'edyde@outlook.com',
        ]);

        $this->actingAs($user, 'api')
            ->visit('api/user')
            ->see('Eddy Loayza')
            ->see('edyde@outlook.com');
    }
}
