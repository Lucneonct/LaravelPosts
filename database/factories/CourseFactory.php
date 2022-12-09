<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'     => random_int(1, 10),
            'category_id' => random_int(1, 10),
            'name'        => $this->faker->name(),
            'slug'        => $this->faker->slug(),
            'image'       => $this->faker->imageUrl(),
            'description' => $this->faker->text(800)
        ];
    }
}
