<?php

namespace Modules\Posts\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Posts\Entities\Category;
use Modules\Posts\Entities\Post;

class PostsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");
        Post::create([
            'category_id'=>1,
            'title'=>'Ini judul post pertama',
            'slug'=>'ini-judul-post-pertama',
            'content'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse suscipit atque dolorem provident voluptatum exercitationem nulla mollitia assumenda quas, totam saepe sunt quasi error ab! Labore amet animi dolores et porro pariatur enim maxime sunt aut libero veniam in explicabo laudantium, repellat repudiandae quasi! Exercitationem quae quam rerum ducimus nemo nisi nihil animi quaerat veniam velit repellat, amet quas distinctio quis voluptates at temporibus vero quod labore architecto sint explicabo incidunt? Inventore quis velit minima maxime enim maiores? Ad, consectetur officiis similique repellat cum tenetur iste doloremque, adipisci officia ullam enim inventore nemo consequuntur provident aspernatur vel qui! Laborum eius, ab fugiat ad aperiam pariatur facilis sint, voluptatum officiis aut qui vero a amet voluptate quia enim adipisci. Quae molestiae cumque animi optio rerum! Nostrum officia numquam ullam eum beatae nulla sequi, modi blanditiis officiis vero at impedit saepe cum animi repudiandae expedita explicabo deleniti minus. Esse eveniet nulla excepturi eum voluptatum recusandae deleniti sequi ducimus est facilis, commodi, maiores odio cum inventore atque nihil voluptate, earum laborum veniam a magnam molestiae? Tempore ea quia consectetur in quo fugit ipsa ullam sit eum quibusdam voluptas debitis veniam asperiores explicabo repellendus minus sapiente tenetur dignissimos earum, facilis incidunt, eius ipsam at.'
        ]);
        Post::create([
            'category_id'=>1,
            'title'=>'Ini judul post kedua',
            'slug'=>'ini-judul-post-kedua',
            'content'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse suscipit atque dolorem provident voluptatum exercitationem nulla mollitia assumenda quas, totam saepe sunt quasi error ab! Labore amet animi dolores et porro pariatur enim maxime sunt aut libero veniam in explicabo laudantium, repellat repudiandae quasi! Exercitationem quae quam rerum ducimus nemo nisi nihil animi quaerat veniam velit repellat, amet quas distinctio quis voluptates at temporibus vero quod labore architecto sint explicabo incidunt? Inventore quis velit minima maxime enim maiores? Ad, consectetur officiis similique repellat cum tenetur iste doloremque, adipisci officia ullam enim inventore nemo consequuntur provident aspernatur vel qui! Laborum eius, ab fugiat ad aperiam pariatur facilis sint, voluptatum officiis aut qui vero a amet voluptate quia enim adipisci. Quae molestiae cumque animi optio rerum! Nostrum officia numquam ullam eum beatae nulla sequi, modi blanditiis officiis vero at impedit saepe cum animi repudiandae expedita explicabo deleniti minus. Esse eveniet nulla excepturi eum voluptatum recusandae deleniti sequi ducimus est facilis, commodi, maiores odio cum inventore atque nihil voluptate, earum laborum veniam a magnam molestiae? Tempore ea quia consectetur in quo fugit ipsa ullam sit eum quibusdam voluptas debitis veniam asperiores explicabo repellendus minus sapiente tenetur dignissimos earum, facilis incidunt, eius ipsam at.'
        ]);
        Post::create([
            'category_id'=>3,
            'title'=>'Ini judul post ketiga',
            'slug'=>'ini-judul-post-ketiga',
            'content'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse suscipit atque dolorem provident voluptatum exercitationem nulla mollitia assumenda quas, totam saepe sunt quasi error ab! Labore amet animi dolores et porro pariatur enim maxime sunt aut libero veniam in explicabo laudantium, repellat repudiandae quasi! Exercitationem quae quam rerum ducimus nemo nisi nihil animi quaerat veniam velit repellat, amet quas distinctio quis voluptates at temporibus vero quod labore architecto sint explicabo incidunt? Inventore quis velit minima maxime enim maiores? Ad, consectetur officiis similique repellat cum tenetur iste doloremque, adipisci officia ullam enim inventore nemo consequuntur provident aspernatur vel qui! Laborum eius, ab fugiat ad aperiam pariatur facilis sint, voluptatum officiis aut qui vero a amet voluptate quia enim adipisci. Quae molestiae cumque animi optio rerum! Nostrum officia numquam ullam eum beatae nulla sequi, modi blanditiis officiis vero at impedit saepe cum animi repudiandae expedita explicabo deleniti minus. Esse eveniet nulla excepturi eum voluptatum recusandae deleniti sequi ducimus est facilis, commodi, maiores odio cum inventore atque nihil voluptate, earum laborum veniam a magnam molestiae? Tempore ea quia consectetur in quo fugit ipsa ullam sit eum quibusdam voluptas debitis veniam asperiores explicabo repellendus minus sapiente tenetur dignissimos earum, facilis incidunt, eius ipsam at.'
        ]);
        Post::create([
            'category_id'=>3,
            'title'=>'Ini judul post keempat',
            'slug'=>'ini-judul-post-keempat',
            'content'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse suscipit atque dolorem provident voluptatum exercitationem nulla mollitia assumenda quas, totam saepe sunt quasi error ab! Labore amet animi dolores et porro pariatur enim maxime sunt aut libero veniam in explicabo laudantium, repellat repudiandae quasi! Exercitationem quae quam rerum ducimus nemo nisi nihil animi quaerat veniam velit repellat, amet quas distinctio quis voluptates at temporibus vero quod labore architecto sint explicabo incidunt? Inventore quis velit minima maxime enim maiores? Ad, consectetur officiis similique repellat cum tenetur iste doloremque, adipisci officia ullam enim inventore nemo consequuntur provident aspernatur vel qui! Laborum eius, ab fugiat ad aperiam pariatur facilis sint, voluptatum officiis aut qui vero a amet voluptate quia enim adipisci. Quae molestiae cumque animi optio rerum! Nostrum officia numquam ullam eum beatae nulla sequi, modi blanditiis officiis vero at impedit saepe cum animi repudiandae expedita explicabo deleniti minus. Esse eveniet nulla excepturi eum voluptatum recusandae deleniti sequi ducimus est facilis, commodi, maiores odio cum inventore atque nihil voluptate, earum laborum veniam a magnam molestiae? Tempore ea quia consectetur in quo fugit ipsa ullam sit eum quibusdam voluptas debitis veniam asperiores explicabo repellendus minus sapiente tenetur dignissimos earum, facilis incidunt, eius ipsam at.'
        ]);
        Post::create([
            'title'=>'Ini judul post kelima',
            'category_id'=>4,
            'slug'=>'ini-judul-post-kelima',
            'content'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse suscipit atque dolorem provident voluptatum exercitationem nulla mollitia assumenda quas, totam saepe sunt quasi error ab! Labore amet animi dolores et porro pariatur enim maxime sunt aut libero veniam in explicabo laudantium, repellat repudiandae quasi! Exercitationem quae quam rerum ducimus nemo nisi nihil animi quaerat veniam velit repellat, amet quas distinctio quis voluptates at temporibus vero quod labore architecto sint explicabo incidunt? Inventore quis velit minima maxime enim maiores? Ad, consectetur officiis similique repellat cum tenetur iste doloremque, adipisci officia ullam enim inventore nemo consequuntur provident aspernatur vel qui! Laborum eius, ab fugiat ad aperiam pariatur facilis sint, voluptatum officiis aut qui vero a amet voluptate quia enim adipisci. Quae molestiae cumque animi optio rerum! Nostrum officia numquam ullam eum beatae nulla sequi, modi blanditiis officiis vero at impedit saepe cum animi repudiandae expedita explicabo deleniti minus. Esse eveniet nulla excepturi eum voluptatum recusandae deleniti sequi ducimus est facilis, commodi, maiores odio cum inventore atque nihil voluptate, earum laborum veniam a magnam molestiae? Tempore ea quia consectetur in quo fugit ipsa ullam sit eum quibusdam voluptas debitis veniam asperiores explicabo repellendus minus sapiente tenetur dignissimos earum, facilis incidunt, eius ipsam at.'
        ]);
        Post::create([
            'category_id'=>4,
            'title'=>'Ini judul post keenam',
            'slug'=>'ini-judul-post-keenam',
            'content'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse suscipit atque dolorem provident voluptatum exercitationem nulla mollitia assumenda quas, totam saepe sunt quasi error ab! Labore amet animi dolores et porro pariatur enim maxime sunt aut libero veniam in explicabo laudantium, repellat repudiandae quasi! Exercitationem quae quam rerum ducimus nemo nisi nihil animi quaerat veniam velit repellat, amet quas distinctio quis voluptates at temporibus vero quod labore architecto sint explicabo incidunt? Inventore quis velit minima maxime enim maiores? Ad, consectetur officiis similique repellat cum tenetur iste doloremque, adipisci officia ullam enim inventore nemo consequuntur provident aspernatur vel qui! Laborum eius, ab fugiat ad aperiam pariatur facilis sint, voluptatum officiis aut qui vero a amet voluptate quia enim adipisci. Quae molestiae cumque animi optio rerum! Nostrum officia numquam ullam eum beatae nulla sequi, modi blanditiis officiis vero at impedit saepe cum animi repudiandae expedita explicabo deleniti minus. Esse eveniet nulla excepturi eum voluptatum recusandae deleniti sequi ducimus est facilis, commodi, maiores odio cum inventore atque nihil voluptate, earum laborum veniam a magnam molestiae? Tempore ea quia consectetur in quo fugit ipsa ullam sit eum quibusdam voluptas debitis veniam asperiores explicabo repellendus minus sapiente tenetur dignissimos earum, facilis incidunt, eius ipsam at.'
        ]);

        Category::create([
            'name'=>'Technology',
            'slug'=>'technology'
        ]);
        Category::create([
            'name'=>'Design',
            'slug'=>'design'
        ]);
        Category::create([
            'name'=>'Science',
            'slug'=>'science'
        ]);
        Category::create([
            'name'=>'Health',
            'slug'=>'health'
        ]);
        Category::create([
            'name'=>'Style',
            'slug'=>'style'
        ]);
        Category::create([
            'name'=>'Business',
            'slug'=>'business'
        ]);
        Category::create([
            'name'=>'Culture',
            'slug'=>'culture'
        ]);


    }
}
