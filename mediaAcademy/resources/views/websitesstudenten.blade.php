@extends('template.template')

@section('title', 'Media Academy - Opleidingen')

@section('content')

    <div class="container content">

        <div class="row">

            <div class="container">
            @foreach ($Websites as $website)
                <div class="row">
                    <div class="col-12">
                        <h2>
                            {{$website['Klas']}}
                        </h2>
                    </div>
                </div>

                    <div class="row justify-content-center">
                        @foreach($website['Site'] as $site)
                            <a href="{{$site["userlink"]}}" target="_blank" class="col-2">
                                <img src="{{$site['userImgUrl']}}" class="website-student">
                                <center>{{$site['username']}}</center>
                            </a>
                        @endforeach
                    </div>

            @endforeach
        </div></div>
    </div>
@endsection