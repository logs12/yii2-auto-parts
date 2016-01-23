<?php

use yii\db\Schema;
use yii\db\Migration;

class m160112_173356_tbl_advert extends Migration
{
    public function up()
    {
        $this->execute("
            CREATE TABLE `advert` (
                    idadvert int(11) NOT NULL AUTO_INCREMENT,
              price mediumint(11) DEFAULT NULL,
              address varchar(255) DEFAULT NULL,
              fk_agent mediumint(11) DEFAULT NULL,
              bedroom smallint(1) DEFAULT NULL,
              livingroom smallint(1) DEFAULT NULL,
              parking smallint(1) DEFAULT NULL,
              kitchen smallint(1) DEFAULT NULL,
              general_image varchar(200) DEFAULT NULL,
              description text DEFAULT NULL,
              location varchar(45) DEFAULT NULL,
              hot smallint(1) DEFAULT NULL,
              sold smallint(1) DEFAULT NULL,
              type varchar(50) DEFAULT NULL,
              recommend smallint(1) DEFAULT NULL,
              created_at int(11) DEFAULT NULL,
              updated_at int(11) DEFAULT NULL,
              PRIMARY KEY (idadvert)
            )
            ENGINE = INNODB
            AUTO_INCREMENT = 1
            CHARACTER SET utf8
            COLLATE utf8_general_ci;
        ");
    }

    public function down()
    {
        $this->dropTable('advert');

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
