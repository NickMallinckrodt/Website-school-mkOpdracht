@extends("template.template")


@section('title', 'Media Academy - Mediavormgever')


@section('content')
<div class="container content ">
<br>

<div class="row">
  <div class="col">

      <h1 style="">Mediavormgever</h1>
      <br>
  </div>

</div>
  <div class="row">



    <div class="col-md-3 offset-md-2" style="">
      <a href="https://www.landstedembo.nl/aanmelden/?opleiding=12952" target="_blanc"><button type="button" class="btn btn-danger" name="button" style="width: 200px; height: 55px">Aanmelden opleiding</button></a>
    </div>

    <div class="col-6 col-md-3" style="">
      <a href="https://www.landstedembo.nl/meelopen/?landschap=11884&opleiding=12952" target="_blanc"><button type="button" class="btn btn-danger" name="button" style="width: 200px; height: 55px">Dagje meelopen?</button></a>
    </div>

    <div class="col col-md-3" style="">
      <a href="https://www.landstedembo.nl/brochure-aanvragen/?landschap=11884&opleiding=12952" target="_blanc"><button type="button" class="btn btn-danger" name="button" style="width: 200px; height: 55px">Brochure aanvragen</button></a>
    </div>

  </div>
  <hr>
  <div class="row">
    <div class="col">
      <br>
    </div>
  </div>
<!-- 2e rij -->
  <div class="row">
    <div class="col-md-5 ">
        <img src={{asset('img/mediavormgever.jpg')}} alt="Logo" class="media_img">
    </div>

    <div class="col-md-4 offset-md-2">

        <h5>Algemene Informatie</h5>


          <table class="style_table" cellpadding="10">

          <tr>
            <td>Leerweg</td>
            <td>  BOL</td>
          </tr>
          <tr>
            <td>Duur</td>
            <td>  4 jaar</td>
          </tr>
          <tr>
            <td>Niveau</td>
            <td>  4</td>
          </tr>
          <tr>
            <td>Plaats</td>
            <td>  Harderwijk, Zwolle</td>
          </tr>

        </table>
    </div>
  </div>
<br>
  <div class="row">
    <div class="col">

      <div id="exTab2" class="container">
          <ul class="nav nav-tabs">
              <li class="active">
                  <a  href="#1" data-toggle="tab"><h3>Beroep &nbsp;</h3></a>
              </li>
              <li><a href="#2" data-toggle="tab"><h3>Opleidingsinformatie</h3></a>
              </li>

          </ul>

          <div class="tab-content ">
              <div class="tab-pane active" id="1">

        <br>

            <p>Veel organisaties en bedrijven huren creatieve professionals in om hun naamsbekendheid te vergoten, hun imago te verbeteren of meer producten te verkopen.
              Als mediavormgever doe je dit bijvoorbeeld met opvallende advertenties en brochures.
              Daarnaast maak je digitale middelen, zoals websites, social media, apps, en (serious) games.
              Met verschillende programma’s uit het softwarepakket van Adobe en vooral met veel creativiteit maak en bewerk je tekeningen, foto’s en ontwerpen voor bijvoorbeeld websites.
              Je werkt met zowel Apple computers als met Microsoft systemen.</p>

            <p>Je werkt vaak samen met specialisten waaronder applicatie- en mediaontwikkelaars.
              Als je meer ervaring hebt, zul je ook steeds vaker aan tafel zitten bij opdrachtgevers. Dat vraagt dus ook om de nodige sociale vaardigheden en kennis van bepaalde disciplines.
              Grote kans dat je later als zelfstandig ondernemer (freelancer) aan de slag gaat. Ook daar word je tijdens deze opleiding op voorbereid.</p>


            <h3>Leren in de praktijk</h3>
            <p>Bij de Media Academy in Zwolle werk je samen met studenten applicatieontwikkelaars en mediamanagers aan opdrachten uit de praktijk die door opdrachtgevers uit het
              bedrijfsleven worden aangereikt. In Harderwijk vindt dit plaats in het Stageleerwerkbedrijf,
              In beide leeromgevingen ben je geen student, maar werk je samen met collega’s uit andere opleidingen.
              Docenten zijn er altijd aanspreekbaar: hun deur staat letterlijk altijd open. Het is een inspirerende en motiverende leerwerkomgeving waar je
              praktijkervaring op doet met opdrachten voor echt klanten, met echte deadlines en budgetten. Daarnaast verzorgen interessante gastdocenten uit
              het bedrijfsleven regelmatig workshops.</p>

            <h3>Je sterke punten</h3>
            <p>Dit vak vraagt om creatieve mensen met gevoel voor vormgeving en interesse in nieuwe media.
              Vaak werk je met een computer, en dus moet je ook je technische talenten ontwikkelen.
              Je kunt zelfstandig werken, je kunt tegen tijdsdruk en je krijgt anderen enthousiast voor jouw product.</p>
