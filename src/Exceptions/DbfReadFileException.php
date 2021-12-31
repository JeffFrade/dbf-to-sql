<?php

namespace App\Exceptions;

use App\Core\Support\BaseException;
use App\Interfaces\DbfExceptionInterface;

class DbfReadFileException extends BaseException implements DbfExceptionInterface
{}
