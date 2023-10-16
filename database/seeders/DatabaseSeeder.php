<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password'=> Hash::make('password')
        ]);

        \App\Models\About::create([
            'title' => 'About Ijin',
            'desc' => 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet            ',
            'experience' => '25',
            'client' => '1234',
            'project' => '1234',
            'image' => 'about.jpg',
        ]);

        \App\Models\Contact::create([
            'address' => 'Graha Nurul Menteng',
            'phone' => '0896-8780-8089',
            'email' => 'email@gmail.com',
            'open_day_at' => 'Senin',
            'close_day_at' => 'Jumat',
            'open_at' => '08.00',
            'close_at' => '17.00',
            'iframe' => '<iframe class="position-relative w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd" frameborder="0" style="min-height: 450px; border: 0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
            'maps' => '#',
            'website' => '#',
            'instagram' => '#',
            'tiktok' => '#',
            'twitter' => '#',
            'youtube' => '#',
            'facebook' => '#',
            'linkedin' => '#',
        ]);
    }
}
