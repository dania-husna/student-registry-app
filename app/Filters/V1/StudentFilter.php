<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class StudentFilter extends ApiFilter{
    
    protected $safeParms = [
        'id' => ['eq','lt','gt','lte','gte'],
        'staff_id' => ['eq','lt','gt','lte','gte'],
        'stud_name' => ['eq'],
        'stud_email' => ['eq']
    ];

    protected $columnMap = [
        'id' => 'id',
        'stud_name' => 'stud_name',
        'stud_email' => 'stud_email'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '≤',
        'gte' => '≥'
    ];
}