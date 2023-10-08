<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model=Post::class;
    public function definition(): array
    {
        $text=$this->faker->text(40);

        return [
            'title'=>$text,
            'slug'=>Str::slug($text),
            'image'=>$this->faker->imageUrl(),
            'content'=>$this->faker->text(),
            'meta_keywords'=>$this->faker->text(50),
        ];
    }
}
