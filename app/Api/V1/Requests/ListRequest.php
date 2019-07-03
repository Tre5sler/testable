<?php

/**
 * Created by: Hemant Saini
 * Date: Thu, 06 Jun 2019 10:25:45 +0000
 */

namespace App\Api\V1\Requests;

use Devslane\Generator\Requests\BaseRequest;

/**
 * Class ListTesttableRequest
 * @package App\Api\V1\Requests
 */
class ListRequest extends BaseRequest
{
    const LIMIT        = 'limit';
    const ORDER        = 'order';
    const ORDER_BY     = 'order_by';
    const SEARCH_QUERY = 'search_query';


    public function getLimit() {
        return $this->input(self::LIMIT);
    }

    public function getOrder() {
        return $this->input(self::ORDER);
    }

    public function getOrderBy() {
        return $this->input(self::ORDER_BY);
    }

    public function getSearchQuery() {
        return $this->input(self::SEARCH_QUERY);
    }


}
