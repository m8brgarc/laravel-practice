<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

		$this->call('BlogsTableSeeder');

        $this->command->info('Blogs has been seeded!');

		$this->call('CommentsTableSeeder');

        $this->command->info('Comments has been seeded!');

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}

}

class BlogsTableSeeder extends Seeder {
    public function run()
    {
        DB::table('blogs')->delete();
        DB::table('blogs')->truncate();
        $faker = Faker\Factory::create();
        for($i=0;$i<40;$i++) {
            Blog::create(array(
                'title' => ucwords(implode(' ', $faker->words(3))),
                'author' => $faker->name,
                'content' => ucfirst(implode(' ', $faker->paragraphs(2)))
            ));
        }
    }
}

class CommentsTableSeeder extends Seeder {
    public function run()
    {
        DB::table('comments')->delete();
        DB::table('comments')->truncate();
        $faker = Faker\Factory::create();
        $blogs = Blog::all();
        foreach($blogs as $blog) {
            $comments = array();
            for($c=0;$c<10;$c++) {
                $comments[] = new Comment(array(
                    'author' => $faker->name,
                    'comment_text' => ucfirst(implode(' ', $faker->paragraphs(2))),
                    'rating' => rand(1,5)
                ));
            }
            $blog->comments()->saveMany($comments);
        }
    }
}
