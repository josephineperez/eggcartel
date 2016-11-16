<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCatsRequest;
use App\Http\Requests\UpdateCatsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

use Auth;
use App\Order;
use App\Item;
use App\Base;
use App\Egg;
use App\Topping;
use App\Meat;
use App\Cheese;

class OrdersController extends Controller
{


    /**
     * Display a listing of Cat.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::with('items')->get();

        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating new Cat.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $cheeses = Cheese::all();
        $toppings = Topping::all();
        $meats = Meat::all();
        $eggs = Egg::all();
        $bases = Base::all();

        return view('orders.create', compact('cheeses', 'toppings', 'meats', 'eggs', 'bases' ));
    }

    /**
     * Store a newly created Cat in storage.
     *
     * @param  \App\Http\Requests\StoreCatsRequest  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(StoreOrdersRequest $request)
    public function store(Request $request)
    {

        // dd($request);

        $base = $request->input('base');
        $egg = $request->input('egg');
        $cheese = $request->input('cheese');
        $meat = $request->input('meat');
        $topping = $request->input('topping');
        $for_person = $request->input('for_person');

        // make new order
        $order = Order::create([
            'user_id' => Auth::id(),
            'confirmed' => 0
        ]);

        $item = Item::create([
            'order_id' => $order->id,
            'for_person' => $for_person, 
            'base_id' => $base,
        ]);

        $item->eggs()->attach($egg);
            $item->save();

        $item->cheeses()->attach($cheese);
            $item->save();

        $item->meats()->attach($meat);
            $item->save();

        $item->toppings()->attach($topping);
            $item->save();

        return redirect()->route('cart',  ['id' => $order->id]);
    }

    /**
     * Show the form for editing Cat.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     $enum_color = Cat::$enum_color;

    //     $toys = Toy::orderBy('name')->get();

    //     $cat = Cat::findOrFail($id);
    //     return view('cats.edit', compact('cat', 'enum_color','toys'));
    // }

    /**
     * Update Cat in storage.
     *
     * @param  \App\Http\Requests\UpdateCatsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(UpdateCatsRequest $request, $id)
    // {
    //     $request = $this->saveFiles($request);
    //     $cat = Cat::findOrFail($id);
    //     $cat->update($request->all());

    //     $cat->toys()->detach();
    //     $cat->toys()->attach($request->get('toys'));

    //     return redirect()->route('cats.index');
    // }

   




    public function show($id)
    {
        // $order = Order::with('user')
        //                ->with('items.eggs')
        //                ->with('items.base')
        //                ->with('items.cheeses')
        //                ->with('items.meats')
        //                ->with('items.toppings')
        //                ->findOrFail($id);

        // return $order;

       

        // return view('orders.show', compact('order'));
    }





    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->items()->detach();
        $order->delete();


        return redirect()->route('orders.index');
    }



    public function cart($id)
    {


         // $users = User::with('orders.items.eggs.bases')->get();

         // $users = User::with('orders.items.eggs')
         //               ->with('orders.items.base')
         //               ->with('orders.items.cheeses')
         //               ->with('orders.items.meats')
         //               ->with('orders.items.toppings')
         //               ->get();

         // $items = Item::with('base')->get();



        $order = Order::with('items.eggs')
                    ->with('items.base')
                    ->with('items.cheeses')
                    ->with('items.meats')
                    ->with('items.toppings')
                    ->findOrFail($id);

        return view('orders.my_cart', compact('order'));
    }

    public function processing($id)
    {
        $order = Order::findOrFail($id);
        $order->confirmed = 1;
        $order->save();
        return redirect()->route('orders.summary',  ['id' => $order->id]);
    }

    public function summary($id)
    {
        $order = Order::findOrFail($id);
        return view('orders.summary', compact('order'));
    }


}
