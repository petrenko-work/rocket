<?php

use Illuminate\Database\Seeder;
use \App\Settings;
use \App\Blog;

use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    private $settings = array(
        'phone' => '+38 (067) 358 51 51',
        'email' => 'info@instapromo.com.ua',
        'copyright' => 'ВСЕ ПРАВА ЗАЩИЩЕНЫ',
        'address' => 'г. Киев. ул. Привокзальная, 1-А',
        'price' => '[500, 1500, 5000]'
    );
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        Settings::insert($this->settings);

        for ($i=0; $i < 100; $i++) {
            $blog = new Blog();
            $blog->image = 'images/newsImg.jpg';
            $blog->date = '11 июля 2017';
            $blog->title = $faker->jobTitle;
            $blog->body = $faker->realText(1000);
            $blog->save();
        }
    }
}
