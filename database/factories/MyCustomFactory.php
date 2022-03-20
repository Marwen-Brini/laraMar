<?php

namespace laraMar\Laramar\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use laraMar\Laramar\Models\MyCustom;


class MyCustomFactory extends Factory
{
    protected $model = MyCustom::class;

    public function definition()
    {
        return [
            'name'  =>$this->faker->name
        ];
    }
}

