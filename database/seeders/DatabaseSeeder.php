<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('posts')->truncate();
        
        DB::table('posts')->insert([
            'judul' => $this->generateRandomText(rand(3, 15), rand(3, 15)), 
            'berita' => $this->generateRandomText(rand(120, 250), rand(3, 10)), 
            'tahun' => rand(2020, 2023), 
            'penulis' => $this->generateRandomText(rand(3, 6), rand(4, 8)), 
        ]);
        
        Post::factory(5)->create();
    }

    /**
     * Generate random text with spaces.
     *
     * @param int $wordCount Number of words in the generated text.
     * @param int $wordLength Length of each word.
     * @return string
     */
    private function generateRandomText(int $wordCount, int $wordLength): string
    {
        $words = [];
        for ($i = 0; $i < $wordCount; $i++) {
            $words[] = Str::random($wordLength);
        }
        return implode(' ', $words);
    }
}
