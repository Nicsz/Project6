<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { //
        DB::table('posts')->insert(
        	array(
        		[
        			'title' => "Php is awesome",
                    'slug' => "php_is_awesome",
        			'intro' => "Some intro",
        			'body' => "Some body.",
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
        		],
        		[
        			'title' => "Laravel 5.8",
                    'slug' => "laravel_5.8",
        			'intro' => "Some intro",
        			'body' => "Some body.",
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
        		],
        		[
        			'title' => "Thanks to seeds",
                    'slug' => "seeds",
        			'intro' => "Some intro",
        			'body' => "Some body.",
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s"),
        		]
        	)
        );
    }
}
