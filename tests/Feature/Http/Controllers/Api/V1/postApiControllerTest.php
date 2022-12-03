<?php

namespace Tests\Feature\Http\Controllers\Api\V1;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use function Tests\actingAs;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class postApiControllerTest extends TestCase
{
    use WithFaker;

    /** @test */
    public function it_user_can_store_a_post()
    {
        $user = User::factory()->create();
        $category = Category::factory()->create();

        $post = new \stdClass();
        $post->title = "Create Test Title One";
        $post->content = "This is content of test post one";

        $this->actingAs($user, 'api')
            -> post(route('posts.store'), [
            'title' => $post->title,
            'content' => $post->content,
            'user_id' => $user->id,
            'category_id' => $category->id
        ])->assertSuccessful();
        $this->assertDatabaseHas('posts',[
            'title' => $post->title,
            'content' => $post->content,
            'user_id' => $user->id,
            'category_id' => $category->id
        ]);
    }

    /** @test */
    public function it_user_can_show_a_post()
    {
        $user = User::factory()->create();
        $category = Category::factory()->create();

        $this->actingAs($user, 'api');
        $post = Post::factory()->make();
        $post->user_id = $user->id;
        $post->category_id = $category->id;
        $user->post()->save($post);

        $this->get(route('posts.show', $post->id))->assertStatus(200);
    }

    /** @test */
    public function it_user_can_list_a_post()
    {
        $user = User::factory()->create();
        $category = Category::factory()->create();

        $this->actingAs($user, 'api');

        $post = Post::factory(3)->make();

        $user->post()->saveMany($post);
        $category->post()->saveMany($post);

        $this->get(route('posts.index'))->assertStatus(200);
    }

    /** @test */
    public function it_user_can_update_a_post()
    {
        $user = User::factory()->create();
        $category = Category::factory()->create();

        $post = Post::factory()->make();
        $post->user_id = $user->id;
        $post->category_id = $category->id;

        $user->post()->save($post);

        $updatePost = [
            'title' => 'Update Title test',
            'content' => 'Update Content test',
            'user_id' => $user->id,
            'category_id' => $category->id
        ];

        $this->actingAs($user, 'api')
            ->put(route('posts.update', $post->id), $updatePost)
            ->assertSuccessful();
        
        $this->assertDatabaseHas('posts', $updatePost);   
    }

    /** @test */
    public function it_user_can_delete_a_post()
    {
        $user = User::factory()->create();
        $category = Category::factory()->create();
    
        $this->actingAs($user, 'api');
        $post = Post::factory()->make();
        $post->user_id = $user->id;
        $post->category_id = $category->id;
        $user->post()->save($post);
    
        $this->delete(route('posts.destroy', $post->id))->assertStatus(200);
    }
}