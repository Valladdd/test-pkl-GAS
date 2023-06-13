<?php

namespace App\Models;

class Post 
{
   private static $blog_posts = [
    [
        "title" => "Pertama",
        "slug" => "judul-post-pertama",
        "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam soluta sint nihil ad reprehenderit nulla quasi quisquam magni, dolore ex quae deserunt facere esse voluptatem ut vero! Exercitationem assumenda quibusdam tempora tempore ullam fuga deleniti, enim soluta ea nam cupiditate. Ea accusamus, odio mollitia ad sequi magni optio nemo velit perferendis quo inventore, hic provident? Dolore velit officia excepturi fugiat, quo quis sequi ipsam, quasi, unde atque aliquid sunt. Libero quas laudantium veniam impedit soluta minima, deserunt at earum reprehenderit."
    ],
    [
        "title" => "Kedua",
        "slug" => "judul-post-kedua",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate dolorum explicabo velit quis quam ut, eum sed. Itaque ratione laboriosam accusantium laudantium minus quisquam architecto sed iusto eos. Repudiandae quae dicta obcaecati, labore a perspiciatis aut corporis. Commodi magnam dolorum fugit nisi exercitationem perferendis asperiores possimus nesciunt quas deserunt voluptates inventore neque numquam minus distinctio eaque delectus, magni expedita maiores enim perspiciatis ullam assumenda omnis ad. Expedita, cum itaque facilis assumenda voluptates eos sequi earum? Mollitia fugiat ut cum enim error numquam eum ex corrupti amet iusto ea inventore dolorem, suscipit itaque repellat laudantium optio quidem, sapiente, quia quam rerum."
    ]
];

public static function all()
{
    return collect(self::$blog_posts);
}

public static function find($slug)
{
    $posts = static::all();
    return $posts->firstWhere('slug', $slug);

}

}
