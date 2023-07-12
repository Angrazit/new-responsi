<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User as users;

class user extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $gambar = new users();
        $gambar->name = 'zitha';
        $gambar->email = 'zitha@gmail.com';
        $gambar->password = '12345678';
        $gambar->save();
    }
}
