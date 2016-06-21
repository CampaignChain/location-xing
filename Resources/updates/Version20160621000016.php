<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160621000016 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE campaignchain_location_xing_user (id INT AUTO_INCREMENT NOT NULL, location_id INT DEFAULT NULL, identifier VARCHAR(255) NOT NULL, displayName VARCHAR(255) NOT NULL, firstName VARCHAR(255) DEFAULT NULL, lastName VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, profileUrl VARCHAR(255) DEFAULT NULL, profileImageUrl VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_372DB0C5772E836A (identifier), UNIQUE INDEX UNIQ_372DB0C564D218E (location_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE campaignchain_location_xing_user ADD CONSTRAINT FK_372DB0C564D218E FOREIGN KEY (location_id) REFERENCES campaignchain_location (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE campaignchain_location_xing_user');
    }
}
