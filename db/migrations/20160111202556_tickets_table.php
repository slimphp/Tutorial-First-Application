<?php

use Phinx\Migration\AbstractMigration;

class TicketsTable extends AbstractMigration
{
    public function up()
    {
        $components_table = $this->table('components');
        $components_table->addColumn('component', 'string')
            ->create();

        $components_table->insert([
            ["component" => "website"], 
            ["component" => "mobile app"]
        ]);
        $components_table->saveData();

        $tickets_table = $this->table('tickets');
        $tickets_table->addColumn('title', 'string')
            ->addColumn('description', 'text')
            ->addColumn('component_id', 'integer')
            ->addForeignKey('component_id', 'components', 'id')
            ->create();

    }

    public function down() {
        $this->dropTable('tickets');
        $this->dropTable('components');
    }
}
