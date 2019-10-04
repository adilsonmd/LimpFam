<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonthBalanceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function index()
    {
        return view('balance.index');
    }

    public function getMonthBalance()
    {
        $balance = DB::table('month_balance')->select('valueSum', 'month', 'year')
                        ->groupBy('year', 'month');

        //SELECT valueSum, month, year FROM month_balance
        //GROUP BY month, year
        //ORDER BY month DESC, year ASC;
        return view('balance.index')->with(compact('balance'));
    }

    public function create(Request $request){
        $balance = [
            '' => $request[''];
            '' => $request[''];
            '' => $request[''];
        ];
        DB::table('')->insert();
    }
}
