<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190605183545 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, start_date DATE NOT NULL, end_date DATE NOT NULL, INDEX IDX_42C84955A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955A76ED395 FOREIGN KEY (user_id) REFERENCES fos_user (id)');
        $this->addSql('DROP TABLE room_user');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE room_user (room_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_EE973C2DA76ED395 (user_id), INDEX IDX_EE973C2D54177093 (room_id), PRIMARY KEY(room_id, user_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE room_user ADD CONSTRAINT FK_EE973C2D54177093 FOREIGN KEY (room_id) REFERENCES room (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE room_user ADD CONSTRAINT FK_EE973C2DA76ED395 FOREIGN KEY (user_id) REFERENCES fos_user (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE reservation');
    }
}
