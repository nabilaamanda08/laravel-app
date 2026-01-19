<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\ShoesModel;  
use App\Models\Detail;     
use Illuminate\Http\Request;

class DashboardController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Mengambil jumlah data brand, model, dan detail
        $brandCount = Brand::count();
        $modelCount = ShoesModel::count();
        $detailCount = Detail::count();

        // Mengembalikan view dashboard dengan data jumlah
        return view('dashboard', compact('brandCount', 'modelCount', 'detailCount'));
    }
}
