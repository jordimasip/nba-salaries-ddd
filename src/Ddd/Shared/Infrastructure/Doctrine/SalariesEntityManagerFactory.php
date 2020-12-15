<?php


namespace App\Ddd\Shared\Infrastructure\Doctrine;

use Doctrine\ORM\EntityManagerInterface;

final class SalariesEntityManagerFactory
{
    private const SCHEMA_PATH = __DIR__ . '/../../../../../databases/salaries.sql';

    public static function create(array $parameters, string $environment): EntityManagerInterface
    {
        $isDevMode = 'prod' !== $environment;

        $prefixes               = DoctrinePrefixesSearcher::inPath(__DIR__ . '/../../../Salaries', 'App\Ddd\Salaries');
        $dbalCustomTypesClasses = DbalTypesSearcher::inPath(__DIR__ . '/../../../Salaries', 'Salaries');
        return DoctrineEntityManagerFactory::create(
            $parameters,
            $prefixes,
            $isDevMode,
            self::SCHEMA_PATH,
            $dbalCustomTypesClasses
        );
    }
}