<?php

namespace App\Ddd\Shared\Domain;


use DateTimeInterface;
use RuntimeException;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

final class Utils
{
    public static function endsWith(string $needle, string $haystack): bool
    {
        $length = strlen($needle);
        if ($length === 0) {
            return true;
        }

        return (substr($haystack, -$length) === $needle);
    }

    public static function dateToString(DateTimeInterface $date): string
    {
        return $date->format(DateTimeInterface::ATOM);
    }

    public static function jsonDecode(string $json): array
    {
        $data = json_decode($json, true);

        if (JSON_ERROR_NONE !== json_last_error()) {
            throw new RuntimeException('Unable to parse response body into JSON: ' . json_last_error());
        }

        return $data;
    }

    public static function writeLog($data)
    {
        // create a log channel
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler('etc/var/salaries.log', Logger::WARNING));

        // add records to the log
        $log->warning(var_export($data, true));
    }

}