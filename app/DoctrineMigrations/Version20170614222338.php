<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170614222338 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE jam_jar ADD jam_type_id INT DEFAULT NULL, ADD year_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE jam_jar ADD CONSTRAINT FK_463B8229ED3C46A FOREIGN KEY (jam_type_id) REFERENCES jam_type (id)');
        $this->addSql('ALTER TABLE jam_jar ADD CONSTRAINT FK_463B82240C1FEA7 FOREIGN KEY (year_id) REFERENCES Year (id)');
        $this->addSql('CREATE INDEX IDX_463B8229ED3C46A ON jam_jar (jam_type_id)');
        $this->addSql('CREATE INDEX IDX_463B82240C1FEA7 ON jam_jar (year_id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE jam_jar DROP FOREIGN KEY FK_463B8229ED3C46A');
        $this->addSql('ALTER TABLE jam_jar DROP FOREIGN KEY FK_463B82240C1FEA7');
        $this->addSql('DROP INDEX IDX_463B8229ED3C46A ON jam_jar');
        $this->addSql('DROP INDEX IDX_463B82240C1FEA7 ON jam_jar');
        $this->addSql('ALTER TABLE jam_jar DROP jam_type_id, DROP year_id');
    }
}
