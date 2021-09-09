<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class InsertSystemUserGroup extends AbstractMigration
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
        $builder->insert(['system_user_id', 'system_group_id'])
            ->into('system_user_group')
            ->values(['system_user_id' => '1', 'system_group_id' => '1',])
            ->values(['system_user_id' => '2', 'system_group_id' => '2',])
            ->values(['system_user_id' => '1', 'system_group_id' => '2',])
            ->execute();
    }

    public function down()
    {
        $builder = $this->getQueryBuilder();
        $builder->delete('system_user_group')
            ->execute();
    }
}
