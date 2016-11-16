<?php

namespace App\Http\Controllers;

use App\Cat;
use App\Toy;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCatsRequest;
use App\Http\Requests\UpdateCatsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

class CatsController extends Controller
{
    use FileUploadTrait;


    /**
     * Display a listing of Cat.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats = Cat::with('toys')->get();

        return view('cats.index', compact('cats'));
    }

    /**
     * Show the form for creating new Cat.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $enum_color = Cat::$enum_color;

        $toys = Toy::orderBy('name')->get();
        
        return view('cats.create', compact('enum_color','toys'));
    }

    /**
     * Store a newly created Cat in storage.
     *
     * @param  \App\Http\Requests\StoreCatsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCatsRequest $request)
    {
        $request = $this->saveFiles($request);
        $cat = Cat::create($request->all());

         // Append Cats/States
        $toys = $request->get('toys');
        if(is_array($toys)) {
            foreach ($toys as $toy) {
                $cat->toys()->attach($toy);
            }
        }

        return redirect()->route('cats.index');
    }

    /**
     * Show the form for editing Cat.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $enum_color = Cat::$enum_color;

        $toys = Toy::orderBy('name')->get();

        $cat = Cat::findOrFail($id);
        return view('cats.edit', compact('cat', 'enum_color','toys'));
    }

    /**
     * Update Cat in storage.
     *
     * @param  \App\Http\Requests\UpdateCatsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCatsRequest $request, $id)
    {
        $request = $this->saveFiles($request);
        $cat = Cat::findOrFail($id);
        $cat->update($request->all());

        $cat->toys()->detach();
        $cat->toys()->attach($request->get('toys'));

        return redirect()->route('cats.index');
    }

    /**
     * Display Cat.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cat = Cat::with('toys')->findOrFail($id);
        return view('cats.show', compact('cat'));
    }

    /**
     * Remove Cat from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Cat::findOrFail($id);
        $cat->toys()->detach();
        $cat->delete();


        return redirect()->route('cats.index');
    }

}
