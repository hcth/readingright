<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddClient extends Migration
{

        public function up()
        {
                $this->forge->addField([
                    'id'          => [
                        'type'           => 'INT',
                        'constraint'     => 5,
                        'unsigned'       => true,
                        'auto_increment' => true,
                    ],
                    'name'       => [
                        'type'           => 'VARCHAR',
                        'constraint'     => '100',
                    ],
                    'email' => [
                        'type'           => 'TEXT',
                    ],
                    'token' => [
                        'type'           => 'TEXT',
                    ],
                ]);
                $this->forge->addKey('id', true);
                $this->forge->createTable('client');
        }

        public function down()
        {
                $this->forge->dropTable('client');
        }
}