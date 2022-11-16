<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221115203606 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE films ADD type VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE realisateurs CHANGE nom nom VARCHAR(60) NOT NULL, CHANGE prenom prenom VARCHAR(60) NOT NULL, CHANGE date_de_naissance date_de_naissance DATE NOT NULL, CHANGE age age DATE NOT NULL, CHANGE img_url img_url VARCHAR(255) NOT NULL, CHANGE budget budget INT NOT NULL, CHANGE type type VARCHAR(40) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE films DROP type');
        $this->addSql('ALTER TABLE realisateurs CHANGE nom nom VARCHAR(60) DEFAULT NULL, CHANGE prenom prenom VARCHAR(60) DEFAULT NULL, CHANGE date_de_naissance date_de_naissance DATE DEFAULT NULL, CHANGE age age DATE DEFAULT NULL, CHANGE img_url img_url VARCHAR(255) DEFAULT NULL, CHANGE budget budget INT DEFAULT NULL, CHANGE type type VARCHAR(40) DEFAULT NULL');
    }
}
