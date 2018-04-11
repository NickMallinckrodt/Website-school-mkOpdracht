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
                <a class="nav-link" href=" {{ route('opleidingen') }}">Opleidingen</a>
            </li>

            <li class="nav-item active">
                <a class="nav-link " href="{{ route('docenten')}}">Docenten</a>
            </li>

            <li class="nav-item active">
                <a class="nav-link " href="#">Websites studenten</a>
            </li>
        </ul>
    </div>

</nav>
