<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $contenu = fake()->paragraphs(asText: true);
        $created_at = fake()->dateTimeBetween('-1 year');

        return [

            'Titre' => fake()->unique()->sentence,
            'categorie_id' => 1,
            'extrait'=> Str::limit($contenu, 100),
            'Image' => fake()->imageUrl,
            'contenu' => $contenu,
            'user_id' => 1,
            'created_at' => $created_at,
            'updated_at' => $created_at,
        ];
    }
}
