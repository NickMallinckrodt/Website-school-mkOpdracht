<?php

namespace App\Http\Controllers;

use App\Classes;
use App\StudentWebsite;
use Illuminate\Http\Request;

class websitesStudenten extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = Classes::orderByRaw("class", "DESC")->get();// haal de klas namen op

        $website=[];// maak een nieuwe array aan

        foreach ($classes as $class){
            $temp = [];// maak een nieuwe array aan
            $new = StudentWebsite::where('class', $class->class)->orderByRaw("username DESC")->get();// haal de websites van studenten op aan de hand van klasnaam en sorteer op usersname

            foreach ($new as $students){
                $temp[] =  array('username'=> $students->username, "userImgUrl" => $students->userImgUrl, "userlink" => $students->userlink); // voeg studenten sites toe aan temp array
            }

            $website[] = array("Klas"=>$class->class, "Site"=>$temp);// voeg klas en temp toe aan website array
        }


        return view('websitesstudenten', ['Websites'=>$website]);

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
