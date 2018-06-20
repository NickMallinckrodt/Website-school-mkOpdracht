
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
                    Heb jij een idee voor een eigen evenement, een talent voor vormgeving of misschien duik jij graag de
                    code in? Dan is de Media academy voor jou. Hier kun je namelijk kiezen tussen de opleidingen Media manager,
                    Media vormgever en Applicatie ontwikkelaar. Vanaf de eerste dag van je opleiding werk je samen met je
                    mede studenten. Bij de Media academy ben je geen student maar een collega. In een leerwerkomgeving kun
                    je daarnaast al vast praktijkervaring opdoen met opdrachten voor echte opdrachtgevers, met echte deadlines
                    en budgetten. Zo willen wij je het vak leren, maar we willen je vooral inspireren en motiveren. Zo leg je
                    elke dag de lat wat hoger en ben je zelf de regisseur van je carrière.
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
                                 Media manager
                                <small>|</small>
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
                                 Media vormgever
                                <small>|</small>
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
                                 Applicatie ontwikkelaar
                                <small>|</small>
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
