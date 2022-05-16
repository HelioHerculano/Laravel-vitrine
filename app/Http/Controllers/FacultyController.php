<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;
use App\Models\User;
class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $facul = Faculty::all();
        return $facul->toJson();
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

        $faculdade = new Faculty();

         $faculdade->sigla = $request->input('siglaFaculdade');
         $faculdade->name = $request->input('nomeFaculdade');
         $faculdade->contact = $request->input('contactoFaculdade');
         $faculdade->email = $request->input('emailFaculdade');
         $faculdade->location = $request->input('localFaculdade');
         $faculdade->description = $request->input('descricaoFaculdade');
             
            
             
          $faculdade->save();

          return json_encode($faculdade);  
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     

        $faculdade = Faculty::find($id);


        if(isset($faculdade)){
            return json_encode($faculdade);
        }
        return response("Faculdade nao encontrada",404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $faculdade = Faculty::find($id);

        if(isset($faculdade)){
         $faculdade->sigla = $request->input('siglaFaculdade');
         $faculdade->name = $request->input('nomeFaculdade');
         $faculdade->contact = $request->input('contactoFaculdade');
         $faculdade->email = $request->input('emailFaculdade');
         $faculdade->location = $request->input('localFaculdade');
         $faculdade->description = $request->input('descricaoFaculdade');
             
            
             
          $faculdade->save();

          return json_encode($faculdade);
      }

      return response($id,404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $faculdade = Faculty::find($id);

        if(isset($faculdade)){
            $faculdade->delete();
            return response("OK",200);
        }
        return response("Faculdade nao encontrado",404);
    }
}
