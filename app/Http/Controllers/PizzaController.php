<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    //Applies the middleware to all of them
    // public function __construct(){
    //     $this->middleware('auth');
    // }
    public function index() {

        $pizza = Pizza::all();
        // $pizzas1 = Pizza::orderBy('name')->get();
        // $pizza2 = Pizza::where('type','hawaiian')->get();
        // $pizza3 = Pizza::latest()->get();

        return view('pizzas.index', 
        [
            'pizzas'=>$pizza
        ]);
    }

    public function show($id) {
        $pizza = Pizza::findOrFail($id);

        return view('pizzas.show', ['pizza'=>$pizza]);
    }

    public function create() {
        return view('pizzas.create');
    }

    public function store(){
        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');
        $pizza->save();

        //error_log($pizza);
        return redirect('/')->with('mssg',"Thanks for your order.");
    }

    public function destroy($id){
        $pizza = Pizza::findorFail($id);
        $pizza->delete();

        return redirect('/pizzas');
    }

}
