<?php

namespace Database\Seeders;

use App\Models\user as users;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class gambar extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
       $gambar = new users();
        $gambar->name = 'zitha';
        $gambar->email = 'zitha@gmail.com';
        $gambar->password = '12345678';
        $gambar->save();
    }
}
