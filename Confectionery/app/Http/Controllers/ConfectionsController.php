<?php

namespace App\Http\Controllers;

use App\Models\Confections;
use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;
use Illuminate\Validation\Rule;

class ConfectionsController extends Controller
{   //show all confection
    public function index() 
    {
        return view('confections.index', ['confections' => Confections::orderBy('cname')->paginate(10)]);
    }


    //Show create form
    public function create(){
        return view('confections.create');
    }


    //Show single confection
    public function show(Confections $confection)
    {
        $conf = $confection->load('contents', 'prices');
        return view('confections.show', ['confection' => $conf]);
    }

    //Store listing data
    public function store(Request $request){
        $formFields = $request->validate([
            'cname'=>'required',
            'type'=>'required',
            'prizewinning',
            'free',
            'price'=>['required', 'numeric'],
            'unit'=>'required'
        ]);

        Confections::create($formFields);

        return redirect('/')->with('message', 'Confection created succesfully!');
    }
    //Show Edit form
    public function edit(Confections $confections){
        return view('confections.edit', ['confections'=> $confections]);
    }

    //Update listing
    public function update(Request $request, Confections $confections){

        $formFields = $request->validate([
            'cname'=>'required',
            'type'=>'required',
            'prizewinning',
            'free',
            'price'=>['required', 'numeric'],
            'unit'=>'required'
        ]);


        $confections->update($formFields);

        return back()->with('message', 'Confection updated succesfully!');
    }
    //delete listing
    public function destroy(Confections $confections){

        $confections->delete();
        return redirect('/')->with('message', 'Confection deleted succesfully!');
    }

  
}
