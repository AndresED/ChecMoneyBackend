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
        if (Auth::check()) {

        $ingresos = DB::table('transactions')
            ->select('transactions.*')
                  ->where([
                    ['user_id',"=", Auth::user()->id],
                    ['type_transaction_id',"=", 1],
            ])->get();
        
        $gastos = DB::table('transactions')
            ->select('transactions.*')
                  ->where([
                    ['user_id',"=", Auth::user()->id],
                    ['type_transaction_id',"=", 2],
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
        
        //dd(json_encode($tipo_transactions));
        return View::make('dashboard')->with([
            'ingresos' => $ingresos,
            'gastos' => $gastos,
            'cuentas' => $cuentas,
            'categorias' => $categorias,
            'tipo_transactions'=>$tipo_transactions,
        ]);
    }else{
        return redirect()->route('login');
    }
    }
}
