<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function dashboard()
    {
        return view('adminhtml.dashboard');
    }

    public function chartjs()
    {
        return view('adminhtml.chartjs');
    }

    public function tableProduct()
    {
        return view('adminhtml.table-product');
    }
}
