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

test('Can reply to post', function () {
    $originalPost = Post::factory()->create();
    $replier = Profile::factory()->create();

    $reply = Post::reply($replier, $originalPost, 'Reply content');

    expect($reply->parent->is($originalPost))->toBeTrue()
        ->and($originalPost->replies)->toHaveCount(1);
});

test('Post can have many replies', function () {
    $originalPost = Post::factory()->create();
    $replies = Post::factory()->count(4)->reply($originalPost)->create();

    expect($replies->first()->parent->is($originalPost))->toBeTrue()
        ->and($originalPost->replies)->toHaveCount(4)
        ->and($originalPost->replies->contains($replies->first()))->toBeTrue();
});
