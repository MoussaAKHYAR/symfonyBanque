<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200813153239 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE compte DROP FOREIGN KEY FK_CFF6526099851C1C');
        $this->addSql('DROP INDEX IDX_CFF6526099851C1C ON compte');
        $this->addSql('ALTER TABLE compte CHANGE client_phisyque_id client_physique_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE compte ADD CONSTRAINT FK_CFF65260529BC2A3 FOREIGN KEY (client_physique_id) REFERENCES client (id)');
        $this->addSql('CREATE INDEX IDX_CFF65260529BC2A3 ON compte (client_physique_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE compte DROP FOREIGN KEY FK_CFF65260529BC2A3');
        $this->addSql('DROP INDEX IDX_CFF65260529BC2A3 ON compte');
        $this->addSql('ALTER TABLE compte CHANGE client_physique_id client_phisyque_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE compte ADD CONSTRAINT FK_CFF6526099851C1C FOREIGN KEY (client_phisyque_id) REFERENCES client (id)');
        $this->addSql('CREATE INDEX IDX_CFF6526099851C1C ON compte (client_phisyque_id)');
    }
}
