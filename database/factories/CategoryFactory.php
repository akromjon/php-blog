<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{

    protected $model= Category::class;
    public function definition(): array
    {

        return [
            'title'=>$this->faker->title(),
            'image'=>$this->faker->imageUrl(),
            'slug'=>$this->faker->slug(),
            'meta_keywords'=>$this->faker->text(),
            'description'=>$this->faker->text(),
            'status'=>$this->faker->boolean(),
            'sort'=>$this->faker->randomDigit(),
        ];
    }
}
