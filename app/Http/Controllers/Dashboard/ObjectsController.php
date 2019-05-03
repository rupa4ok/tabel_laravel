<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Objects;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ObjectsController extends Controller
{
    public function index(Objects $objects)
    {
        $items = $objects->paginate(20);
        return view('dashboard.objects.index', compact('items'));
    }
    
    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        //
    }
    
    public function show(Objects $objects, $id)
    {
        $items = $objects->getItem($id);
        return view('dashboard.work.show', compact('items'));
    }
    
    public function edit(Objects $objects, $id)
    {
        $items = $objects->getItem($id);
        return view('dashboard.work.edit', compact('items'));
    }
    
    public function update(Request $request, $id)
    {
        //
    }
    
    public function destroy(Objects $objects)
    {
        $objects->delete();
        return redirect()->route('admin.users.index', $objects);
    }
}
