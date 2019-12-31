<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\user_expenses AS Expenses;

class userExpenses extends Controller
{
  public function showExpense(){
    $expenses = Expenses::orderBy("expense_date", "desc")->paginate(15);
    return view("expenses", ["expenses" => $expenses]);
  }

  public function showExpenseForm(){
    return view("new-expense");
  }
}
