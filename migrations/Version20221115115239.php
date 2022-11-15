<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221115115239 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE accessoiristes (id INT AUTO_INCREMENT NOT NULL, personnage_id INT NOT NULL, imagination INT NOT NULL, patience INT NOT NULL, ingeniosite INT NOT NULL, UNIQUE INDEX UNIQ_E796964C5E315342 (personnage_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE acteurs (id INT AUTO_INCREMENT NOT NULL, personnage_id INT NOT NULL, creativite INT NOT NULL, improvisation INT NOT NULL, imagination INT NOT NULL, UNIQUE INDEX UNIQ_B85835AC5E315342 (personnage_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE actrices (id INT AUTO_INCREMENT NOT NULL, personnage_id INT NOT NULL, creativite INT NOT NULL, improvisation INT NOT NULL, imagination INT NOT NULL, UNIQUE INDEX UNIQ_DA5A7D85E315342 (personnage_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cadreurs (id INT AUTO_INCREMENT NOT NULL, personnage_id INT NOT NULL, sens_artistique INT NOT NULL, travail_equipe INT NOT NULL, habilete INT NOT NULL, UNIQUE INDEX UNIQ_8C3757FB5E315342 (personnage_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE compositeurs (id INT AUTO_INCREMENT NOT NULL, personnage_id INT NOT NULL, culture_musicale INT NOT NULL, UNIQUE INDEX UNIQ_4EAAA0385E315342 (personnage_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE costumiers (id INT AUTO_INCREMENT NOT NULL, personnage_id INT NOT NULL, creativite INT NOT NULL, habilete INT NOT NULL, sens_du_detail INT NOT NULL, UNIQUE INDEX UNIQ_86025E055E315342 (personnage_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE directeurs_de_casting (id INT AUTO_INCREMENT NOT NULL, personnage_id INT NOT NULL, intuition INT NOT NULL, observation INT NOT NULL, jugement INT NOT NULL, UNIQUE INDEX UNIQ_B0C938585E315342 (personnage_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE directeurs_photographie (id INT AUTO_INCREMENT NOT NULL, personnage_id INT NOT NULL, imagination INT NOT NULL, organisation INT NOT NULL, exigence INT NOT NULL, UNIQUE INDEX UNIQ_2D2EDB6B5E315342 (personnage_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE films (id INT AUTO_INCREMENT NOT NULL, realisateur_id INT NOT NULL, titre VARCHAR(100) NOT NULL, genre VARCHAR(50) NOT NULL, duree INT NOT NULL, date_de_sortie DATE NOT NULL, synopsis LONGTEXT NOT NULL, img_url VARCHAR(255) NOT NULL, note_presse DOUBLE PRECISION NOT NULL, note_joueurs DOUBLE PRECISION NOT NULL, budget INT NOT NULL, INDEX IDX_CEECCA51F1D8422E (realisateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE films_acteurs (films_id INT NOT NULL, acteurs_id INT NOT NULL, INDEX IDX_A526A0F939610EE (films_id), INDEX IDX_A526A0F71A27AFC (acteurs_id), PRIMARY KEY(films_id, acteurs_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ingenieurs_du_son (id INT AUTO_INCREMENT NOT NULL, personnage_id INT NOT NULL, attention INT NOT NULL, imagination INT NOT NULL, sensibilite_auditive INT NOT NULL, UNIQUE INDEX UNIQ_65C532695E315342 (personnage_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE perchmans (id INT AUTO_INCREMENT NOT NULL, personnage_id INT NOT NULL, travail_equipe INT NOT NULL, sensibilite_musicale INT NOT NULL, meticulosite INT NOT NULL, UNIQUE INDEX UNIQ_605F11B85E315342 (personnage_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE personnages (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(60) NOT NULL, prenom VARCHAR(60) NOT NULL, date_de_naissance DATE NOT NULL, statut VARCHAR(20) NOT NULL, recommandation INT NOT NULL, reputation INT NOT NULL, img_url VARCHAR(255) NOT NULL, type VARCHAR(50) NOT NULL, slug VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE producteurs (id INT AUTO_INCREMENT NOT NULL, personnage_id INT NOT NULL, persuasion INT NOT NULL, adaptabilite INT NOT NULL, audace INT NOT NULL, UNIQUE INDEX UNIQ_6C704815E315342 (personnage_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE realisateurs (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, nom VARCHAR(60) NOT NULL, prenom VARCHAR(60) NOT NULL, date_de_naissance DATE NOT NULL, age DATE NOT NULL, img_url VARCHAR(255) NOT NULL, budget INT NOT NULL, type VARCHAR(40) NOT NULL, slug VARCHAR(255) NOT NULL, is_verified TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_414C832EE7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE regisseurs (id INT AUTO_INCREMENT NOT NULL, personnage_id INT NOT NULL, organisation INT NOT NULL, gestion INT NOT NULL, ingeniosite INT NOT NULL, UNIQUE INDEX UNIQ_7AC12AA45E315342 (personnage_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE scenaristes (id INT AUTO_INCREMENT NOT NULL, personnage_id INT NOT NULL, imagination INT NOT NULL, inspiration INT NOT NULL, creativite INT NOT NULL, UNIQUE INDEX UNIQ_E1FFC2325E315342 (personnage_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE techniciens_fx (id INT AUTO_INCREMENT NOT NULL, personnage_id INT NOT NULL, creativite INT NOT NULL, rigueur INT NOT NULL, minutie INT NOT NULL, UNIQUE INDEX UNIQ_F6F34C165E315342 (personnage_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE accessoiristes ADD CONSTRAINT FK_E796964C5E315342 FOREIGN KEY (personnage_id) REFERENCES personnages (id)');
        $this->addSql('ALTER TABLE acteurs ADD CONSTRAINT FK_B85835AC5E315342 FOREIGN KEY (personnage_id) REFERENCES personnages (id)');
        $this->addSql('ALTER TABLE actrices ADD CONSTRAINT FK_DA5A7D85E315342 FOREIGN KEY (personnage_id) REFERENCES personnages (id)');
        $this->addSql('ALTER TABLE cadreurs ADD CONSTRAINT FK_8C3757FB5E315342 FOREIGN KEY (personnage_id) REFERENCES personnages (id)');
        $this->addSql('ALTER TABLE compositeurs ADD CONSTRAINT FK_4EAAA0385E315342 FOREIGN KEY (personnage_id) REFERENCES personnages (id)');
        $this->addSql('ALTER TABLE costumiers ADD CONSTRAINT FK_86025E055E315342 FOREIGN KEY (personnage_id) REFERENCES personnages (id)');
        $this->addSql('ALTER TABLE directeurs_de_casting ADD CONSTRAINT FK_B0C938585E315342 FOREIGN KEY (personnage_id) REFERENCES personnages (id)');
        $this->addSql('ALTER TABLE directeurs_photographie ADD CONSTRAINT FK_2D2EDB6B5E315342 FOREIGN KEY (personnage_id) REFERENCES personnages (id)');
        $this->addSql('ALTER TABLE films ADD CONSTRAINT FK_CEECCA51F1D8422E FOREIGN KEY (realisateur_id) REFERENCES realisateurs (id)');
        $this->addSql('ALTER TABLE films_acteurs ADD CONSTRAINT FK_A526A0F939610EE FOREIGN KEY (films_id) REFERENCES films (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE films_acteurs ADD CONSTRAINT FK_A526A0F71A27AFC FOREIGN KEY (acteurs_id) REFERENCES acteurs (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ingenieurs_du_son ADD CONSTRAINT FK_65C532695E315342 FOREIGN KEY (personnage_id) REFERENCES personnages (id)');
        $this->addSql('ALTER TABLE perchmans ADD CONSTRAINT FK_605F11B85E315342 FOREIGN KEY (personnage_id) REFERENCES personnages (id)');
        $this->addSql('ALTER TABLE producteurs ADD CONSTRAINT FK_6C704815E315342 FOREIGN KEY (personnage_id) REFERENCES personnages (id)');
        $this->addSql('ALTER TABLE regisseurs ADD CONSTRAINT FK_7AC12AA45E315342 FOREIGN KEY (personnage_id) REFERENCES personnages (id)');
        $this->addSql('ALTER TABLE scenaristes ADD CONSTRAINT FK_E1FFC2325E315342 FOREIGN KEY (personnage_id) REFERENCES personnages (id)');
        $this->addSql('ALTER TABLE techniciens_fx ADD CONSTRAINT FK_F6F34C165E315342 FOREIGN KEY (personnage_id) REFERENCES personnages (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE accessoiristes DROP FOREIGN KEY FK_E796964C5E315342');
        $this->addSql('ALTER TABLE acteurs DROP FOREIGN KEY FK_B85835AC5E315342');
        $this->addSql('ALTER TABLE actrices DROP FOREIGN KEY FK_DA5A7D85E315342');
        $this->addSql('ALTER TABLE cadreurs DROP FOREIGN KEY FK_8C3757FB5E315342');
        $this->addSql('ALTER TABLE compositeurs DROP FOREIGN KEY FK_4EAAA0385E315342');
        $this->addSql('ALTER TABLE costumiers DROP FOREIGN KEY FK_86025E055E315342');
        $this->addSql('ALTER TABLE directeurs_de_casting DROP FOREIGN KEY FK_B0C938585E315342');
        $this->addSql('ALTER TABLE directeurs_photographie DROP FOREIGN KEY FK_2D2EDB6B5E315342');
        $this->addSql('ALTER TABLE films DROP FOREIGN KEY FK_CEECCA51F1D8422E');
        $this->addSql('ALTER TABLE films_acteurs DROP FOREIGN KEY FK_A526A0F939610EE');
        $this->addSql('ALTER TABLE films_acteurs DROP FOREIGN KEY FK_A526A0F71A27AFC');
        $this->addSql('ALTER TABLE ingenieurs_du_son DROP FOREIGN KEY FK_65C532695E315342');
        $this->addSql('ALTER TABLE perchmans DROP FOREIGN KEY FK_605F11B85E315342');
        $this->addSql('ALTER TABLE producteurs DROP FOREIGN KEY FK_6C704815E315342');
        $this->addSql('ALTER TABLE regisseurs DROP FOREIGN KEY FK_7AC12AA45E315342');
        $this->addSql('ALTER TABLE scenaristes DROP FOREIGN KEY FK_E1FFC2325E315342');
        $this->addSql('ALTER TABLE techniciens_fx DROP FOREIGN KEY FK_F6F34C165E315342');
        $this->addSql('DROP TABLE accessoiristes');
        $this->addSql('DROP TABLE acteurs');
        $this->addSql('DROP TABLE actrices');
        $this->addSql('DROP TABLE cadreurs');
        $this->addSql('DROP TABLE compositeurs');
        $this->addSql('DROP TABLE costumiers');
        $this->addSql('DROP TABLE directeurs_de_casting');
        $this->addSql('DROP TABLE directeurs_photographie');
        $this->addSql('DROP TABLE films');
        $this->addSql('DROP TABLE films_acteurs');
        $this->addSql('DROP TABLE ingenieurs_du_son');
        $this->addSql('DROP TABLE perchmans');
        $this->addSql('DROP TABLE personnages');
        $this->addSql('DROP TABLE producteurs');
        $this->addSql('DROP TABLE realisateurs');
        $this->addSql('DROP TABLE regisseurs');
        $this->addSql('DROP TABLE scenaristes');
        $this->addSql('DROP TABLE techniciens_fx');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
