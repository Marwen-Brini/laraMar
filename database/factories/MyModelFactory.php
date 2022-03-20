<?php

namespace laraMar\Laramar\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use laraMar\Laramar\Models\MyModel;


class MyModelFactory extends Factory
{
    protected $model = MyModel::class;

    public function definition()
    {
        return [
            'name'  =>$this->faker->name
        ];
    }
}

