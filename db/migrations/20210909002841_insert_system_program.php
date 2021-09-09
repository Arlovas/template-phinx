<?php

declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class InsertSystemProgram extends AbstractMigration
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
        $builder->insert(['name', 'controller'])
            ->into('system_program')
            ->values(['name' => 'System Group Form', 'controller' => 'SystemGroupForm'])
            ->values(['name' => 'System Group List', 'controller' => 'SystemGroupList'])
            ->values(['name' => 'System Program Form', 'controller' => 'SystemProgramForm'])
            ->values(['name' => 'System Program List', 'controller' => 'SystemProgramList'])
            ->values(['name' => 'System User Form', 'controller' => 'SystemUserForm'])
            ->values(['name' => 'System User List', 'controller' => 'SystemUserList'])
            ->values(['name' => 'Common Page', 'controller' => 'CommonPage'])
            ->values(['name' => 'System PHP Info', 'controller' => 'SystemPHPInfoView'])
            ->values(['name' => 'System ChangeLog View', 'controller' => 'SystemChangeLogView'])
            ->values(['name' => 'Welcome View', 'controller' => 'WelcomeView'])
            ->values(['name' => 'System Sql Log', 'controller' => 'SystemSqlLogList'])
            ->values(['name' => 'System Profile View', 'controller' => 'SystemProfileView'])
            ->values(['name' => 'System Profile Form', 'controller' => 'SystemProfileForm'])
            ->values(['name' => 'System SQL Panel', 'controller' => 'SystemSQLPanel'])
            ->values(['name' => 'System Access Log', 'controller' => 'SystemAccessLogList'])
            ->values(['name' => 'System Message Form', 'controller' => 'SystemMessageForm'])
            ->values(['name' => 'System Message List', 'controller' => 'SystemMessageList'])
            ->values(['name' => 'System Message Form View', 'controller' => 'SystemMessageFormView'])
            ->values(['name' => 'System Notification List', 'controller' => 'SystemNotificationList'])
            ->values(['name' => 'System Notification Form View', 'controller' => 'SystemNotificationFormView'])
            ->values(['name' => 'System Document Category List', 'controller' => 'SystemDocumentCategoryFormList'])
            ->values(['name' => 'System Document Form', 'controller' => 'SystemDocumentForm'])
            ->values(['name' => 'System Document Upload Form', 'controller' => 'SystemDocumentUploadForm'])
            ->values(['name' => 'System Document List', 'controller' => 'SystemDocumentList'])
            ->values(['name' => 'System Shared Document List', 'controller' => 'SystemSharedDocumentList'])
            ->values(['name' => 'System Unit Form', 'controller' => 'SystemUnitForm'])
            ->values(['name' => 'System Unit List', 'controller' => 'SystemUnitList'])
            ->values(['name' => 'System Access stats', 'controller' => 'SystemAccessLogStats'])
            ->values(['name' => 'System Preference form', 'controller' => 'SystemPreferenceForm'])
            ->values(['name' => 'System Support form', 'controller' => 'SystemSupportForm'])
            ->values(['name' => 'System PHP Error', 'controller' => 'SystemPHPErrorLogView'])
            ->values(['name' => 'System Database Browser', 'controller' => 'SystemDatabaseExplorer'])
            ->values(['name' => 'System Table List', 'controller' => 'SystemTableList'])
            ->values(['name' => 'System Data Browser', 'controller' => 'SystemDataBrowser'])
            ->values(['name' => 'System Menu Editor', 'controller' => 'SystemMenuEditor'])
            ->values(['name' => 'System Request Log', 'controller' => 'SystemRequestLogList'])
            ->values(['name' => 'System Request Log View', 'controller' => 'SystemRequestLogView'])
            ->values(['name' => 'System Administration Dashboard', 'controller' => 'SystemAdministrationDashboard'])
            ->values(['name' => 'System Log Dashboard', 'controller' => 'SystemLogDashboard'])
            ->values(['name' => 'System Session dump', 'controller' => 'SystemSessionDumpView'])
            ->execute();
    }

    public function down()
    {
        $builder = $this->getQueryBuilder();
        $builder->delete('system_program')
            ->execute();
    }
}
