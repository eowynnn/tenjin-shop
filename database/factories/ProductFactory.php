<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name_product' => fake()->sentence(),
            'short_name' => fake()->sentence(),
            'deskripsi' => fake()->text(),
            'slug' => Str::slug(fake()->sentence()),
            'deskripsi' => array_random(['new.jpg', 'new1.jpg', 'new2.jpg', 'new3.jpeg']),
            'mockup_1' => array_random(['new.jpg', 'new1.jpg', 'new2.jpg', 'new3.jpeg']),
            'mockup_2' => array_random(['new.jpg', 'new1.jpg', 'new2.jpg', 'new3.jpeg']),
            'price' => array_random(['200000', '300000', '400000', '500000']),
            'price' => array_random(['200', '300', '400', '500']),
        ];
    }
}
