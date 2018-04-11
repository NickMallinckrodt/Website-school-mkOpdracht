<?php

namespace App\Http\Controllers;

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
        $websites = array(
            array("Klas"=>"APP16A1","Site"=>array(
                array('Name'=> "LVoort", "Image" => "https://www.newdeveloper.nl/misc/browserimg2/small/lvoort_s.png"),
                array('Name'=> "LVoort", "Image" => "https://www.newdeveloper.nl/misc/browserimg2/small/lvoort_s.png"),
                array('Name'=> "LVoort", "Image" => "https://www.newdeveloper.nl/misc/browserimg2/small/lvoort_s.png"),
                array('Name'=> "LVoort", "Image" => "https://www.newdeveloper.nl/misc/browserimg2/small/lvoort_s.png"),
                array('Name'=> "LVoort", "Image" => "https://www.newdeveloper.nl/misc/browserimg2/small/lvoort_s.png"),
                array('Name'=> "LVoort", "Image" => "https://www.newdeveloper.nl/misc/browserimg2/small/lvoort_s.png"))
            ),
            array("Klas"=>"APP16A2","Site"=>array(
                array('Name'=> "LVoort", "Image" => "https://www.newdeveloper.nl/misc/browserimg2/small/lvoort_s.png"),
                array('Name'=> "LVoort", "Image" => "https://www.newdeveloper.nl/misc/browserimg2/small/lvoort_s.png"),
                array('Name'=> "LVoort", "Image" => "https://www.newdeveloper.nl/misc/browserimg2/small/lvoort_s.png"),
                array('Name'=> "LVoort", "Image" => "https://www.newdeveloper.nl/misc/browserimg2/small/lvoort_s.png"),
                array('Name'=> "LVoort", "Image" => "https://www.newdeveloper.nl/misc/browserimg2/small/lvoort_s.png"),
                array('Name'=> "LVoort", "Image" => "https://www.newdeveloper.nl/misc/browserimg2/small/lvoort_s.png"),
                array('Name'=> "LVoort", "Image" => "https://www.newdeveloper.nl/misc/browserimg2/small/lvoort_s.png"),
                array('Name'=> "LVoort", "Image" => "https://www.newdeveloper.nl/misc/browserimg2/small/lvoort_s.png"),
                array('Name'=> "LVoort", "Image" => "https://www.newdeveloper.nl/misc/browserimg2/small/lvoort_s.png"),
                array('Name'=> "LVoort", "Image" => "https://www.newdeveloper.nl/misc/browserimg2/small/lvoort_s.png"),
                array('Name'=> "LVoort", "Image" => "https://www.newdeveloper.nl/misc/browserimg2/small/lvoort_s.png"),
                array('Name'=> "LVoort", "Image" => "https://www.newdeveloper.nl/misc/browserimg2/small/lvoort_s.png"))
            ),
            array("Klas"=>"APP17","Site"=>array(
                array('Name'=> "LVoort", "Image" => "https://www.newdeveloper.nl/misc/browserimg2/small/lvoort_s.png"),
                array('Name'=> "LVoort", "Image" => "https://www.newdeveloper.nl/misc/browserimg2/small/lvoort_s.png"),
                array('Name'=> "LVoort", "Image" => "https://www.newdeveloper.nl/misc/browserimg2/small/lvoort_s.png"),
                array('Name'=> "LVoort", "Image" => "https://www.newdeveloper.nl/misc/browserimg2/small/lvoort_s.png"),
                array('Name'=> "LVoort", "Image" => "https://www.newdeveloper.nl/misc/browserimg2/small/lvoort_s.png"),
                array('Name'=> "LVoort", "Image" => "https://www.newdeveloper.nl/misc/browserimg2/small/lvoort_s.png"),
                array('Name'=> "LVoort", "Image" => "https://www.newdeveloper.nl/misc/browserimg2/small/lvoort_s.png"),
                array('Name'=> "LVoort", "Image" => "https://www.newdeveloper.nl/misc/browserimg2/small/lvoort_s.png"),
                array('Name'=> "LVoort", "Image" => "https://www.newdeveloper.nl/misc/browserimg2/small/lvoort_s.png"))
            ),


        );

        return view('websitesstudenten', ['Websites'=>$websites]);
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
