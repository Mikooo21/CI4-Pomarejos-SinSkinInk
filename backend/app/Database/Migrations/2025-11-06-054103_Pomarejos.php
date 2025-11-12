<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTabel extends Migration
{
    public function up(): void
    {
    $this->forge->addField([
    'id' => [
        'type'           => 'INT',
        'constraint'     => 11,
        'unsigned'       => true,
        'auto_increment' => true,
    ],
    'first_name' => [
        'type'       => 'VARCHAR',
        'constraint' => 100,
        'null'       => false,
    ],
    'middle_name' => [
        'type'       => 'VARCHAR',
        'constraint' => 100,
        'null'       => true,
    ],
    'last_name' => [
        'type'       => 'VARCHAR',
        'constraint' => 100,
        'null'       => false,
    ],
    'email' => [
        'type'       => 'VARCHAR',
        'constraint' => 255,
        'null'       => false,
    ],
    'password_hash' => [
        'type'       => 'VARCHAR',
        'constraint' => 255,
        'null'       => false,
    ],
    'deleted_at' => [
        'type' => 'DATETIME',
        'null' => false,
    ],
    'created_at' => [
        'type' => 'DATETIME',
        'null' => true,
    ],
    'updated_at' => [
        'type' => 'DATETIME',
        'null' => true,
    ],
]);
    $this->forge->addKey('id', true);
    $this->forge->addUniqueKey('email');
    $this->forge->createTable('customer_table', true);

    }
    public function down(): void
    {
    $this->forge->dropTable('customer_table', true);
    }
}
