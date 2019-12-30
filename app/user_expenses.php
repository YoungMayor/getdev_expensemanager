<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_expenses extends Model
{
    protected $primaryKey = 'expense_id';
    public $timestamps = false;
}
