<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateJobTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
            'type' => 'INT',
            'auto_increment' => true,
            'constraint' => 11,
            ],
            'user_id' => [
            'type' => 'INT',
            'constraint' => 11,
            ],
            'title' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
            ],
            'description' => [
            'type' => 'TEXT',
            ],
            'salary' => [
            'type' => 'INT',
            'constraint' => 11,
            ],
            'tags' => [
            'type' => 'VARCHAR',
            'constraint' => '500',
            'null' => true,
            ],
            'company' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
            ],
            'address' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
            'null' => true,
            ],
            'city' => [
            'type' => 'VARCHAR',
            'constraint' => '100',
            'null' => true,
            ],
            'state' => [
            'type' => 'VARCHAR',
            'constraint' => '50',
            'null' => true,
            ],
            'phone' => [
            'type' => 'VARCHAR',
            'constraint' => '15',
            'null' => true,
            ],
            'email' => [
            'type' => 'VARCHAR',
            'constraint' => '255',
            'null' => true,
            ],
            'requirements' => [
            'type' => 'TEXT',
            'null' => true,
            ],
            'benefits' => [
            'type' => 'TEXT',
            'null' => true,
            ],
            'created_at' => [
            'type' => 'TIMESTAMP',
            'default' => null,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('user_id', 'user', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('job');
        $this->db->query("ALTER TABLE job MODIFY created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP");

    }

    public function down()
    {
        $this->forge->dropTable('job');
    }
}
