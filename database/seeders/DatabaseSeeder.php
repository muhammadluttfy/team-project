<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Ahlun Nazar',
            'username' => 'ahlunnazar',
            'email' => 'ahlun@gmail.com',
            'password' => bcrypt('password')
        ]);
        // User::create([
        //     'name' => 'Dea Caesaria',
        //     'email' => 'dea@gmail.com',
        //     'password' => bcrypt('password')
        // ]);

        Category::create([
            'name' => 'Programing',
            'slug' => 'programing'
        ]);
        Category::create([
            'name' => 'Designer',
            'slug' => 'designer'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(25)->create();

        // Post::create([
        //     'title' => 'Judul pertama',
        //     'slug' => 'judul-Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse quia at dolorum nesciunt facilis ipsa, ullam velit hic voluptatem recusandae!',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda, voluptates consequatur ut, voluptate labore deserunt in, maiores quam voluptatibus odio voluptatum odit ipsa quibusdam non facilis quae eveniet reprehenderit nisi sapiente neque tempora! Ut soluta consectetur aperiam dignissimos nostrum dicta? Culpa vel exercitationem delectus esse cumque, suscipit fugiat quas pariatur quae laudantium nulla provident et fugit velit fuga, distinctio itaque officiis? Esse quod sint facilis? Suscipit harum facilis, minus aliquam sapiente odio nihil magni laboriosam tenetur et quisquam, consequuntur eos itaque officiis saepe ut? Enim adipisci, aliquam dolorem deleniti hic eveniet ducimus non commodi officia numquam. Qui ab voluptate ex!<p> <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda, voluptates consequatur ut, voluptate labore deserunt in, maiores quam voluptatibus odio voluptatum odit ipsa quibusdam non facilis quae eveniet reprehenderit nisi sapiente neque tempora! Ut soluta consectetur aperiam dignissimos nostrum dicta? Culpa vel exercitationem delectus esse cumque, suscipit fugiat quas pariatur quae laudantium nulla provident et fugit velit fuga, distinctio itaque officiis? Esse quod sint facilis? Suscipit harum facilis, minus aliquam sapiente odio nihil magni laboriosam tenetur et quisquam, consequuntur eos itaque officiis saepe ut? Enim adipisci, aliquam dolorem deleniti hic eveniet ducimus non commodi officia numquam. Qui ab voluptate ex!.<p> <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda, voluptates consequatur ut, voluptate labore deserunt in, maiores quam voluptatibus odio voluptatum odit ipsa quibusdam non facilis quae eveniet reprehenderit nisi sapiente neque tempora! Ut soluta consectetur aperiam dignissimos nostrum dicta? Culpa vel exercitationem delectus esse cumque, suscipit fugiat quas pariatur quae laudantium nulla provident et fugit velit fuga, distinctio itaque officiis? Esse quod sint facilis? Suscipit harum facilis, minus aliquam sapiente odio nihil magni laboriosam tenetur et quisquam, consequuntur eos itaque officiis saepe ut? Enim adipisci, aliquam dolorem deleniti hic eveniet ducimus non commodi officia numquam. Qui ab voluptate ex!.<p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse quia at dolorum nesciunt facilis ipsa, ullam velit hic voluptatem recusandae!',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda, voluptates consequatur ut, voluptate labore deserunt in, maiores quam voluptatibus odio voluptatum odit ipsa quibusdam non facilis quae eveniet reprehenderit nisi sapiente neque tempora! Ut soluta consectetur aperiam dignissimos nostrum dicta? Culpa vel exercitationem delectus esse cumque, suscipit fugiat quas pariatur quae laudantium nulla provident et fugit velit fuga, distinctio itaque officiis? Esse quod sint facilis? Suscipit harum facilis, minus aliquam sapiente odio nihil magni laboriosam tenetur et quisquam, consequuntur eos itaque officiis saepe ut? Enim adipisci, aliquam dolorem deleniti hic eveniet ducimus non commodi officia numquam. Qui ab voluptate ex!<p> <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda, voluptates consequatur ut, voluptate labore deserunt in, maiores quam voluptatibus odio voluptatum odit ipsa quibusdam non facilis quae eveniet reprehenderit nisi sapiente neque tempora! Ut soluta consectetur aperiam dignissimos nostrum dicta? Culpa vel exercitationem delectus esse cumque, suscipit fugiat quas pariatur quae laudantium nulla provident et fugit velit fuga, distinctio itaque officiis? Esse quod sint facilis? Suscipit harum facilis, minus aliquam sapiente odio nihil magni laboriosam tenetur et quisquam, consequuntur eos itaque officiis saepe ut? Enim adipisci, aliquam dolorem deleniti hic eveniet ducimus non commodi officia numquam. Qui ab voluptate ex!.<p> <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda, voluptates consequatur ut, voluptate labore deserunt in, maiores quam voluptatibus odio voluptatum odit ipsa quibusdam non facilis quae eveniet reprehenderit nisi sapiente neque tempora! Ut soluta consectetur aperiam dignissimos nostrum dicta? Culpa vel exercitationem delectus esse cumque, suscipit fugiat quas pariatur quae laudantium nulla provident et fugit velit fuga, distinctio itaque officiis? Esse quod sint facilis? Suscipit harum facilis, minus aliquam sapiente odio nihil magni laboriosam tenetur et quisquam, consequuntur eos itaque officiis saepe ut? Enim adipisci, aliquam dolorem deleniti hic eveniet ducimus non commodi officia numquam. Qui ab voluptate ex!.<p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse quia at dolorum nesciunt facilis ipsa, ullam velit hic voluptatem recusandae!',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda, voluptates consequatur ut, voluptate labore deserunt in, maiores quam voluptatibus odio voluptatum odit ipsa quibusdam non facilis quae eveniet reprehenderit nisi sapiente neque tempora! Ut soluta consectetur aperiam dignissimos nostrum dicta? Culpa vel exercitationem delectus esse cumque, suscipit fugiat quas pariatur quae laudantium nulla provident et fugit velit fuga, distinctio itaque officiis? Esse quod sint facilis? Suscipit harum facilis, minus aliquam sapiente odio nihil magni laboriosam tenetur et quisquam, consequuntur eos itaque officiis saepe ut? Enim adipisci, aliquam dolorem deleniti hic eveniet ducimus non commodi officia numquam. Qui ab voluptate ex!<p> <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda, voluptates consequatur ut, voluptate labore deserunt in, maiores quam voluptatibus odio voluptatum odit ipsa quibusdam non facilis quae eveniet reprehenderit nisi sapiente neque tempora! Ut soluta consectetur aperiam dignissimos nostrum dicta? Culpa vel exercitationem delectus esse cumque, suscipit fugiat quas pariatur quae laudantium nulla provident et fugit velit fuga, distinctio itaque officiis? Esse quod sint facilis? Suscipit harum facilis, minus aliquam sapiente odio nihil magni laboriosam tenetur et quisquam, consequuntur eos itaque officiis saepe ut? Enim adipisci, aliquam dolorem deleniti hic eveniet ducimus non commodi officia numquam. Qui ab voluptate ex!.<p> <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda, voluptates consequatur ut, voluptate labore deserunt in, maiores quam voluptatibus odio voluptatum odit ipsa quibusdam non facilis quae eveniet reprehenderit nisi sapiente neque tempora! Ut soluta consectetur aperiam dignissimos nostrum dicta? Culpa vel exercitationem delectus esse cumque, suscipit fugiat quas pariatur quae laudantium nulla provident et fugit velit fuga, distinctio itaque officiis? Esse quod sint facilis? Suscipit harum facilis, minus aliquam sapiente odio nihil magni laboriosam tenetur et quisquam, consequuntur eos itaque officiis saepe ut? Enim adipisci, aliquam dolorem deleniti hic eveniet ducimus non commodi officia numquam. Qui ab voluptate ex!.<p>'
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'category_id' => 3,
        //     'user_id' => 2,
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse quia at dolorum nesciunt facilis ipsa, ullam velit hic voluptatem recusandae!',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda, voluptates consequatur ut, voluptate labore deserunt in, maiores quam voluptatibus odio voluptatum odit ipsa quibusdam non facilis quae eveniet reprehenderit nisi sapiente neque tempora! Ut soluta consectetur aperiam dignissimos nostrum dicta? Culpa vel exercitationem delectus esse cumque, suscipit fugiat quas pariatur quae laudantium nulla provident et fugit velit fuga, distinctio itaque officiis? Esse quod sint facilis? Suscipit harum facilis, minus aliquam sapiente odio nihil magni laboriosam tenetur et quisquam, consequuntur eos itaque officiis saepe ut? Enim adipisci, aliquam dolorem deleniti hic eveniet ducimus non commodi officia numquam. Qui ab voluptate ex!<p> <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda, voluptates consequatur ut, voluptate labore deserunt in, maiores quam voluptatibus odio voluptatum odit ipsa quibusdam non facilis quae eveniet reprehenderit nisi sapiente neque tempora! Ut soluta consectetur aperiam dignissimos nostrum dicta? Culpa vel exercitationem delectus esse cumque, suscipit fugiat quas pariatur quae laudantium nulla provident et fugit velit fuga, distinctio itaque officiis? Esse quod sint facilis? Suscipit harum facilis, minus aliquam sapiente odio nihil magni laboriosam tenetur et quisquam, consequuntur eos itaque officiis saepe ut? Enim adipisci, aliquam dolorem deleniti hic eveniet ducimus non commodi officia numquam. Qui ab voluptate ex!.<p> <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda, voluptates consequatur ut, voluptate labore deserunt in, maiores quam voluptatibus odio voluptatum odit ipsa quibusdam non facilis quae eveniet reprehenderit nisi sapiente neque tempora! Ut soluta consectetur aperiam dignissimos nostrum dicta? Culpa vel exercitationem delectus esse cumque, suscipit fugiat quas pariatur quae laudantium nulla provident et fugit velit fuga, distinctio itaque officiis? Esse quod sint facilis? Suscipit harum facilis, minus aliquam sapiente odio nihil magni laboriosam tenetur et quisquam, consequuntur eos itaque officiis saepe ut? Enim adipisci, aliquam dolorem deleniti hic eveniet ducimus non commodi officia numquam. Qui ab voluptate ex!.<p>'
        // ]);
    }
}
