<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'title' => "Boys Shoes",
            'slug' => "boys_shoes",
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi, mollitia labore nesciunt dolores eos voluptates ut velit deserunt! Consectetur fugiat ut porro laudantium sequi quis tempora illo dolorum dolorem necessitatibus.",
        ]);

        Category::create([
            'title' => "Girls Shoes",
            'slug' => "girls_shoes",
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi, mollitia labore nesciunt dolores eos voluptates ut velit deserunt! Consectetur fugiat ut porro laudantium sequi quis tempora illo dolorum dolorem necessitatibus.",
        ]);

        Category::create([
            'title' => "man Shoes",
            'slug' => "man_shoes",
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi, mollitia labore nesciunt dolores eos voluptates ut velit deserunt! Consectetur fugiat ut porro laudantium sequi quis tempora illo dolorum dolorem necessitatibus.",
        ]);

        Category::create([
            'title' => "Women Shoes",
            'slug' => "women_shoes",
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi, mollitia labore nesciunt dolores eos voluptates ut velit deserunt! Consectetur fugiat ut porro laudantium sequi quis tempora illo dolorum dolorem necessitatibus.",
        ]);

        Category::create([
            'title' => "Computer",
            'slug' => "computer",
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi, mollitia labore nesciunt dolores eos voluptates ut velit deserunt! Consectetur fugiat ut porro laudantium sequi quis tempora illo dolorum dolorem necessitatibus.",
        ]);

        Category::create([
            'title' => "Mobile",
            'slug' => "mobile",
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi, mollitia labore nesciunt dolores eos voluptates ut velit deserunt! Consectetur fugiat ut porro laudantium sequi quis tempora illo dolorum dolorem necessitatibus.",
        ]);
    }
}
