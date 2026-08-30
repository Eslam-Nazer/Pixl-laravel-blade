<?php

use App\Models\Post;
use App\Models\Profile;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('Allows a profile publish a post', function () {
    $profile = Profile::factory()->create();
    $post = Post::publish($profile, 'Some of content here');

    expect($post->exists)->toBeTrue()
        ->and($post->profile->is($profile))->toBeTrue()
        ->and($post->parent_id)->toBeNull()
        ->and($post->repost_of_id)->toBeNull();
});
