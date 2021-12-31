<?php

namespace App\Services;

use App\Helpers\StringHelper;
use App\Exceptions\DbfEmptyFileException;
use App\Exceptions\DbfReadFileException;

class Dbf
{
    private $sql;

    public function __construct()
    {
        $this->sql = new Sql();
    }

    public function convertToSql(array $dbf)
    {
        $table = $this->getTableName($dbf);
        $dbf = $this->readDbf($dbf);
        $this->validateDbf($dbf);
        $total = $this->getRowsCount($dbf);
        $this->setHeaders($table);

        for ($i = 1; $i <= $total; $i++) {
            $row = dbase_get_record_with_names($dbf, $i);
            echo $this->sql->mountInsertRow($table, $row);
        }

        $this->closeDbfFile($dbf);
    }

    private function getTableName(array $dbf)
    {
        $table = $dbf['name'];
        $table = str_ireplace('.dbf', '', $table);
        $table = preg_replace('/\s+/i', '_', $table);
        
        return StringHelper::removeAccents($table);
    }

    private function readDbf(array $dbf)
    {
        return dbase_open($dbf['tmp_name'], 0);
    }

    private function getRowsCount($dbf)
    {
        $total = dbase_numrecords($dbf);

        if ($total <= 0) {
            throw new DbfEmptyFileException('Empty DBF');
        }

        return $total;
    }

    private function validateDbf($dbf)
    {
        if (!$dbf) {
            throw new DbfReadFileException('Error to Reading DBF File');
        }
    }

    private function closeDbfFile($dbf)
    {
        dbase_close($dbf);
    }

    private function setHeaders(string $table)
    {
        header('Content-type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . $table . '.sql');
    }
}
