<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\User;
use Database\Seeders\CategorieSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_ko_kota_na_site(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    protected function data(): array
    {
        $user = User::create([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'password' => 'test1234'
        ]);


        $this->seed(CategorieSeeder::class);
        $categorie = \App\Models\Categorie::first();

        $post = Post::factory()->create([
            'Titre' => 'test',
            'Image' => 'test',
            'user_id' => $user->id,
            'categorie_id' => $categorie->id,
        ]);

        return [
            'user' => $user,
            'categorie' => $categorie,
            'post' => $post
        ];
    }

    public function test_to_create_post(): void
    {
        $data = $this->data();

        $this->assertDatabaseHas('posts', [
            'Titre' => 'test',
            'user_id' => $data['user']->id,
            'categorie_id' => $data['categorie']->id,
        ]);

        $response = $this->get(route('show', $data['post']->id));
        $response->assertStatus(200);
    }

    public function test_to_view_a_post(): void
    {
        $data = $this->data();

        $response = $this->get('/' . $data['post']->id);

        $response->assertStatus(200);
        $response->assertSee($data['post']->Titre);

    }}
