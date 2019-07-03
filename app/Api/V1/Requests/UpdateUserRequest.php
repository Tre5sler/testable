<?php

/**
 * Created by: Hemant Saini
 * Date: Tue, 02 Jul 2019 13:51:28 +0000
 */

namespace App\Api\V1\Requests;

use App\Services\Contract\UpdateUserContract as Contract;

/**
 * Class UpdateUserRequest
 * @package App\Api\V1\Requests
 */
class UpdateUserRequest extends ListRequest implements Contract
{
    const FIRST_NAME = 'first_name';
    const LAST_NAME  = 'last_name';
    const AGE        = 'age';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public function getFirstName() {
        return $this->input(self::FIRST_NAME);
    }

    public function hasFirstName() {
        return $this->has(self::FIRST_NAME);
    }

    public function getLastName() {
        return $this->input(self::LAST_NAME);
    }

    public function hasLastName() {
        return $this->has(self::LAST_NAME);
    }

    public function getAge() {
        return $this->input(self::AGE);
    }

    public function hasAge() {
        return $this->has(self::AGE);
    }

    public function getCreatedAt() {
        return $this->input(self::CREATED_AT);
    }

    public function hasCreatedAt() {
        return $this->has(self::CREATED_AT);
    }

    public function getUpdatedAt() {
        return $this->input(self::UPDATED_AT);
    }

    public function hasUpdatedAt() {
        return $this->has(self::UPDATED_AT);
    }

}
