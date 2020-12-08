<?php

namespace Database\Factories;

use App\Models\ComplaintModel;
use App\Models\ClientModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComplaintModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ComplaintModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(150),
            'text' => $this->faker->text(),
            'client_id' =>  $this->faker->numberBetween(0,ClientModel::all('id')->count()),
            'in_work' => 0
        ];
    }
}
