<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'user_id' => function(){
                return User::factory()->create()->id;
            },
            'title' => $this->faker->title,
            'content' => $this->faker->text,
            'published' => $this->faker->boolean
        ];
    }
}
