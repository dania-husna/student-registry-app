<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class StaffFilter extends ApiFilter{
    protected $safeParms = [
        'id' => ['eq','lt','gt','lte','gte'],
        'staff_name' => ['eq'],
        'staff_email' => ['eq'],
        'staff_password' => ['eq']
    ];

    protected $columnMap = [
        'id' => 'id',
        'staff_name' => 'staff_name',
        'staff_email' => 'staff_email'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '≤',
        'gte' => '≥'
    ];
}