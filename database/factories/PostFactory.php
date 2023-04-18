<?php
namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
protected $model = Post::class;

public function definition()
{
return [
'title' => $this->faker->words(3, true),
'content' => $this->faker->paragraph(1),
'created_at'=> $this->faker->dateTime(),
'updated_at'=> $this->faker->dateTime(),
'rubric_id'=>$this->faker->numberBetween(1,5),
];
}
}
