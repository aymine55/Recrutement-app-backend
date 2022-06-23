<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220423060806 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE offre ADD location VARCHAR(255) NOT NULL, ADD salary VARCHAR(255) NOT NULL, ADD nature VARCHAR(255) NOT NULL, ADD departement VARCHAR(255) NOT NULL, ADD skill1 VARCHAR(255) DEFAULT NULL, ADD skill2 VARCHAR(255) DEFAULT NULL, ADD skill3 VARCHAR(255) DEFAULT NULL, ADD education VARCHAR(255) NOT NULL, ADD experience VARCHAR(255) NOT NULL, ADD created_at DATETIME NOT NULL, ADD updated_at DATETIME NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE news CHANGE title title VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE offre DROP location, DROP salary, DROP nature, DROP departement, DROP skill1, DROP skill2, DROP skill3, DROP education, DROP experience, DROP created_at, DROP updated_at, CHANGE title title VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
