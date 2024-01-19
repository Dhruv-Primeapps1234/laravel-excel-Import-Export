<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Product;

class ExcelController extends Controller
{

    public function index(){
        $products = Product::get();
        return view('welcome', compact('products'));
    }

    public function export() {
        return Excel::download(new UsersExport, 'products.xlsx');
    }

    public function import() {
        Excel::import(new UsersImport,request()->file('file'));
        return back();
    }

}
