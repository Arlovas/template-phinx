<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class InsertSystemGroup extends AbstractMigration
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
    public function up(): void
    {
        $builder = $this->getQueryBuilder();
        $builder->insert(['name'])
            ->into('system_group')
            ->values(['name' => 'Admin'])
            ->values(['name' => 'Standard'])
            ->execute();
    }

    public function down()
    {
        $builder = $this->getQueryBuilder();
        $builder->delete('system_group')
            ->execute();
    }
}
