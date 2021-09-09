<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateSystemUser extends AbstractMigration
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
    public function change(): void
    {
        $this->table('system_user')
            ->addColumn('name', 'text', ["null" => "true"])
            ->addColumn('login', 'text', ["null" => "true"])
            ->addColumn('password', 'text', ["null" => "true"])
            ->addColumn('email', 'text', ["null" => "true"])
            ->addColumn('frontpage_id', 'integer', ["null" => "true"])
            ->addColumn('system_unit_id', 'integer', ["null" => "true"])
            ->addColumn('active', 'char', ["null" => "true", "limit" => 1])
            ->addForeignKey("frontpage_id", "system_program")
            ->addForeignKey("system_unit_id", "system_unit", "id")
            ->addIndex('frontpage_id')
            ->addIndex(['login'], ['unique' => true])
            ->addIndex(['email'], ['unique' => true])
            ->create();
    }
}
