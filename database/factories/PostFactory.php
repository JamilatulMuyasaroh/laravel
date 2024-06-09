<?php
namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker = \Faker\Factory::create('id_ID');
        
        return [
            'judul' => $this->faker->sentence(rand(3, 15)), 
            'berita' => $this->faker->text(rand(400, 1500)), 
            'tahun' => $this->faker->numberBetween(2020, 2023), 
            'penulis' => $this->faker->name, 
        ];
    }
}