</div>
            <div class="tab-pane" id="2">

            <br>

            <h3>Volop ruimte voor je eigen ideeën</h3>
            <p>Heb je zelf ideeën voor een evenement, theaterproductie, website of ander project?
              Dan staan we daar natuurlijk ook voor open! We helpen je graag op weg bij het uitvoeren van je ideeën.
              Bij ons krijg je alle ruimte om te laten zien wie je bent. Bovendien ontdek je zo het beste waar jouw kracht ligt.
              Met de juiste kennis en tips helpen wij je nóg beter te worden.</p>

            <h3>Veel praktijk</h3>
            <p>In het Landschap Vormgeving & Entertainment mag je veel oefenen en ervaren. Soms doe je dat met schoolopdrachten.
              Maar je gaat ook regelmatig aan de slag met opdrachten van echte klanten.
              Op die manier leer je met opdrachtgevers om te gaan en leer je hoe belangrijk het is om rekening te houden met bijvoorbeeld deadlines, budgetten en promotie.</p>

            <h3>Toelating</h3>

            <h6>Vooropleidingseisen</h6>
            <ul>
              <li>Diploma Allround DTP’er (niveau 3)</li>
              <li>Een vmbo-diploma gemengde leerweg (gl) of theoretische leerweg (tl).</li>
              <li>Heb je een andere vooropleiding (met diploma), dan bekijken we tijdens het plaatsingsgesprek onder welke voorwaarden je eventueel aan de opleiding kunt beginnen.</li>
            </ul>

                <h6>Aanvullende toelatingseisen</h6>
                <ul>
                  <li>Creative en artistieke aanleg</li>
                </ul>


            <h6>Verplichte intakeactiviteiten</h6>
            <ul>
              <li>Individueel plaatsingsgesprek</li>
              <li>Portfolio</li>
              <li>Thuisopdracht</li>
              <li>Meeloop/intakedag</li>
            </ul>

            <h3>Studiekosten</h3>
            <p>Naast het lesgeld heb je kosten voor lesmateriaal en betaal je een bijdrage voor voorzieningen en activiteiten zoals:
              excursies, lesmateriaal en verwerkingsmateriaal voor producten die je maakt.</p>

            <p>Het gaat om opleidingsgebonden kosten, bijvoorbeeld boeken: € 210,- (1e jaar), € 33,- (2e jaar), € 33,- (3e jaar) en € 0,- (4e jaar).
              Daarnaast zijn er optionele kosten, denk aan kosten voor zaken die je zelf moet aanschaffen en kosten voor excursies:
              € 850,- (1e jaar), € 135,- (2e jaar), € 135,- (3e jaar) en € 135,- (4e jaar).</p>

            <p>De genoemde kosten zijn een indicatie, meer informatie over studiekosten voor de opleidingen in Harderwijk kun je bellen met 088-850 78 00.
              Voor de opleiding in Zwolle bel je naar 088-850 84 00.</p>

            <h3>Vervolgopleiding</h3>
            <h6>Een hbo-opleiding, zoals:</h6>

            <ul>
              <li>Communicatie en Multimedia Design</li>
              <li>Media & Enterainment</li>
              <li>Kunstacademie</li>
              <li>Lerarenopleiding</li>
            </ul>

    </div>
</div>
</div>
</div>

</div>

@endsection
