<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCustomerTable extends Migration
{
    protected $DBGroup = 'default';

    public function up(): void
    {
        $this->forge->addField('id');
        $this->forge->addField([
            'name'       => ['type' => 'varchar', 'constraint' => 31],
            'uid'        => ['type' => 'varchar', 'constraint' => 31],
            'class'      => ['type' => 'varchar', 'constraint' => 63],
            'icon'       => ['type' => 'varchar', 'constraint' => 31],
            'summary'    => ['type' => 'varchar', 'constraint' => 255],
            'created_at' => ['type' => 'datetime', 'null' => true],
            'updated_at' => ['type' => 'datetime', 'null' => true],
            'deleted_at' => ['type' => 'datetime', 'null' => true],
        ]);

        $this->forge->addKey('name');
        $this->forge->addKey('uid');
        $this->forge->addKey(['deleted_at', 'id']);
        $this->forge->addKey('created_at');

        $this->forge->createTable('factories');
    }

    public function down(): void
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
    'type' => [
        'type'       => 'VARCHAR',
        'constraint' => 50,
        'default'    => 'client',
        'null'       => false,
    ],
    'account_status' => [
        'type'       => 'TINYINT',
        'constraint' => 1,
        'default'    => 1, // 1 = active, 0 = inactive
        'null'       => false,
    ],
    'email_activated' => [
        'type'       => 'TINYINT',
        'constraint' => 1,
        'default'    => 0,
        'null'       => false,
    ],
    'newsletter' => [
        'type'       => 'TINYINT',
        'constraint' => 1,
        'default'    => 1,
        'null'       => false,
    ],
    'gender' => [
        'type'       => 'VARCHAR',
        'constraint' => 20,
        'null'       => true,
    ],
    // You use Var Char for images directory
    'profile_image' => [
        'type'       => 'VARCHAR',
        'constraint' => 255,
        'null'       => true,
    ],
    'deleted_at' => [
        'type' => 'DATETIME',
        'null' => true,
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
    $this->forge->addKey('Customer_id', true);
    $this->forge->addUniqueKey('reservation_code');
    $this->forge->createTable('customer_table', true);
    $this->forge->dropTable('customer_drop_table', true);
    }
}
