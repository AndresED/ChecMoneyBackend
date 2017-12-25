<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function loginIndex()
    {
        return view('login');
    }
    public function showDashboard()
    {
        $total=0;
        $total_ingresos=0;
        $total_gastos=0;
        if (Auth::check()) {

        $ingresos = DB::table('categories')
            ->leftjoin("transactions","transactions.category_id","categories.id")
            ->leftjoin("accounts","accounts.id","transactions.account_id")
            ->leftjoin("users","users.id","accounts.user_id")
            ->select('transactions.id','transactions.mount','transactions.date','accounts.name as account_name','categories.name as category_name')
                  ->where([
                    ['users.id',"=", Auth::user()->id],
                    ['transactions.type_transaction_id',"=", 1],
            ])->get();
      
        
        $gastos = DB::table('categories')
            ->leftjoin("transactions","transactions.category_id","categories.id")
            ->leftjoin("accounts","accounts.id","transactions.account_id")
            ->leftjoin("users","users.id","accounts.user_id")
            ->select('transactions.id','transactions.mount','transactions.date','accounts.name as account_name','categories.name as category_name')
                  ->where([
                    ['users.id',"=", Auth::user()->id],
                    ['transactions.type_transaction_id',"=", 2],
            ])->get();

        $cuentas = DB::table('accounts')
            ->select('accounts.*')
                  ->where([
                    ['user_id',"=", Auth::user()->id],
            ])->get();

        

        $categorias = DB::table('categories')
            ->select('categories.*')
                  ->where([
                    ['user_id',"=", Auth::user()->id],
            ])->get();


        $tipo_transactions = DB::table('type_transactions')
            ->select('type_transactions.*')
            ->get();
        
         foreach ($ingresos as $ingreso) {
                $total_ingresos=$total_ingresos+$ingreso->mount;
            }  
            
        foreach ($gastos as $gasto) {
                $total_gastos=$total_gastos+$gasto->mount;
            }
        $total=$total_ingresos-$total_gastos;
        //dd(json_encode($tipo_transactions));
        return View::make('dashboard')->with([
            'ingresos' => $ingresos,
            'gastos' => $gastos,
            'cuentas' => $cuentas,
            'categorias' => $categorias,
            'tipo_transactions'=>$tipo_transactions,
            'total'=>$total,
            'total_ingresos'=>$total_ingresos,
            'total_gastos'=>$total_gastos
        ]);
    }else{
        return redirect()->route('login');
    }
    }
}
