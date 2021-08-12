<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpecialAssetsController extends Controller
{
    public function buildings(){
        $type = 'buildings';
        return view('dashboard.specialAssets.index',compact('type'));
    }
    public function Gardens_lands(){
        $type = 'Gardens_lands';
        return view('dashboard.specialAssets.index',compact('type'));
    }
    public function warehouses(){
        $type = 'warehouses';
        return view('dashboard.specialAssets.index',compact('type'));
    }
}
