<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150922145031 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('
          CREATE TABLE user (
            id INT AUTO_INCREMENT NOT NULL
            , username VARCHAR(255) NOT NULL
            , password VARCHAR(255) NOT NULL
            , email VARCHAR(255) NOT NULL
            , type INT NOT NULL
            , isActive TINYINT(1) NOT NULL
            , PRIMARY KEY(id)
          )
          DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci
          ENGINE = InnoDB
        ');
        $this->addSql('DROP TABLE IF EXISTS product');
        $this->addSql('DROP TABLE IF EXISTS task');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, price NUMERIC(10, 2) NOT NULL, description LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE task (id INT AUTO_INCREMENT NOT NULL, task VARCHAR(255) NOT NULL, dueDate DATETIME NOT NULL, decription LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE user');
    }
}
