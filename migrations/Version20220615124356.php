<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220615124356 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE news CHANGE image image VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE formulaire CHANGE full_name full_name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE email email VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE adress adress VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE cv cv VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE lettre lettre VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE offre offre VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE interview CHANGE subject subject VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE sendto sendto VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE message message VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE news CHANGE title title VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE image image VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE offre CHANGE title title VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description VARCHAR(3000) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE location location VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE salary salary VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE nature nature VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE departement departement VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE skill1 skill1 VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE skill2 skill2 VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE skill3 skill3 VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE education education VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE experience experience VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user CHANGE email email VARCHAR(180) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE roles roles LONGTEXT DEFAULT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:array)\', CHANGE password password VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE fullname fullname VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE phone phone VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE adress adress VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE cv cv VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE lm lm VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE age age VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE occupation occupation VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE experience experience VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE web web VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE github github VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE twitter twitter VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE insta insta VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE fb fb VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
