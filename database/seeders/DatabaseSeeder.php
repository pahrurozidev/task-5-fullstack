<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::factory(20)->create();

        // Article::factory(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Category::create([
            'user_id' => mt_rand(1, 20),
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'user_id' => mt_rand(1, 20),
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'user_id' => mt_rand(1, 20),
            'name' => 'Data Science',
            'slug' => 'data-science'
        ]);
        Category::create([
            'user_id' => mt_rand(1, 20),
            'name' => 'Machine Learning',
            'slug' => 'machine-learning'
        ]);
        Category::create([
            'user_id' => mt_rand(1, 20),
            'name' => 'Job Vacancy',
            'slug' => 'job-vacancy'
        ]);



        Article::create([
            'user_id' => mt_rand(1, 20),
            'category_id' => mt_rand(1, 5),
            'title' => 'Article Pertama',
            'slug' => 'article-pertama',
            'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus deleniti eaque a cumque nesciunt voluptatibus alias, aspernatur porro dicta numquam vero ab? Commodi magnam veniam, numquam, pariatur ipsa explicabo, voluptas vitae earum eaque enim autem molestias rem? Distinctio adipisci numquam ut soluta rem quasi ex magni! Accusamus deleniti ullam velit? Ipsam dolor sed culpa non ad amet. Harum quasi officia accusantium nesciunt odio, maxime molestiae nam praesentium nulla tempora ab impedit deleniti eum aperiam. Eveniet sapiente ipsa recusandae magni sit nemo optio quo nisi repudiandae eligendi, totam illum aperiam ab! Ducimus sint aperiam reiciendis eligendi dolorem fuga quisquam temporibus. Et.',
        ]);
        Article::create([
            'user_id' => mt_rand(1, 20),
            'category_id' => mt_rand(1, 5),
            'title' => 'Article Kedua',
            'slug' => 'article-kedua',
            'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus deleniti eaque a cumque nesciunt voluptatibus alias, aspernatur porro dicta numquam vero ab? Commodi magnam veniam, numquam, pariatur ipsa explicabo, voluptas vitae earum eaque enim autem molestias rem? Distinctio adipisci numquam ut soluta rem quasi ex magni! Accusamus deleniti ullam velit? Ipsam dolor sed culpa non ad amet. Harum quasi officia accusantium nesciunt odio, maxime molestiae nam praesentium nulla tempora ab impedit deleniti eum aperiam. Eveniet sapiente ipsa recusandae magni sit nemo optio quo nisi repudiandae eligendi, totam illum aperiam ab! Ducimus sint aperiam reiciendis eligendi dolorem fuga quisquam temporibus. Et.',
        ]);
        Article::create([
            'user_id' => mt_rand(1, 20),
            'category_id' => mt_rand(1, 5),
            'title' => 'Article Ketiga',
            'slug' => 'article-ketiga',
            'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus deleniti eaque a cumque nesciunt voluptatibus alias, aspernatur porro dicta numquam vero ab? Commodi magnam veniam, numquam, pariatur ipsa explicabo, voluptas vitae earum eaque enim autem molestias rem? Distinctio adipisci numquam ut soluta rem quasi ex magni! Accusamus deleniti ullam velit? Ipsam dolor sed culpa non ad amet. Harum quasi officia accusantium nesciunt odio, maxime molestiae nam praesentium nulla tempora ab impedit deleniti eum aperiam. Eveniet sapiente ipsa recusandae magni sit nemo optio quo nisi repudiandae eligendi, totam illum aperiam ab! Ducimus sint aperiam reiciendis eligendi dolorem fuga quisquam temporibus. Et.',
        ]);
        Article::create([
            'user_id' => mt_rand(1, 20),
            'category_id' => mt_rand(1, 5),
            'title' => 'Article Keempat',
            'slug' => 'article-keempat',
            'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus deleniti eaque a cumque nesciunt voluptatibus alias, aspernatur porro dicta numquam vero ab? Commodi magnam veniam, numquam, pariatur ipsa explicabo, voluptas vitae earum eaque enim autem molestias rem? Distinctio adipisci numquam ut soluta rem quasi ex magni! Accusamus deleniti ullam velit? Ipsam dolor sed culpa non ad amet. Harum quasi officia accusantium nesciunt odio, maxime molestiae nam praesentium nulla tempora ab impedit deleniti eum aperiam. Eveniet sapiente ipsa recusandae magni sit nemo optio quo nisi repudiandae eligendi, totam illum aperiam ab! Ducimus sint aperiam reiciendis eligendi dolorem fuga quisquam temporibus. Et.',
        ]);
        Article::create([
            'user_id' => mt_rand(1, 20),
            'category_id' => mt_rand(1, 5),
            'title' => 'Article Kelima',
            'slug' => 'article-kelima',
            'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus deleniti eaque a cumque nesciunt voluptatibus alias, aspernatur porro dicta numquam vero ab? Commodi magnam veniam, numquam, pariatur ipsa explicabo, voluptas vitae earum eaque enim autem molestias rem? Distinctio adipisci numquam ut soluta rem quasi ex magni! Accusamus deleniti ullam velit? Ipsam dolor sed culpa non ad amet. Harum quasi officia accusantium nesciunt odio, maxime molestiae nam praesentium nulla tempora ab impedit deleniti eum aperiam. Eveniet sapiente ipsa recusandae magni sit nemo optio quo nisi repudiandae eligendi, totam illum aperiam ab! Ducimus sint aperiam reiciendis eligendi dolorem fuga quisquam temporibus. Et.',
        ]);
        Article::create([
            'user_id' => mt_rand(1, 20),
            'category_id' => mt_rand(1, 5),
            'title' => 'Article Keenam',
            'slug' => 'article-keenam',
            'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus deleniti eaque a cumque nesciunt voluptatibus alias, aspernatur porro dicta numquam vero ab? Commodi magnam veniam, numquam, pariatur ipsa explicabo, voluptas vitae earum eaque enim autem molestias rem? Distinctio adipisci numquam ut soluta rem quasi ex magni! Accusamus deleniti ullam velit? Ipsam dolor sed culpa non ad amet. Harum quasi officia accusantium nesciunt odio, maxime molestiae nam praesentium nulla tempora ab impedit deleniti eum aperiam. Eveniet sapiente ipsa recusandae magni sit nemo optio quo nisi repudiandae eligendi, totam illum aperiam ab! Ducimus sint aperiam reiciendis eligendi dolorem fuga quisquam temporibus. Et.',
        ]);
        Article::create([
            'user_id' => mt_rand(1, 20),
            'category_id' => mt_rand(1, 5),
            'title' => 'Article Ketujuh',
            'slug' => 'article-ketujuh',
            'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus deleniti eaque a cumque nesciunt voluptatibus alias, aspernatur porro dicta numquam vero ab? Commodi magnam veniam, numquam, pariatur ipsa explicabo, voluptas vitae earum eaque enim autem molestias rem? Distinctio adipisci numquam ut soluta rem quasi ex magni! Accusamus deleniti ullam velit? Ipsam dolor sed culpa non ad amet. Harum quasi officia accusantium nesciunt odio, maxime molestiae nam praesentium nulla tempora ab impedit deleniti eum aperiam. Eveniet sapiente ipsa recusandae magni sit nemo optio quo nisi repudiandae eligendi, totam illum aperiam ab! Ducimus sint aperiam reiciendis eligendi dolorem fuga quisquam temporibus. Et.',
        ]);
        Article::create([
            'user_id' => mt_rand(1, 20),
            'category_id' => mt_rand(1, 5),
            'title' => 'Article Kedelapan',
            'slug' => 'article-kedelapan',
            'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus deleniti eaque a cumque nesciunt voluptatibus alias, aspernatur porro dicta numquam vero ab? Commodi magnam veniam, numquam, pariatur ipsa explicabo, voluptas vitae earum eaque enim autem molestias rem? Distinctio adipisci numquam ut soluta rem quasi ex magni! Accusamus deleniti ullam velit? Ipsam dolor sed culpa non ad amet. Harum quasi officia accusantium nesciunt odio, maxime molestiae nam praesentium nulla tempora ab impedit deleniti eum aperiam. Eveniet sapiente ipsa recusandae magni sit nemo optio quo nisi repudiandae eligendi, totam illum aperiam ab! Ducimus sint aperiam reiciendis eligendi dolorem fuga quisquam temporibus. Et.',
        ]);
        Article::create([
            'user_id' => mt_rand(1, 20),
            'category_id' => mt_rand(1, 5),
            'title' => 'Article Kesembilan',
            'slug' => 'article-kesembilan',
            'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus deleniti eaque a cumque nesciunt voluptatibus alias, aspernatur porro dicta numquam vero ab? Commodi magnam veniam, numquam, pariatur ipsa explicabo, voluptas vitae earum eaque enim autem molestias rem? Distinctio adipisci numquam ut soluta rem quasi ex magni! Accusamus deleniti ullam velit? Ipsam dolor sed culpa non ad amet. Harum quasi officia accusantium nesciunt odio, maxime molestiae nam praesentium nulla tempora ab impedit deleniti eum aperiam. Eveniet sapiente ipsa recusandae magni sit nemo optio quo nisi repudiandae eligendi, totam illum aperiam ab! Ducimus sint aperiam reiciendis eligendi dolorem fuga quisquam temporibus. Et.',
        ]);
        Article::create([
            'user_id' => mt_rand(1, 20),
            'category_id' => mt_rand(1, 5),
            'title' => 'Article Kesepuluh',
            'slug' => 'article-kesepuluh',
            'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus deleniti eaque a cumque nesciunt voluptatibus alias, aspernatur porro dicta numquam vero ab? Commodi magnam veniam, numquam, pariatur ipsa explicabo, voluptas vitae earum eaque enim autem molestias rem? Distinctio adipisci numquam ut soluta rem quasi ex magni! Accusamus deleniti ullam velit? Ipsam dolor sed culpa non ad amet. Harum quasi officia accusantium nesciunt odio, maxime molestiae nam praesentium nulla tempora ab impedit deleniti eum aperiam. Eveniet sapiente ipsa recusandae magni sit nemo optio quo nisi repudiandae eligendi, totam illum aperiam ab! Ducimus sint aperiam reiciendis eligendi dolorem fuga quisquam temporibus. Et.',
        ]);
        Article::create([
            'user_id' => mt_rand(1, 20),
            'category_id' => mt_rand(1, 5),
            'title' => 'Article Kesebelas',
            'slug' => 'article-kesebelas',
            'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus deleniti eaque a cumque nesciunt voluptatibus alias, aspernatur porro dicta numquam vero ab? Commodi magnam veniam, numquam, pariatur ipsa explicabo, voluptas vitae earum eaque enim autem molestias rem? Distinctio adipisci numquam ut soluta rem quasi ex magni! Accusamus deleniti ullam velit? Ipsam dolor sed culpa non ad amet. Harum quasi officia accusantium nesciunt odio, maxime molestiae nam praesentium nulla tempora ab impedit deleniti eum aperiam. Eveniet sapiente ipsa recusandae magni sit nemo optio quo nisi repudiandae eligendi, totam illum aperiam ab! Ducimus sint aperiam reiciendis eligendi dolorem fuga quisquam temporibus. Et.',
        ]);
        Article::create([
            'user_id' => mt_rand(1, 20),
            'category_id' => mt_rand(1, 5),
            'title' => 'Article Kedua Belas',
            'slug' => 'article-keduabelas',
            'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus deleniti eaque a cumque nesciunt voluptatibus alias, aspernatur porro dicta numquam vero ab? Commodi magnam veniam, numquam, pariatur ipsa explicabo, voluptas vitae earum eaque enim autem molestias rem? Distinctio adipisci numquam ut soluta rem quasi ex magni! Accusamus deleniti ullam velit? Ipsam dolor sed culpa non ad amet. Harum quasi officia accusantium nesciunt odio, maxime molestiae nam praesentium nulla tempora ab impedit deleniti eum aperiam. Eveniet sapiente ipsa recusandae magni sit nemo optio quo nisi repudiandae eligendi, totam illum aperiam ab! Ducimus sint aperiam reiciendis eligendi dolorem fuga quisquam temporibus. Et.',
        ]);
        Article::create([
            'user_id' => mt_rand(1, 20),
            'category_id' => mt_rand(1, 5),
            'title' => 'Article Ketiga Belas',
            'slug' => 'article-ketigabelas',
            'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus deleniti eaque a cumque nesciunt voluptatibus alias, aspernatur porro dicta numquam vero ab? Commodi magnam veniam, numquam, pariatur ipsa explicabo, voluptas vitae earum eaque enim autem molestias rem? Distinctio adipisci numquam ut soluta rem quasi ex magni! Accusamus deleniti ullam velit? Ipsam dolor sed culpa non ad amet. Harum quasi officia accusantium nesciunt odio, maxime molestiae nam praesentium nulla tempora ab impedit deleniti eum aperiam. Eveniet sapiente ipsa recusandae magni sit nemo optio quo nisi repudiandae eligendi, totam illum aperiam ab! Ducimus sint aperiam reiciendis eligendi dolorem fuga quisquam temporibus. Et.',
        ]);
        Article::create([
            'user_id' => mt_rand(1, 20),
            'category_id' => mt_rand(1, 5),
            'title' => 'Article Keempat Belas',
            'slug' => 'article-keempatbelas',
            'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus deleniti eaque a cumque nesciunt voluptatibus alias, aspernatur porro dicta numquam vero ab? Commodi magnam veniam, numquam, pariatur ipsa explicabo, voluptas vitae earum eaque enim autem molestias rem? Distinctio adipisci numquam ut soluta rem quasi ex magni! Accusamus deleniti ullam velit? Ipsam dolor sed culpa non ad amet. Harum quasi officia accusantium nesciunt odio, maxime molestiae nam praesentium nulla tempora ab impedit deleniti eum aperiam. Eveniet sapiente ipsa recusandae magni sit nemo optio quo nisi repudiandae eligendi, totam illum aperiam ab! Ducimus sint aperiam reiciendis eligendi dolorem fuga quisquam temporibus. Et.',
        ]);
        Article::create([
            'user_id' => mt_rand(1, 15),
            'category_id' => mt_rand(1, 5),
            'title' => 'Article Kelima Belas',
            'slug' => 'article-kelimabelas',
            'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus deleniti eaque a cumque nesciunt voluptatibus alias, aspernatur porro dicta numquam vero ab? Commodi magnam veniam, numquam, pariatur ipsa explicabo, voluptas vitae earum eaque enim autem molestias rem? Distinctio adipisci numquam ut soluta rem quasi ex magni! Accusamus deleniti ullam velit? Ipsam dolor sed culpa non ad amet. Harum quasi officia accusantium nesciunt odio, maxime molestiae nam praesentium nulla tempora ab impedit deleniti eum aperiam. Eveniet sapiente ipsa recusandae magni sit nemo optio quo nisi repudiandae eligendi, totam illum aperiam ab! Ducimus sint aperiam reiciendis eligendi dolorem fuga quisquam temporibus. Et.',
        ]);
    }
}
