<?php

use Phinx\Migration\AbstractMigration;

class TicketsTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $components_table = $this->table('components');
        $components_table->addColumn('component', 'string')
            ->create();

        $tickets_table = $this->table('tickets');
        $tickets_table->addColumn('title', 'string')
            ->addColumn('description', 'text')
            ->addColumn('component_id', 'integer')
            ->addForeignKey('component_id', 'components', 'id')
            ->create();

    }
}
