<?php

namespace App\Exceptions;

use App\Core\Support\BaseException;
use App\Interfaces\DbfExceptionInterface;

class DbfEmptyFileException extends BaseException implements DbfExceptionInterface
{}
