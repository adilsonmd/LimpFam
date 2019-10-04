<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
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

    public function create(Request $request)
    {
        $name = $this->defineProductName($request->input('productId'));

        $product = [
            'product_name' => $name,
            'product_quantity' => intval($request->input('productQuantity')),
            'product_value' => floatval($request->input('productValue')),
        ];

        $this->createSaleDb($product);

        return redirect()->route('home');
    }

    private function createSaleDb($product)
    {
        DB::table('sales')->insert(
            [
                'product_name' => $product['product_name'],
                'quantity' => $product['product_quantity'],
                'value' => $product['product_value']
            ]
        );
    }

    public function getSales()
    {
        $sales = DB::table('sales')->get();

        return view('dashboard.index')->with(compact('sales'));
    }

    public function getLastestMonth()
    {
        return DB::table('month_balance')->selectRaw('month, year')->get();
        
    }

    private function defineProductName($id)
    {
        $name = "";
        switch($id)
        {
            case "1":
                $name = "Cloro";
                break;
            case "2":
                $name = "Candida";
                break;
            
            case "3":
                $name = "Desinfetante";
                break;
            case "4": 
                $name="Ajax";
                break;
            case "5": 
                $name="Maridão";
                break;
            case "6": 
                $name = "Dínamo";
                break;
            default:
                $name = "";
                break;
        }
        return $name;
    }
}
