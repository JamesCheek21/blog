<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Post::truncate();
        Category::truncate();

        $user = User::factory()->create();

        // dd($user->id);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet cursus justo. Integer varius ullamcorper consequat. Suspendisse ornare risus at elit rhoncus pulvinar. Morbi vel elit pharetra, porta tellus vitae, pretium leo. Quisque dictum orci vehicula porttitor finibus. Praesent eu quam varius, ultricies tortor at, hendrerit libero. Vestibulum semper lacus a fermentum congue. In hendrerit faucibus est, ut feugiat nunc semper vel. Pellentesque laoreet felis et lacus ullamcorper mattis. Aliquam ac sapien at ligula aliquet tincidunt. Mauris malesuada mauris in tellus tempus sodales.</p>',
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet cursus justo. Integer varius ullamcorper consequat. Suspendisse ornare risus at elit rhoncus pulvinar. Morbi vel elit pharetra, porta tellus vitae, pretium leo. Quisque dictum orci vehicula porttitor finibus. Praesent eu quam varius, ultricies tortor at, hendrerit libero. Vestibulum semper lacus a fermentum congue. In hendrerit faucibus est, ut feugiat nunc semper vel. Pellentesque laoreet felis et lacus ullamcorper mattis. Aliquam ac sapien at ligula aliquet tincidunt. Mauris malesuada mauris in tellus tempus sodales.</p>',
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My Personal Post',
            'slug' => 'my-personal-post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet cursus justo. Integer varius ullamcorper consequat. Suspendisse ornare risus at elit rhoncus pulvinar. Morbi vel elit pharetra, porta tellus vitae, pretium leo. Quisque dictum orci vehicula porttitor finibus. Praesent eu quam varius, ultricies tortor at, hendrerit libero. Vestibulum semper lacus a fermentum congue. In hendrerit faucibus est, ut feugiat nunc semper vel. Pellentesque laoreet felis et lacus ullamcorper mattis. Aliquam ac sapien at ligula aliquet tincidunt. Mauris malesuada mauris in tellus tempus sodales.</p>',
        ]);
    }
}
