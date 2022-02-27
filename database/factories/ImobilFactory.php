<?php

namespace Database\Factories;


use App\Models\Owner;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ImobilFactory extends Factory
{

    public function definition()
    {
        return [
            'owner_id' => Owner::factory(),
            'type' =>$this->faker->word(),
            'price' => $this->faker->numberBetween($min = 100, $max = 700),
            'rooms_nr' =>$this->faker->numberBetween($min = 0, $max = 3),
            'building_type' =>$this->faker->word(),
            'square_mp' => $this->faker->numberBetween($min = 40, $max = 100),
            'floor'=>  $this->faker->numberBetween($min = 1, $max = 25),
            'bath' => $this->faker->numberBetween($min = 0, $max = 5),
            'balcony' => $this->faker->numberBetween($min = 0, $max = 4),
            'seria'=>$this->faker->numberBetween($min = 102, $max = 143),
            'created_at' => $this->faker->dateTime(),
        ];
    }
   
}


