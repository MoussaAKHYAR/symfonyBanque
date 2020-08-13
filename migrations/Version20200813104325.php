<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200813104325 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE compte (id INT AUTO_INCREMENT NOT NULL, numero VARCHAR(255) NOT NULL, rib VARCHAR(255) NOT NULL, solde DOUBLE PRECISION DEFAULT NULL, date_ouverture DATE NOT NULL, raison_social VARCHAR(255) DEFAULT NULL, salaire DOUBLE PRECISION DEFAULT NULL, nom_employeur VARCHAR(255) DEFAULT NULL, tel_employeur VARCHAR(255) DEFAULT NULL, numer_identification VARCHAR(255) DEFAULT NULL, agios DOUBLE PRECISION DEFAULT NULL, frais_ouverture DOUBLE PRECISION NOT NULL, remuneration DOUBLE PRECISION NOT NULL, date_debut DATE DEFAULT NULL, date_fin DATE DEFAULT NULL, type_compte VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE compte');
    }
}
