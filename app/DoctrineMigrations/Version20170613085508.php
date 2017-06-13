<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170613085508 extends AbstractMigration {

    /**
     * @param Schema $schema
     */
    public function up(Schema $schema) {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql("INSERT INTO \"book\" VALUES(1,'Doctor With Big Eyes','2016-02-01',200);");
        $this->addSql("INSERT INTO \"book\" VALUES(2,'Hunger Of My Town','2016-05-02',10);");
        $this->addSql("INSERT INTO \"book\" VALUES(3,'Colleagues And Demons','2015-04-06',30);");
        $this->addSql("INSERT INTO \"book\" VALUES(4,'Humans In The Library','1982-06-15',600);");
        $this->addSql("INSERT INTO \"book\" VALUES(5,'Founders Of Evil','1530-08-30',900);");
        $this->addSql("INSERT INTO \"book\" VALUES(6,'Ancestor With Horns','2019-10-10',1000);");
        $this->addSql("INSERT INTO \"book\" VALUES(7,'Age Of The Light','1923-12-06',234);");
        $this->addSql("INSERT INTO \"book\" VALUES(8,'Learning With The River','1965-02-02',200);");
        $this->addSql("INSERT INTO \"book\" VALUES(9,'Lord And Buffoon','2001-07-09',240);");
        $this->addSql("INSERT INTO \"book\" VALUES(10,'My War','1945-01-01',2344);");
        $this->addSql("INSERT INTO \"book\" VALUES(11,'Test','2012-01-01',444);");

        $this->addSql("INSERT INTO \"book_genre\" VALUES(1,1);");
        $this->addSql("INSERT INTO \"book_genre\" VALUES(2,2);");
        $this->addSql("INSERT INTO \"book_genre\" VALUES(3,3);");
        $this->addSql("INSERT INTO \"book_genre\" VALUES(4,4);");
        $this->addSql("INSERT INTO \"book_genre\" VALUES(4,5);");
        $this->addSql("INSERT INTO \"book_genre\" VALUES(5,3);");
        $this->addSql("INSERT INTO \"book_genre\" VALUES(6,3);");
        $this->addSql("INSERT INTO \"book_genre\" VALUES(7,6);");
        $this->addSql("INSERT INTO \"book_genre\" VALUES(8,7);");
        $this->addSql("INSERT INTO \"book_genre\" VALUES(8,8);");
        $this->addSql("INSERT INTO \"book_genre\" VALUES(9,5);");
        $this->addSql("INSERT INTO \"book_genre\" VALUES(9,9);");
        $this->addSql("INSERT INTO \"book_genre\" VALUES(10,1);");
        $this->addSql("INSERT INTO \"book_genre\" VALUES(10,4);");
        $this->addSql("INSERT INTO \"book_genre\" VALUES(10,9);");

        $this->addSql("INSERT INTO \"genre\" VALUES(1,'Police','ROLE_USER');");
        $this->addSql("INSERT INTO \"genre\" VALUES(2,'Comedy','ROLE_USER');");
        $this->addSql("INSERT INTO \"genre\" VALUES(3,'Drama','ROLE_USER');");
        $this->addSql("INSERT INTO \"genre\" VALUES(4,'Non-fiction','ROLE_ADMIN');");
        $this->addSql("INSERT INTO \"genre\" VALUES(5,'Horror','ROLE_USER');");
        $this->addSql("INSERT INTO \"genre\" VALUES(6,'Tragedy','ROLE_USER');");
        $this->addSql("INSERT INTO \"genre\" VALUES(7,'Children','ROLE_USER');");
        $this->addSql("INSERT INTO \"genre\" VALUES(8,'Fiction','ROLE_USER');");
        $this->addSql("INSERT INTO \"genre\" VALUES(9,'Satire','ROLE_USER');");


        $this->addSql("INSERT INTO \"users\" VALUES(1,'admin','admin','admin@admin.admin','admin@admin.admin',1,NULL,'$2y$13\$agMuN.7cJ3qyhQamx9P.UOpSQl9ywD6JfvrFuuQdZ1mxzIRaLOe96','2017-06-13 11:49:05',NULL,NULL,'a:1:{i:0;s:10:\"ROLE_ADMIN\";}');");
        $this->addSql("INSERT INTO \"users\" VALUES(2,'user','user','user@user.user','user@user.user',1,NULL,'$2y$13\$vQ.nQBlDPal2iMt8WHui9u.j.hlgy8Ezpd/ijwtuuORMbFobFJSlC','2017-06-13 11:47:11',NULL,NULL,'a:0:{}');");
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema) {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');
    }

}
