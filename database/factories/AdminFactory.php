<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'name' => $this->faker->randomElement(['joel','placide','vida','landry','souleman','legrand','onesin','hida','pascal','pascaline']),
        'email' => $this->faker->randomElement(['joel','placide','vida']).'@'.$this->faker->randomElement(['vecteur']).'.'.$this->faker->randomElement(['joel'.rand(10,100),'placide'.rand(10,100),'vida'.rand(10,100),]),   
        'phone' => '+237 675985291',
        'gender' => $this->faker->randomElement(['male','female']),
        'city' => $this->faker->randomElement(['douala','yaoundé','bafoussam']),
        'password' => bcrypt(('123456789')),
        'type'=>'admin',
        'status'=>1
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
