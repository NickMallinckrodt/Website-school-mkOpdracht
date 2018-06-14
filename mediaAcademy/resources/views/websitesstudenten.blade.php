@extends('template.template')

@section('title', 'Media Academy - Opleidingen')

@section('content')

    <div class="container content">

        <div class="row">


            @foreach ($Websites as $website)
                <div class="row">
                    <div class="col-12">
                        <h2>
                            {{$website['Klas']}}
                        </h2>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        @foreach($website['Site'] as $site)
                            <a href="https://www.google.com" target="_blank" class="col-3">
                                <img src="{{$site['userImgUrl']}}" class="website-student">
                                <center>{{$site['username']}}</center>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection