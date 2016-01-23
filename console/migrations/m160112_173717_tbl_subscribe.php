<?php

use yii\db\Schema;
use yii\db\Migration;

class m160112_173717_tbl_subscribe extends Migration
{
    public function up()
    {
        $this->execute("
            CREATE TABLE `subscribe` (
              idsubscribe int(11) NOT NULL AUTO_INCREMENT,
              email varchar(50) DEFAULT NULL,
              date_subscribe timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
              PRIMARY KEY (idsubscribe)
            )
            ENGINE = INNODB
            AUTO_INCREMENT = 1
            CHARACTER SET utf8
            COLLATE utf8_general_ci;
        ");
    }

    public function down()
    {
        $this->dropTable('subscribe');

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
