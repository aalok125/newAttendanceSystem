<?php

namespace Candidate\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyBusinessleave extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'business_leave_id'
    ];


}