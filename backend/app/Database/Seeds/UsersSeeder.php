<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        $password = password_hash('Password123!', PASSWORD_DEFAULT);

        $dataYouWannaInsert = [
            [
                'type' => 'client',
                'first_name' => 'Nugget',
                'middle_name' => 'Naxel',
                'last_name' => 'Taro',
                'email' => 'nugget@gmail.com',
                'password_hash' => $password,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'type' => 'client',
                'first_name' => 'Fenoh',
                'middle_name' => 'Zen',
                'last_name' => 'Nazareo',
                'email' => 'fen@gmail.com',
                'password_hash' => $password,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'type' => 'admin',
                'first_name' => 'Miko',
                'middle_name' => 'Macalintal',
                'last_name' => 'Pomarejos',
                'email' => 'pomarejos@gmail.com',
                'password_hash' => $password,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        ];
        $this->db->table('customer_table')->insertBatch($dataYouWannaInsert);
    }
}
