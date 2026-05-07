<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CampGear;

class CampGearController extends Controller
{
    public function index()
    {
        $list = CampGear::all();

        return view('pages.camp_gear.index', [
            "list" => $list
        ]);
    }

    public function show($id)
    {
        $item = CampGear::findOrFail($id);

        return view('pages.camp_gear.show', [
            "item" => $item
        ]);
    }
}
