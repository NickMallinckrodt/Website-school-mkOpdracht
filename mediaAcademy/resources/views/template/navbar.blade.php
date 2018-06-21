<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <a class="navbar-brand" href="{{ route('index')}}">
        <img src="https://c.disquscdn.com/uploads/forums/330/7083/favicon.png" alt="logo"/>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav row">
            <li class="nav-item active">
                <a class="nav-link" href=" {{ route('docenten') }}">Docenten</a>
            </li>

            <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Opleidingen
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('applicatie')}}">Applicatie- & Mediaontwikkelaar</a>
          <a class="dropdown-item" href="{{ route('mediamanager')}}">Mediamanager</a>
          <a class="dropdown-item" href="{{ route('mediavormgever')}}">Mediavormgever</a>
        </div>
      </li>

            <li class="nav-item active">
                <a class="nav-link " href="{{ route('studenten-websites') }}">Websites studenten</a>
            </li>

            <li class="nav-item active">
                <a class="nav-link " href="{{ route('contact') }}">contact</a>
            </li>
        </ul>
    </div>

</nav>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
