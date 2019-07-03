<?php

/**
 * Created by: Hemant Saini
 * Date: Tue, 02 Jul 2019 13:43:00 +0000
 */

namespace App\Api\V1\Exceptions;

use Devslane\Generator\Exceptions\HttpException;

/**
 * Class UserNotFoundException
 * @package App\Api\V1\Exceptions
 */
class UserNotFoundException extends HttpException
{
    const ERROR_MESSAGE = 'User not Found';

    public function __construct()
    {
        parent::__construct(self::ERROR_MESSAGE, self::ERROR_NOT_FOUND, 404);
    }
}
