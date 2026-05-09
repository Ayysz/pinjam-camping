<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plant;

class PlantController extends Controller
{
    public function index()
    {
        $perPage = request()->get('per_page', 6);
        $list = Plant::paginate($perPage);

        return view('pages.plant.index', [
            "list" => $list
        ]);
    }

    public function show($id)
    {
        $item = Plant::findOrFail($id);

        return view('pages.plant.show', [
            "item" => $item
        ]);
    }
}
