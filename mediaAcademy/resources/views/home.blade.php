
@extends("template.template")

@section('title','Media Academy - Home')

@section('content')


  <div class="container">
      <div class="row bg-white">

        <div class="col-2">

        </div>

        <div class="col-12 col-md-offset-3 content">
              <br>
            <h1 class="header">Media Academy</h1>
            <hr>
                <p>

                </p>
                  <br>
                <hr>
        </div>


      </div>
  </div>

  <div class="tile_container">

    <div class="row bg-white">
        <div class="col-md-6 col-sm-8">
            <a href="{{route('mediamanager')}}">
                <div class="tile_image-container">
                    <img src={{asset('img/mediamanager.jpg')}} alt="Opleiding" class="home_img">

                    <div class="media_label">
                        <div class="media_tile">
                            <span class="media_tile_content">
                                 BOL
                                <small>|</small>
                                 Niveau 4
                                <small>|</small>
                            </span>
                        </div>
                    </div>

                     <div class="media_tile_bar"></div>
                </div>
            </a>
        </div>

        <div class="col-md-6 col-sm-8">
            <a href="{{route('mediavormgever')}}">
                <div class="tile_image-container">
                    <img src={{asset('img/mediavormgever.jpg')}} alt="Opleiding" class="home_img">

                    <div class="media_label">
                        <div class="media_tile">
                            <span class="media_tile_content">
                                 BOL
                                <small>|</small>
                                 Niveau 4
                                <small>|</small>
                            </span>
                        </div>
                    </div>

                    <div class="media_tile_bar"></div>
                </div>
            </a>
        </div>

        <div class="col-md-6 col-sm-8">
            <a href="{{route('applicatie')}}">
                <div class="tile_image-container">
                    <img src={{asset('img/applicatie.jpg')}} alt="Opleiding" class="home_img">

                    <div class="media_label">
                        <div class="media_tile">
                            <span class="media_tile_content">
                                 BOL
                                <small>|</small>
                                 Niveau 4
                                <small>|</small>
                            </span>
                        </div>
                    </div>

                    <div class="media_tile_bar"></div>
                </div>
            </a>
        </div>

    </div>
  </div>


@endsection
