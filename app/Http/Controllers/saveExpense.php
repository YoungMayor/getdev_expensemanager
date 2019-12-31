<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\user_expenses as Expenses;

class saveExpense extends Controller
{
  public function __invoke(Request $request){

    $validateRule = [
      'exp_amtV_int' => 'required|numeric',
      'exp_date' => 'required|date|before:tomorrow',
      'exp_reason' => 'required',
    ];
    $validateMessages = [
      'exp_amtV_int' => 'Please enter a valid amount in the expense value',
      'exp_date.required' => 'The date of the expense is important',
      'exp_date.date' => 'Please enter a valid date for the expense date',
      'exp_date.before' => 'You can\'t place expenses for future dates',
      'exp_reason' => 'A reason for the expense is required',
    ];

    $validatedData = Validator::make($request->all(), $validateRule, $validateMessages);

    if ($validatedData->fails()) {
      $error['e'] = view("sections.error", ["errors" => $validatedData->errors()])->render();
      return json_encode($error);
    }

    $expenseAmt = $request->exp_amtV_int;
    if ($request->inEuro == "1"){
      $expenseAmt = exchangeCurrency($expenseAmt, "EUR", "GBP");
    }

    $expenses = new Expenses;
    $expenses->expense_cost = $expenseAmt;
    $expenses->expense_date = $request->exp_date;
    $expenses->expense_reason = $request->exp_reason;
    $expenses->save();

    $response['s'] = 1;

    return json_encode($response);
  }
}
