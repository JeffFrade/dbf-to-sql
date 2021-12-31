<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use App\Interfaces\DbfExceptionInterface;
use App\Services\Dbf;

$dbf = new Dbf();

try {
    $dbf->convertToSql($_FILES['dbf']);
} catch (DbfExceptionInterface $e) {
    echo $e->getMessage();
}
