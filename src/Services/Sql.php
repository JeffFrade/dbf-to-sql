<?php

namespace App\Services;

use App\Helpers\StringHelper;

class Sql
{
    public function mountInsertRow(string $table, array $dbf)
    {
        $keys = $this->getKeys($dbf);
        $values = $this->getValues($dbf);
        return sprintf('INSERT INTO %s(%s) VALUES("%s");', $table, $keys, $values) . PHP_EOL;
    }

    private function getKeys(array $dbf)
    {
        return StringHelper::removeAccents(implode(', ', array_keys($dbf)));
    }

    private function getValues(array $dbf)
    {
        return StringHelper::clearText(implode('", "', array_values($dbf)));
    }
}
