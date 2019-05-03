<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Objects;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorkController extends Controller
{

    public function index()
    {
        $items = Objects::all();
        dd($items);
        return view('objects', compact('items'));
    }
    
    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        //
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        //
    }
    
    public function update(Request $request, $id)
    {
        //
    }
    
    public function destroy($id)
    {
        //
    }
}
