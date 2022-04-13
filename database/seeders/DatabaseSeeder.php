<?php

namespace Database\Seeders;

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
        User::factory(3)->create();

        
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
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

        User::create([
            'name' => 'Renaldi',
            'username' => 'creamynald',
            'email' => 'creamynald@gmail.com',
            'password' => bcrypt('password')

        ]);

        // User::create([
        //     'name' => 'rere',
        //     'email' => 'rere@gmail.com',
        //     'password' => bcrypt('password')

        // ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum kedua prog dolor sit amet consectetur adipisicing elit. Architecto aut consequatur numquam dolor cum eius ut quam explicabo similique necessitatibus',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto aut consequatur numquam dolor cum eius ut quam explicabo similique necessitatibus eligendi</p><p>asperiores distinctio culpa corrupti provident quas doloremque a eos odio pariatur, fugit aspernatur molestiae suscipit! Cupiditate incidunt quidem eos id perspiciatis officiis repellendus repellat necessitatibus est unde possimus esse magnam dolorem</p><p>inventore ipsa hic laboriosam, minima rem eaque blanditiis mollitia deleniti sequi consequatur? Aliquid quia molestiae cumque illo debitis harum, amet maxime, sit neque dolorum laborum, doloribus perspiciatis temporibus veritatis atque itaque tempore.</p><p>Ipsa autem iste explicabo optio beatae nostrum excepturi! Sapiente molestias consequuntur pariatur animi eveniet iste architecto blanditiis quibusdam at ipsa inventore aliquid necessitatibus magnam in ex temporibus repellendus molestiae debitis, placeat alias? Odio nulla nemo saepe aspernatur possimus vel, repudiandae obcaecati. Labore maxime exercitationem autem, possimus, dignissimos, omnis tempora id illo voluptatum magni beatae minus! Numquam a corrupti eum. Quibusdam, itaque nihil est aut doloremque optio.</p>',
        //     'category_id' => 1,
        //     'user_id'  => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum kedua prog dolor sit amet consectetur adipisicing elit. Architecto aut consequatur numquam dolor cum eius ut quam explicabo similique necessitatibus',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto aut consequatur numquam dolor cum eius ut quam explicabo similique necessitatibus eligendi</p><p>asperiores distinctio culpa corrupti provident quas doloremque a eos odio pariatur, fugit aspernatur molestiae suscipit! Cupiditate incidunt quidem eos id perspiciatis officiis repellendus repellat necessitatibus est unde possimus esse magnam dolorem</p><p>inventore ipsa hic laboriosam, minima rem eaque blanditiis mollitia deleniti sequi consequatur? Aliquid quia molestiae cumque illo debitis harum, amet maxime, sit neque dolorum laborum, doloribus perspiciatis temporibus veritatis atque itaque tempore.</p><p>Ipsa autem iste explicabo optio beatae nostrum excepturi! Sapiente molestias consequuntur pariatur animi eveniet iste architecto blanditiis quibusdam at ipsa inventore aliquid necessitatibus magnam in ex temporibus repellendus molestiae debitis, placeat alias? Odio nulla nemo saepe aspernatur possimus vel, repudiandae obcaecati. Labore maxime exercitationem autem, possimus, dignissimos, omnis tempora id illo voluptatum magni beatae minus! Numquam a corrupti eum. Quibusdam, itaque nihil est aut doloremque optio.</p>',
        //     'category_id' => 1,
        //     'user_id'  => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Kegita',
        //     'slug' => 'judul-kegita',
        //     'excerpt' => 'Lorem ipsum kedua prog dolor sit amet consectetur adipisicing elit. Architecto aut consequatur numquam dolor cum eius ut quam explicabo similique necessitatibus',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto aut consequatur numquam dolor cum eius ut quam explicabo similique necessitatibus eligendi</p><p>asperiores distinctio culpa corrupti provident quas doloremque a eos odio pariatur, fugit aspernatur molestiae suscipit! Cupiditate incidunt quidem eos id perspiciatis officiis repellendus repellat necessitatibus est unde possimus esse magnam dolorem</p><p>inventore ipsa hic laboriosam, minima rem eaque blanditiis mollitia deleniti sequi consequatur? Aliquid quia molestiae cumque illo debitis harum, amet maxime, sit neque dolorum laborum, doloribus perspiciatis temporibus veritatis atque itaque tempore.</p><p>Ipsa autem iste explicabo optio beatae nostrum excepturi! Sapiente molestias consequuntur pariatur animi eveniet iste architecto blanditiis quibusdam at ipsa inventore aliquid necessitatibus magnam in ex temporibus repellendus molestiae debitis, placeat alias? Odio nulla nemo saepe aspernatur possimus vel, repudiandae obcaecati. Labore maxime exercitationem autem, possimus, dignissimos, omnis tempora id illo voluptatum magni beatae minus! Numquam a corrupti eum. Quibusdam, itaque nihil est aut doloremque optio.</p>',
        //     'category_id' => 2,
        //     'user_id'  => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum kedua prog dolor sit amet consectetur adipisicing elit. Architecto aut consequatur numquam dolor cum eius ut quam explicabo similique necessitatibus',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto aut consequatur numquam dolor cum eius ut quam explicabo similique necessitatibus eligendi</p><p>asperiores distinctio culpa corrupti provident quas doloremque a eos odio pariatur, fugit aspernatur molestiae suscipit! Cupiditate incidunt quidem eos id perspiciatis officiis repellendus repellat necessitatibus est unde possimus esse magnam dolorem</p><p>inventore ipsa hic laboriosam, minima rem eaque blanditiis mollitia deleniti sequi consequatur? Aliquid quia molestiae cumque illo debitis harum, amet maxime, sit neque dolorum laborum, doloribus perspiciatis temporibus veritatis atque itaque tempore.</p><p>Ipsa autem iste explicabo optio beatae nostrum excepturi! Sapiente molestias consequuntur pariatur animi eveniet iste architecto blanditiis quibusdam at ipsa inventore aliquid necessitatibus magnam in ex temporibus repellendus molestiae debitis, placeat alias? Odio nulla nemo saepe aspernatur possimus vel, repudiandae obcaecati. Labore maxime exercitationem autem, possimus, dignissimos, omnis tempora id illo voluptatum magni beatae minus! Numquam a corrupti eum. Quibusdam, itaque nihil est aut doloremque optio.</p>',
        //     'category_id' => 1,
        //     'user_id'  => 1
        // ]);

    }
}
