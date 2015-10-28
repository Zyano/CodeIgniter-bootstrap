<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Migration_Users extends CI_Migration {
    public function up2() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'username' => array(
                'type' => 'varchar',
                'constraint' => '30'
            ),
            'password' => array(
                'type' => 'varchar',
                'constraint' => '100'
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('Users');
    }

    public function up() {
        $fields = array(
            'id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY',
            'username VARCHAR(30)',
            'password VARCHAR(100)',
            'email VARCHAR(254)'
        );

        $this->dbforge->add_field($fields);
        //$this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('Users');
    }

    public function down() {
        $this->dbforge->drop_table('Users');
    }
}