<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'url' => 'https://file-examples-com.github.io/uploads/2017/04/file_example_MP4_1920_18MG.mp4',
            'length' => $this->faker->randomNumber(3),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->realText(),
            'thumbnail' => 'https://loremflickr.com/446/240/world?random=' . rand(1, 99)
        ];
    }
}
