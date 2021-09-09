<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class InsertSystemUser extends AbstractMigration
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
        $builder->insert(['name', 'login', 'password', 'email', 'frontpage_id', 'system_unit_id', 'active'])
            ->into('system_user')
            ->values([
                'name' => 'Administrator',
                'login' => 'admin',
                'password' => '21232f297a57a5a743894a0e4a801fc3',
                'email' => 'admin@admin.net',
                'frontpage_id' => '10',
                'system_unit_id' => NULL,
                'active' => 'Y',
            ])
            ->values([
                'name' => 'User',
                'login' => 'user',
                'password' => 'ee11cbb19052e40b07aac0ca060c23ee',
                'email' => 'user@user.net',
                'frontpage_id' => '7',
                'system_unit_id' => NULL,
                'active' => 'Y',
            ])
            ->execute();
    }

    public function down()
    {
        $builder = $this->getQueryBuilder();
        $builder->delete('system_user')
            ->execute();
    }
}
