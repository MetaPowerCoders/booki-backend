<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $id = Str::random(20);

        DB::table('events')->insert([
            'uuid' => $id ,
            'title' => Str::random(10),
            'duration' => random_int(0, 5),
            'hostname' => Str::random(10),
        ]);

        $idBooking = Str::random(20);

        DB::table('bookings')->insert([
            'id' => $idBooking,
            'username' => Str::random(10),
            'uuid' => $id,
            'date' => random_int(0, 20)
        ]);
    }
}
