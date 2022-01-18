<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'nip' => '119977',
                'nama' => 'Kurikulum',
                'email' => 'kurikulum@smkwikrama1garut.sch.id',
                'alamat' => 'Garut',
                'role' => 'kurikulum',
                'supervisor' => '1',
                'password' => bcrypt('12345678'),
            ],
            [
                'nip' => '119988',
                'nama' => 'Kepsek',
                'email' => 'kepsek@smkwikrama1garut.sch.id',
                'alamat' => 'Garut',
                'role' => 'kepsek',
                'supervisor' => '0',
                'password' => bcrypt('12345678'),
            ],
            ];
            foreach ($user as $key => $value) {
                User::create($value);
            }
    }
}
