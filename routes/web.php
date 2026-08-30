<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/feed', function () {
    $feedItems = json_decode(json_encode([
        [
            'postedDateTime' => '3h',
            'profile' => [
                'avatar' => '/images/michael.png',
                'displayName' => 'Michael',
                'handle' => '@mmich_jj'
            ],
            'content' => <<<str
                 <p>
                    I made this ! <a href="#">#myartwork</a> <a href="#">#pixl</a>
                 </p>
                 <img
                    src="/images/simon-chilling.png"
                    alt="Image post for simon-chilling"
                 />
              str,
            'likeCount' => 23,
            'replyCount' => 45,
            'repostCount' => 151,
            'replies' => [
                [
                    'profile' => [
                        'avatar' => '/images/simon-chilling.png',
                        'displayName' => 'Simon',
                        'handle' => '@simonswisse'
                    ],
                    'content' => '<p>Heh - this is just look like me!</p>',
                    'postedDateTime' => '1h',
                    'likeCount' => 52,
                    'replyCount' => 12,
                    'repostCount' => 200,
                ]
            ]
        ]
    ]));

    return view('feed', compact('feedItems'));
});

Route::get('/profile', function () {
    $feedItems = json_decode(json_encode([
        [
            'postedDateTime' => '3h',
            'profile' => [
                'avatar' => '/images/michael.png',
                'displayName' => 'Michael',
                'handle' => '@mmich_jj'
            ],
            'content' => <<<str
                 <p>
                    I made this ! <a href="#">#myartwork</a> <a href="#">#pixl</a>
                 </p>
                 <img
                    src="/images/simon-chilling.png"
                    alt="Image post for simon-chilling"
                 />
            str,
            'likeCount' => 23,
            'replyCount' => 45,
            'repostCount' => 151,
            'replies' => [
                [
                    'profile' => [
                        'avatar' => '/images/simon-chilling.png',
                        'displayName' => 'Simon',
                        'handle' => '@simonswisse'
                    ],
                    'content' => '<p>Heh - this is just look like me!</p>',
                    'postedDateTime' => '1h',
                    'likeCount' => 52,
                    'replyCount' => 12,
                    'repostCount' => 200,
                ]
            ]
        ]
    ]));

    return view('profile', compact('feedItems'));
});
