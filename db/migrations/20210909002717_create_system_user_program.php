<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateSystemUserProgram extends AbstractMigration
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
        $this->table("system_user_program")
            ->addColumn("system_user_id", "integer", ["null" => "true"])
            ->addColumn("system_program_id", "integer", ["null" => "true"])
            ->addForeignKey("system_user_id", "system_user", "id")
            ->addForeignKey("system_program_id", "system_program", "id")
            ->addIndex('system_program_id')
            ->addIndex('system_user_id')
            ->create();
    }
}
