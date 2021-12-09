<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Asignada;
use App\Models\Category;
use App\Models\Tarea;
use App\Models\Becario;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalTareas = Tarea::count();
        $totalBecarios = Becario::count();
        $totalAsignadas = Asignada::count();

        return view('admin.pages.dashboard.index', compact('totalUsers','totalBecarios', 'totalTareas', 'totalAsignadas'));
    }

}
