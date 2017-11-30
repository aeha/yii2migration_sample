<?php

use yii\db\Migration;

/**
 * Handles the creation of table `common`.
 */
class m171130_052435_create_common_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $sql = 'CREATE TABLE COMMON (COMMON VARCHAR2(10))';
        $this->execute($sql);

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('common');
    }
}
