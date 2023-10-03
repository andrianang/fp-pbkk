<?php

namespace Database\Factories;
use Faker\Generator as Faker;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Country>
 */
class NegaraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>;
     */
    protected $usedCountryNames = [];

    public function definition()
    {
        $countries = [
            'Filipina',
            'Korea Selatan',
            'Jepang',
            'China',
        ];

        // Filter out country names that have already been used
        $availableCountries = array_diff($countries, $this->usedCountryNames);

        // If all country names have been used, reset the usedCountryNames array
        if (empty($availableCountries)) {
            $this->usedCountryNames = [];
            $availableCountries = $countries;
        }

        $selectedCountry = $this->faker->randomElement($availableCountries);

        $this->usedCountryNames[] = $selectedCountry;

        return [
            'nama_negara' => $selectedCountry,
        ];
    }
}
