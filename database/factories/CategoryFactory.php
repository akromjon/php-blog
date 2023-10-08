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
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model= Category::class;
    public function definition(): array
    {
        $title=$this->faker->text(40);
        return [
            'title'=>$title,
            'image'=>$this->faker->imageUrl(),
            'slug'=>Str::slug($title),
            'meta_keywords'=>$this->faker->text(),
        ];
    }
}
