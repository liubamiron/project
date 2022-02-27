<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Imobil;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class OrderFactory extends Factory
{

    public function definition()
    {
        return [
            'customer_id'=> Customer::factory(),
            'imobil_id'=> Imobil::factory(),
            'reserved_start_date'=> $this->faker->dateTime(),
            'reserved_end_date'=> $this->faker->dateTime(),
        ];
    }
   
}
