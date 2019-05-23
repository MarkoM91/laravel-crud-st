<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SmartphoneRequest;
use App\Smartphone;

class SmartphoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $smartphones = Smartphone::all();
        return view('page.smartphone', compact("smartphones"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.smartphone-new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(SmartphoneRequest $request)
     {
        //$newSt = $request->all();
        //dd($newSt);

        $valideData = $request->validated();

        $smartphone = Smartphone::create($valideData);
        return redirect('str')
               ->with('success', 'New Smartphone:' . $smartphone->id);;

         //$valideData = $request->validate();

         //$smartphone = Smartphone::create($valideData);
         //return redirect('str');
              //   ->with('success', 'New Smartphone:' . $smartphone->id);
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $smartphone = Smartphone::findOrFail($id);
      return view('page.edit-smartphone', compact('smartphone'));
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
      $valideData = $request->validate([
        "brand" => "required",
        "model" => "required",
        "display" => "required|alpha_num",
        "mem_ext" => "required|alpha_num"
      ]);

      Smartphone::whereId($id)->update($valideData);
      return redirect('str');
  }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
       $smartphone = smartphone::findOrFail($id);
       $smartphone->delete();

       return redirect('str');
     }
}
