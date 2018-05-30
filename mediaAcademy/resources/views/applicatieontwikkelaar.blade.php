@extends("template.template")


@section('title', 'Media Academy - Applicatie- & Mediaontwikkelaar')


@section('content')



<div class="container content ">
<br>

<div class="row">
  <div class="col">

      <h1 style="">Applicatie- & Mediaontwikkelaar</h1>
      <br>
  </div>

</div>
  <div class="row">



    <div class="col-md-3 offset-md-2" style="">
      <a href="https://www.landstedembo.nl/aanmelden/?opleiding=12871" target="_blanc"><button type="button" class="btn btn-danger" name="button" style="width: 200px; height: 55px">Aanmelden opleiding</button></a>
    </div>

    <div class="col-6 col-md-3" style="">
      <a href="https://www.landstedembo.nl/meelopen/?landschap=11900&opleiding=12871" target="_blanc"><button type="button" class="btn btn-danger" name="button" style="width: 200px; height: 55px">Dagje meelopen?</button></a>
    </div>

    <div class="col col-md-3" style="">
      <a href="https://www.landstedembo.nl/brochure-aanvragen/?landschap=11900&opleiding=12871" target="_blanc"><button type="button" class="btn btn-danger" name="button" style="width: 200px; height: 55px">Brochure aanvragen</button></a>
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
        <img src={{asset('img/applicatie.jpg')}} alt="Logo" class="media_img">
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
            <td>  3 jaar</td>
          </tr>
          <tr>
            <td>Niveau</td>
            <td>  4</td>
          </tr>
          <tr>
            <td>Plaats</td>
            <td>  Harderwijk, Zwolle, Raalte</td>
          </tr>

        </table>
    </div>
  </div>
