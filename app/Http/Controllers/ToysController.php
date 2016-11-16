<?php

namespace App\Http\Controllers;

use App\Toy;
use Illuminate\Http\Request;
use App\Http\Requests\StoreToysRequest;
use App\Http\Requests\UpdateToysRequest;

class ToysController extends Controller
{

    public function index()
    {
        $toys = Toy::all();
        return view('toys.index', compact('toys'));
    }


    public function create()
    {
        return view('toys.create');
    }

    public function store(StoreToysRequest $request)
    {
        Toy::create($request->all());
        return redirect()->route('toys.index');
    }

  
    public function edit($id)
    {
        $toy = Toy::findOrFail($id);
        return view('toys.edit', compact('toy'));
    }

 
    public function update(UpdateToysRequest $request, $id)
    {
        $toy = Toy::findOrFail($id);
        $toy->update($request->all());
        return redirect()->route('toys.index');
    }

   
    public function show($id)
    {
        $toy = Toy::findOrFail($id);
        return view('toys.show', compact('toy'));
    }
  
    public function destroy($id)
    {
        $toy = Toy::findOrFail($id);
        $toy->delete();
        return redirect()->route('toys.index');
    }

}
