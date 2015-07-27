<?php

use Illuminate\Database\Seeder;

class PostTagPivotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_tag')->truncate();

        $post_ids = range(1, 30);
        $tag_ids = range(1, 10);

        foreach($post_ids as $post_id)
        {
            $i = rand(1, 3);
            $keys = array_rand($tag_ids, $i);
            $keys = is_array($keys) ? $keys : [$keys];
            foreach($keys as $j)
            {
                DB::table('post_tag')->insert([
                    'post_id' => $post_id,
                    'tag_id' => $tag_ids[$j]
                ]);
            }
        }
    }
}
