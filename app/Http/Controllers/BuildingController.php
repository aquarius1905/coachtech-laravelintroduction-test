<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuildingController extends Controller
{
    public function building() {
        return 'building';
    }
    public function buildingRoom ($room) {
        return '部屋番号は'.$room.'です';
    }
}
