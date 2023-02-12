<?php

namespace App\Http\Controllers;

use App\Http\Resources\PorudzbinaResource;
use App\Models\Porudzbina;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PorudzbinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $porudzbine = Porudzbina::all();

        return PorudzbinaResource::collection($porudzbine);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'proizvod_id'=>'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $porudzbine=Porudzbina::create([
            'user_id'=>Auth::user()->id,
            'proizvod_id'=>$request->proizvod_id,
        ]);

        return response()->jsnon(['Uspesno!', new PorudzbinaResource($porudzbine)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Porudzbina  $porudzbina
     * @return \Illuminate\Http\Response
     */
    public function show($porudzbina_id)
    {
        $p=Porudzbina::find($porudzbina_id);
        return new PorudzbinaResource($p);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Porudzbina  $porudzbina
     * @return \Illuminate\Http\Response
     */
    public function edit(Porudzbina $porudzbina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Porudzbina  $porudzbina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Porudzbina $porudzbina)
    {
            $validator = Validator::make($request->all(),[
                'proizvod_id'=>'required',
            ]);
    
            if($validator->fails()){
                return response()->json($validator->errors());
            }
    
            $porudzbina->proizvod_id=$request->proizvod_id;
            $porudzbina->save();
    
            return response()->jsnon(['Uspesno!', new PorudzbinaResource($porudzbina)]);
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Porudzbina  $porudzbina
     * @return \Illuminate\Http\Response
     */
    public function destroy(Porudzbina $porudzbina)
    {
        $porudzbina->delete();
        return response()->json('Obrisana porudzbina');
    }
}
