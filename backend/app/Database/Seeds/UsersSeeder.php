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
                'id' => 'data_1',
                'first_name' => 'data_2',
                'middle_name' => 'data_3',
                'last_name' => 'data_4',
                'email' => 'email1',
                'password_hash' => 'data_6',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 'data_1',
                'first_name' => 'data_2',
                'middle_name' => 'data_3',
                'last_name' => 'data_4',
                'email' => 'email2',
                'password_hash' => 'data_6',
                'created_at' => $now,
                'updated_at' => $now,
            ]
        ];
        $this->db->table('customer_table')->insertBatch($dataYouWannaInsert);
    }
}
