<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Appliance;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApplianceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Appliance::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'          => $this->faker->word,
            'manufacturer'  => $this->faker->company,
            'purchase_date' => $this->faker->dateTime($max = 'now'),
            'serial_num'    => $this->faker->iban($countryCode = null),
            'user_id'       => User::factory(),
        ];
    }
}
