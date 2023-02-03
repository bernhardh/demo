<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    const IMAGE_URL = 'https://source.unsplash.com/random/200x200/?img=1';

    public function run(): void
    {
        // Clear images
        Storage::deleteDirectory('public');

        // Admin
        $user = User::factory()->create([
            'name' => 'Demo User',
            'email' => 'admin@filamentphp.com',
        ]);
        $this->command->info('Admin user created.');
    }
}
