<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Promotor;

class PromotorController extends Controller
{
    public function index(): View {
        $daftarPromotor = Promotor::all();

        return view('promotor', compact('daftarPromotor'));
    }
}