<br>
  <div class="row">
    <div class="col">

        <h1 style="">Wil jij een app maken en bedenken?</h1>
        <br>
            {{--<h3>Beroep</h3>--}}
            {{--<p>Heb jij een smartphone of tablet? Dan weet je hoe enorm handig een app kan zijn. Tenminste: als deze goed werkt en gemakkelijk in het gebruik is.--}}
              {{--Zou jij voor klanten een app willen bedenken én maken? Met de opleiding Applicatie- & Mediaontwikkelaar leer je apps van begin tot eind te bouwen.--}}
              {{--En om updates te doen aan bestaande. Je laat apps samenwerken met bijvoorbeeld social media, met andere apparaten of software en je weet ze te koppelen--}}
              {{--aan bijvoorbeeld de webshopfunctie van een klant. Dat is vaak een behoorlijke technische uitdaging.</p>--}}

            {{--<p>Ook adviseer je over en werk je mee aan (mobiele) websites, frameworks, content management systemen (CMS) en geef je advies over de beveiliging ervan.--}}
              {{--De ontwikkelingen in web, mobile en e-commerce gaan snel. Dankzij jou groeien weboplossingen mee met deze trends.--}}
              {{--Na deze opleiding kun je aan de slag bij bijvoorbeeld een media- of internetbedrijf of op een IT-afdeling.--}}
              {{--Je doet een groot deel van het werk zelfstandig, maar je werkt ook vaak samen in teams met vormgevers en andere specialisten.--}}
              {{--Je bent vaak de vraagbaak voor marketing- en communicatiespecialisten en opdrachtgevers. Dat vraagt ook om sociale skills en kennis van andere richtingen.</p>--}}


            {{--<h3>Je sterke punten</h3>--}}
            {{--<p>Natuurlijk moet je goed met computers en software kunnen omgaan, maar je moet meer in huis hebben.--}}
              {{--Zo zijn klantgerichtheid en inlevingsvermogen erg belangrijk. Je moet je namelijk goed kunnen verplaatsen in je opdrachtgever en de eindgebruiker.--}}
              {{--Gedurende je opleiding ligt er een zwaar accent op het samenwerken. Uitgeverijen, communicatie- en reclamebureaus, internetondernemingen en drukkerijen zoeken tegenwoordig--}}
              {{--applicatieontwikkelaars die in hun eigen vakgebied een kei zijn, maar vooral volop kunnen ontwikkelen, uitwisselen en samenwerken met collega’s in verschillende disciplines.--}}
              {{--Verder ben je een echte doorzetter. Want hoewel je technisch bijna alles kan, kom je tijdens de uitvoering echt weleens problemen tegen die je niet één, twee, drie oplost.--}}
              {{--Tenslotte wordt ook van je verwacht dat je conceptueel kunt denken.</p>--}}

            {{--<h1>Opleidingsinformatie</h1>--}}
            {{--<br>--}}

            {{--<h3>Leren in de praktijk</h3>--}}
            {{--<p>Bij de Media Academy in Zwolle werk je samen met studenten applicatieontwikkelaars en mediamanagers aan opdrachten uit de praktijk die door opdrachtgevers uit--}}
              {{--het bedrijfsleven worden aangereikt. In Harderwijk geven we dit vorm onder de merknaam Link en in Raalte werken studenten samen binnen Praktijk Plaza.--}}
              {{--In onze leeromgevingen ben je geen student, maar werk je samen met collega’s uit andere opleidingen. Docenten zijn er altijd aanspreekbaar: hun deur staat letterlijk altijd open.--}}
              {{--Het is een inspirerende en motiverende leerwerkomgeving waar je praktijkervaring op doet met opdrachten voor echte klanten, met echte deadlines.--}}
              {{--Daarnaast verzorgen interessante gastdocenten uit het bedrijfsleven regelmatig workshops.</p>--}}

            {{--<h3>Toelating</h3>--}}

            {{--<h6>Vooropleidingseisen</h6>--}}
            {{--<ul>--}}
              {{--<li>Een vmbo-diploma kaderberoepsgerichte, gemengde, theoretische leerweg of een overgangsbewijs van HAVO 3-4.</li>--}}
              {{--<li>Heb je een andere vooropleiding (met diploma), dan bekijken we tijdens het plaatsingsgesprek onder welke voorwaarden je eventueel aan de opleiding kunt beginnen.--}}
                {{--Voorafgaand aan het plaatsingsgesprek stuur je een motivatiebrief.</li>--}}
            {{--</ul>--}}

                {{--<h6>Aantal beschikbare opleidingsplaatsen (numerus fixus)</h6>--}}
                  {{--<ul>--}}
                    {{--<li>Zwolle: 60</li>--}}
                    {{--<li>Harderwijk: 40</li>--}}
                    {{--<li>Werkwijze: plaatsing op volgorde van aanmelden.</li>--}}
                  {{--</ul>--}}

            {{--<h6>Verplichte intakeactiviteiten</h6>--}}
            {{--<ul>--}}
              {{--<li>Individueel plaatsingsgesprek</li>--}}
            {{--</ul>--}}

            {{--<h3>Studiekosten</h3>--}}
            {{--<p>Naast het lesgeld heb je kosten voor lesmateriaal en andere onderwijsactiviteiten.--}}
               {{--Deze kosten verschillen per leerjaar, maar liggen rond de € 220,-.--}}
               {{--Dit bedrag is exclusief eventuele leermiddelen zoals boeken, een laptop, gereedschappen en de studiekosten die zijn vastgesteld door het Ministerie van OCW.--}}
               {{--Voor meer informatie over studiekosten kun je bellen met de betreffende locatie:--}}
              {{--<br> <br>Harderwijk - 088-850 79 38--}}
               {{--<br>Zwolle - 088-850 84 00--}}
               {{--<br>Raalte - 088-850 82 00</p>--}}

            {{--<h3>Vervolgopleiding</h3>--}}
            {{--<h6>Een hbo-opleiding, zoals:</h6>--}}

            {{--<ul>--}}
              {{--<li>Bedrijfskunde Informatica</li>--}}
              {{--<li>Informatica</li>--}}
              {{--<li>Technische Informatica</li>--}}
              {{--<li>Informatiedienstverlening en -managment</li>--}}
              {{--<li>Multimedia Design</li>--}}
              {{--<li>Digitale Communicatie</li>--}}
            {{--</ul>--}}


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

                    <p>Heb jij een smartphone of tablet? Dan weet je hoe enorm handig een app kan zijn. Tenminste: als deze goed werkt en gemakkelijk in het gebruik is.
                        Zou jij voor klanten een app willen bedenken én maken? Met de opleiding Applicatie- & Mediaontwikkelaar leer je apps van begin tot eind te bouwen.
                        En om updates te doen aan bestaande. Je laat apps samenwerken met bijvoorbeeld social media, met andere apparaten of software en je weet ze te koppelen
                        aan bijvoorbeeld de webshopfunctie van een klant. Dat is vaak een behoorlijke technische uitdaging.</p>

                    <p>Ook adviseer je over en werk je mee aan (mobiele) websites, frameworks, content management systemen (CMS) en geef je advies over de beveiliging ervan.
                        De ontwikkelingen in web, mobile en e-commerce gaan snel. Dankzij jou groeien weboplossingen mee met deze trends.
                        Na deze opleiding kun je aan de slag bij bijvoorbeeld een media- of internetbedrijf of op een IT-afdeling.
                        Je doet een groot deel van het werk zelfstandig, maar je werkt ook vaak samen in teams met vormgevers en andere specialisten.
                        Je bent vaak de vraagbaak voor marketing- en communicatiespecialisten en opdrachtgevers. Dat vraagt ook om sociale skills en kennis van andere richtingen.</p>


                    <h3>Je sterke punten</h3>
                    <p>Natuurlijk moet je goed met computers en software kunnen omgaan, maar je moet meer in huis hebben.
                        Zo zijn klantgerichtheid en inlevingsvermogen erg belangrijk. Je moet je namelijk goed kunnen verplaatsen in je opdrachtgever en de eindgebruiker.
                        Gedurende je opleiding ligt er een zwaar accent op het samenwerken. Uitgeverijen, communicatie- en reclamebureaus, internetondernemingen en drukkerijen zoeken tegenwoordig
                        applicatieontwikkelaars die in hun eigen vakgebied een kei zijn, maar vooral volop kunnen ontwikkelen, uitwisselen en samenwerken met collega’s in verschillende disciplines.
                        Verder ben je een echte doorzetter. Want hoewel je technisch bijna alles kan, kom je tijdens de uitvoering echt weleens problemen tegen die je niet één, twee, drie oplost.
                        Tenslotte wordt ook van je verwacht dat je conceptueel kunt denken.</p>
                </div>
                <div class="tab-pane" id="2">
                    <h3>Leren in de praktijk</h3>
                    <p>Bij de Media Academy in Zwolle werk je samen met studenten applicatieontwikkelaars en mediamanagers aan opdrachten uit de praktijk die door opdrachtgevers uit
                        het bedrijfsleven worden aangereikt. In Harderwijk geven we dit vorm onder de merknaam Link en in Raalte werken studenten samen binnen Praktijk Plaza.
                        In onze leeromgevingen ben je geen student, maar werk je samen met collega’s uit andere opleidingen. Docenten zijn er altijd aanspreekbaar: hun deur staat letterlijk altijd open.
                        Het is een inspirerende en motiverende leerwerkomgeving waar je praktijkervaring op doet met opdrachten voor echte klanten, met echte deadlines.
                        Daarnaast verzorgen interessante gastdocenten uit het bedrijfsleven regelmatig workshops.</p>

                    <h3>Toelating</h3>

                    <h6>Vooropleidingseisen</h6>
                    <ul>
                        <li>Een vmbo-diploma kaderberoepsgerichte, gemengde, theoretische leerweg of een overgangsbewijs van HAVO 3-4.</li>
                        <li>Heb je een andere vooropleiding (met diploma), dan bekijken we tijdens het plaatsingsgesprek onder welke voorwaarden je eventueel aan de opleiding kunt beginnen.
                            Voorafgaand aan het plaatsingsgesprek stuur je een motivatiebrief.</li>
                    </ul>

                    <h6>Aantal beschikbare opleidingsplaatsen (numerus fixus)</h6>
                    <ul>
                        <li>Zwolle: 60</li>
                        <li>Harderwijk: 40</li>
                        <li>Werkwijze: plaatsing op volgorde van aanmelden.</li>
                    </ul>

                    <h6>Verplichte intakeactiviteiten</h6>
                    <ul>
                        <li>Individueel plaatsingsgesprek</li>
                    </ul>

                    <h3>Studiekosten</h3>
                    <p>Naast het lesgeld heb je kosten voor lesmateriaal en andere onderwijsactiviteiten.
                        Deze kosten verschillen per leerjaar, maar liggen rond de € 220,-.
                        Dit bedrag is exclusief eventuele leermiddelen zoals boeken, een laptop, gereedschappen en de studiekosten die zijn vastgesteld door het Ministerie van OCW.
                        Voor meer informatie over studiekosten kun je bellen met de betreffende locatie:
                        <br> <br>Harderwijk - 088-850 79 38
                        <br>Zwolle - 088-850 84 00
                        <br>Raalte - 088-850 82 00</p>

                    <h3>Vervolgopleiding</h3>
                    <h6>Een hbo-opleiding, zoals:</h6>

                    <ul>
                        <li>Bedrijfskunde Informatica</li>
                        <li>Informatica</li>
                        <li>Technische Informatica</li>
                        <li>Informatiedienstverlening en -managment</li>
                        <li>Multimedia Design</li>
                        <li>Digitale Communicatie</li>
                    </ul>
                </div>

            </div>
        </div>

    </div>






</div>


@endsection
