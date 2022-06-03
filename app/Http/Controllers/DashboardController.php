<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $supliers = DB::table('supliers')->get();
        $total_supliers =  count($supliers);

        $users = DB::table('users')->get();
        $total_users =  count($users);

        return view('Admin.Dashboard.index', [
            'total_supliers' => $total_supliers,
            'total_users' => $total_users,
            'title' => 'Dashboard',
            'active' => 'dashboard'
        ]);
    }
}
