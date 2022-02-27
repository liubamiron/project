<?php

namespace Database\Factories;


use App\Models\Imobil;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AddressFactory extends Factory
{

    public function definition()
    {
        return [
            
        'imobil_id' => Imobil::factory(),
        'street' => $this->faker->sentence(),
        'house_nr'=> $this->faker->buildingNumber(),
        'apart_nr'=> $this->faker->buildingNumber(),
        'city'=> $this->faker->city(),
        'created_at' => $this->faker->dateTime(),
        ];
    }
   
}
