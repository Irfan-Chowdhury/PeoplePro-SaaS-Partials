<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Payslip extends Model
{
    protected $guarded = [];

	protected $casts = [
		'allowances' => 'array',
		'commissions' => 'array',
		'overtimes' => 'array',
		'loans' => 'array',
		'deductions' => 'array',
		'other_payments' => 'array',
	];



	public function employee(){
		return $this->belongsTo('App\Models\Employee','employee_id','id');
	}

	public function employeeBankAccount(){
		return $this->hasOne('App\Models\EmployeeBankAccount','employee_id','employee_id');
	}

	public function getRouteKeyName()
	{
		return 'payslip_key'; // TODO: Change the autogenerated stub
	}

	public function getCreatedAtAttribute($value)
	{
		return Carbon::parse($value)->format(session()->get('dateFormat'));
	}

}
