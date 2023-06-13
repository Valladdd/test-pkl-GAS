<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        User::create([
            'name' => 'Valladd',
            'username' => 'valladd',
            'email' => 'nauvalakysan10@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Nauval',
        //     'email' => 'nauval@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Progamming',
            'slug' => 'web-progamming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis quasi eaque eligendi iste nemo. Sequi natus dicta ab minima ut culpa, nihil rerum consequuntur facere delectus consequatur est repellendus, aut eum dolores expedita saepe? Deleniti sint excepturi porro,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis quasi eaque eligendi iste nemo. Sequi natus dicta ab minima ut culpa, nihil rerum consequuntur facere delectus consequatur est repellendus, aut eum dolores expedita saepe? Deleniti sint excepturi porro, inventore ipsum, aperiam tempora ipsam nulla delectus perspiciatis ad quos! Ipsum reiciendis totam, laboriosam numquam quo veniam iusto doloremque quos omnis adipisci qui saepe, fuga quia ad, et quis nemo corporis ullam ratione voluptates eligendi harum nulla minima a. Pariatur, voluptate nam optio eveniet beatae harum incidunt natus exercitationem, facere quo deserunt soluta atque dolorem voluptatum aperiam cumque animi tenetur explicabo similique.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis quasi eaque eligendi iste nemo. Sequi natus dicta ab minima ut culpa, nihil rerum consequuntur facere delectus consequatur est repellendus, aut eum dolores expedita saepe? Deleniti sint excepturi porro,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis quasi eaque eligendi iste nemo. Sequi natus dicta ab minima ut culpa, nihil rerum consequuntur facere delectus consequatur est repellendus, aut eum dolores expedita saepe? Deleniti sint excepturi porro, inventore ipsum, aperiam tempora ipsam nulla delectus perspiciatis ad quos! Ipsum reiciendis totam, laboriosam numquam quo veniam iusto doloremque quos omnis adipisci qui saepe, fuga quia ad, et quis nemo corporis ullam ratione voluptates eligendi harum nulla minima a. Pariatur, voluptate nam optio eveniet beatae harum incidunt natus exercitationem, facere quo deserunt soluta atque dolorem voluptatum aperiam cumque animi tenetur explicabo similique.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis quasi eaque eligendi iste nemo. Sequi natus dicta ab minima ut culpa, nihil rerum consequuntur facere delectus consequatur est repellendus, aut eum dolores expedita saepe? Deleniti sint excepturi porro,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis quasi eaque eligendi iste nemo. Sequi natus dicta ab minima ut culpa, nihil rerum consequuntur facere delectus consequatur est repellendus, aut eum dolores expedita saepe? Deleniti sint excepturi porro, inventore ipsum, aperiam tempora ipsam nulla delectus perspiciatis ad quos! Ipsum reiciendis totam, laboriosam numquam quo veniam iusto doloremque quos omnis adipisci qui saepe, fuga quia ad, et quis nemo corporis ullam ratione voluptates eligendi harum nulla minima a. Pariatur, voluptate nam optio eveniet beatae harum incidunt natus exercitationem, facere quo deserunt soluta atque dolorem voluptatum aperiam cumque animi tenetur explicabo similique.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis quasi eaque eligendi iste nemo. Sequi natus dicta ab minima ut culpa, nihil rerum consequuntur facere delectus consequatur est repellendus, aut eum dolores expedita saepe? Deleniti sint excepturi porro,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis quasi eaque eligendi iste nemo. Sequi natus dicta ab minima ut culpa, nihil rerum consequuntur facere delectus consequatur est repellendus, aut eum dolores expedita saepe? Deleniti sint excepturi porro, inventore ipsum, aperiam tempora ipsam nulla delectus perspiciatis ad quos! Ipsum reiciendis totam, laboriosam numquam quo veniam iusto doloremque quos omnis adipisci qui saepe, fuga quia ad, et quis nemo corporis ullam ratione voluptates eligendi harum nulla minima a. Pariatur, voluptate nam optio eveniet beatae harum incidunt natus exercitationem, facere quo deserunt soluta atque dolorem voluptatum aperiam cumque animi tenetur explicabo similique.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
