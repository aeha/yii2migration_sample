<?php

use yii\db\Migration;

/**
 * Handles the creation of table `news`.
 */
class m171130_052018_create_news_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $sql = 'CREATE TABLE SAMPLE_A (SAMPLE01 VARCHAR2(10))';
        $this->execute($sql);

    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('news');
    }
}
