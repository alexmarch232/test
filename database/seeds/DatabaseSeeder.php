<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

use App\Models\User;
use Illuminate\Database\Query\Builder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Model::unguard();

         $this->call('UserTableSeeder');

        $this->call('PostsSeeder');


    }
}


class PostsSeeder extends Seeder {
    public function run()
    {

        DB::table('posts')->delete();

        Post::create([
            'title'        => 'First Post',
            'slug'         => 'first post',
            'excerpt'      => '<b>First post body</b>',
            'content'      => '<b>Content First post body</b>',
            'published'    => true,
            'published_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        Post::create([
            'title'        => 'Second Post',
            'slug'         => 'second post',
            'excerpt'      => '<b>Second post body</b>',
            'content'      => '<b>Content Second post body</b>',
            'published'    => true,
            'published_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

        Post::create([
            'title'        => 'Third Post',
            'slug'         => 'third post',
            'excerpt'      => '<b>Third post body</b>',
            'content'      => '<b>Content Third post body</b>',
            'published'    => true,
            'published_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);

    }
}


class UserTableSeeder extends Seeder {
    public function run()
    {
        DB::table('users')->delete();
        User::truncate();

        User::create([
            'id' => '1',
            'name' => 'Vasyl Vasylev',
            'email' => 'vasylmail',
            'password' => Hash::make('sasha324371'),

        ]);


        User::create([
            'id' => '2',
            'name' => 'Vasysss Vasyle',
            'email' => 'vasyssmail',
            'password' => Hash::make('sasha324371'),

        ]);


        User::create([
            'id' => '3',
            'name' => 'Vasss Vasy',
            'email' => 'vassssmail',
            'password' => Hash::make('sasha324371'),

        ]);
    }
}
