<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class InsertSystemGroupProgram extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function up()
    {
        $builder = $this->getQueryBuilder();
        $builder->insert(['system_group_id', 'system_program_id'])
            ->into('system_group_program')
            ->values(['system_group_id' => '1', 'system_program_id' => '1'])
            ->values(['system_group_id' => '1', 'system_program_id' => '2'])
            ->values(['system_group_id' => '1', 'system_program_id' => '3'])
            ->values(['system_group_id' => '1', 'system_program_id' => '4'])
            ->values(['system_group_id' => '1', 'system_program_id' => '5'])
            ->values(['system_group_id' => '1', 'system_program_id' => '6'])
            ->values(['system_group_id' => '1', 'system_program_id' => '8'])
            ->values(['system_group_id' => '1', 'system_program_id' => '9'])
            ->values(['system_group_id' => '1', 'system_program_id' => '11'])
            ->values(['system_group_id' => '1', 'system_program_id' => '14'])
            ->values(['system_group_id' => '1', 'system_program_id' => '15'])
            ->values(['system_group_id' => '2', 'system_program_id' => '10'])
            ->values(['system_group_id' => '2', 'system_program_id' => '12'])
            ->values(['system_group_id' => '2', 'system_program_id' => '13'])
            ->values(['system_group_id' => '2', 'system_program_id' => '16'])
            ->values(['system_group_id' => '2', 'system_program_id' => '17'])
            ->values(['system_group_id' => '2', 'system_program_id' => '18'])
            ->values(['system_group_id' => '2', 'system_program_id' => '19'])
            ->values(['system_group_id' => '2', 'system_program_id' => '20'])
            ->values(['system_group_id' => '1', 'system_program_id' => '21'])
            ->values(['system_group_id' => '2', 'system_program_id' => '22'])
            ->values(['system_group_id' => '2', 'system_program_id' => '23'])
            ->values(['system_group_id' => '2', 'system_program_id' => '24'])
            ->values(['system_group_id' => '2', 'system_program_id' => '25'])
            ->values(['system_group_id' => '1', 'system_program_id' => '26'])
            ->values(['system_group_id' => '1', 'system_program_id' => '27'])
            ->values(['system_group_id' => '1', 'system_program_id' => '28'])
            ->values(['system_group_id' => '1', 'system_program_id' => '29'])
            ->values(['system_group_id' => '2', 'system_program_id' => '30'])
            ->values(['system_group_id' => '1', 'system_program_id' => '31'])
            ->values(['system_group_id' => '1', 'system_program_id' => '32'])
            ->values(['system_group_id' => '1', 'system_program_id' => '33'])
            ->values(['system_group_id' => '1', 'system_program_id' => '34'])
            ->values(['system_group_id' => '1', 'system_program_id' => '35'])
            ->values(['system_group_id' => '1', 'system_program_id' => '36'])
            ->values(['system_group_id' => '1', 'system_program_id' => '37'])
            ->values(['system_group_id' => '1', 'system_program_id' => '38'])
            ->values(['system_group_id' => '1', 'system_program_id' => '39'])
            ->values(['system_group_id' => '1', 'system_program_id' => '40'])
            ->execute();
    }

    public function down()
    {
        $builder = $this->getQueryBuilder();
        $builder->delete('system_group_program')
            ->execute();
    }
}
