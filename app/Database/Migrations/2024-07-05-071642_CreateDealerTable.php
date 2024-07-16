<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDealerTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'Acct_Name' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'Fed_Tax_Number' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'EIN_Nbr' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'Duns_Number' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'Multiple_Locations' => [
                'type'       => 'BOOLEAN',
                'default'    => false,
            ],
            'Individual_Billing' => [
                'type'       => 'BOOLEAN',
                'default'    => false,
            ],
            'Sls_Agnt_ID' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'Dlr_Affiliate_Fee_Pct' => [
                'type'       => 'DECIMAL',
                'constraint' => '5,2',
            ],
            'Acct_Type_Cd' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'Acct_Type_Desc' => [
                'type'       => 'TEXT',
            ],
            'Wholesale_Flg' => [
                'type'       => 'BOOLEAN',
                'default'    => false,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('dealers');
    }

    public function down()
    {
        $this->forge->dropTable('dealers');
    }
}
