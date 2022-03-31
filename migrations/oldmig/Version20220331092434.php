<?php

declare(strict_types=1);

// phpcs:ignoreFile
namespace DoctrineMigrations;

use Doctrine\DBAL\Exception;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220331092434 extends AbstractMigration
{
    /**
     * @noinspection PhpMissingParentCallCommonInspection
     */
    public function getDescription(): string
    {
        return 'TODO: Describe reason for this migration';
    }

    /**
     * @noinspection PhpMissingParentCallCommonInspection
     */
    public function isTransactional(): bool
    {
        return false;
    }

    /**
     * @throws Exception
     */
    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf(
            $this->connection->getDatabasePlatform()->getName() !== 'mysql',
            'Migration can only be executed safely on \'mysql\'.'
        );

        $this->addSql('ALTER TABLE comment ADD photo_filename VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C604B8382 FOREIGN KEY (conference_id) REFERENCES comment (id)');
    }

    /**
     * @noinspection PhpMissingParentCallCommonInspection
     *
     * @throws Exception
     */
    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf(
            $this->connection->getDatabasePlatform()->getName() !== 'mysql',
            'Migration can only be executed safely on \'mysql\'.'
        );

        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C604B8382');
        $this->addSql('ALTER TABLE comment DROP photo_filename');
    }
}
