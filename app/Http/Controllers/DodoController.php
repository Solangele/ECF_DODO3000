<?php

namespace App\Http\Controllers;

use App\Models\Dodo;
use Illuminate\Http\Request;

class DodoController extends Controller
{
    // public function connect()
    // {
    //     return view('connexion');
    // }
       

    public function dodos()
    {
        return view('catalogue',[
            'dodos'=>Dodo::all(),
        ]);
    }

    public function matelas($id)
    {
        $dodo=Dodo::findOrFail($id);
        return view('/matelas',[
            'dodos'=>$dodo]);
    }

    public function create()
    {
        return view('create',[
            'dodos' =>Dodo::all(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'brand.*' => 'required|in:'.implode(',', ['Epeda', 'Dreamway', 'Bultex', 'Dorsoline', 'MemoryLine']),
            'size.*' => 'required|in:'.implode(',', ['90 x 190', '140 x 190', '160 x 200', '180 x 200', '200 x 200']),
            'price' => 'required',
            'reduction' => 'required',
            'image' => 'nullable|string',
        ]);

        $dodo = new Dodo();
        $dodo->brand = $request->brand;
        $dodo->size = $request->size;
        $dodo->price = $request->price;
        $dodo->reduction = $request->reduction;
        $dodo->total = $request->total;
        $dodo->image = 'Hello';
        $dodo->save();

        return redirect('/matelas')->with('message', 'Le matelas a été ajouté');
    }

    public function edit($id)
        {
            $dodo = Dodo::findOrFail($id);
    
            return view('/edit', [
                'dodos' => $dodo,
            ]);
    
        }

    public function update(Request $request, $id)
    {
        $request->validate([
            'brand' => 'required',
            'size' => 'required',
            'price' => 'required',
            'reduction' => 'required',
            'image' => 'nullable|string',
        ]);

        $dodo = Dodo::findOrFail($id);
        $dodo->brand = $request->brand;
        $dodo->size = $request->size;
        $dodo->price = $request->price;
        $dodo->reduction = $request->reduction;
        $dodo->save();

        return redirect('/matelas');

    }

    public function destroy($id)
    {         
        Dodo::destroy($id);
        return redirect('/matelas');//DELETE FROM movies WHER id...
    }
}
