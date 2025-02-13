<?php

namespace Database\Seeders;

use App\Models\Link;
use App\Models\User;
use Illuminate\Database\Seeder;
use Random\RandomException;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @throws RandomException
     */
    public function run(): void
    {
        User::all()
            ->each(fn(User $user) => Link::factory()->count(random_int(5,8))->create(['user_id' => $user->id]));

    }
}
