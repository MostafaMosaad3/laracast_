<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User ;
use App\Models\Category ;
use App\Models\Post ;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::factory()->create();
       Post::factory(30)->create([
//           'user_id' =>$user->id
       ]);

    }
}
