<div class="container-fluid">
  <nav class="navbar navbar-fixed-top navbar-dark bg-primary">

    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
      &#9776;
    </button>
    <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
      <a class="navbar-brand" href="#">ABM</a>
      <ul class="nav navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/">Úvod <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://members.eob.cz/abm/" target="_blank">Člesnká sekce</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          Klub
          </a>
          <div class="dropdown-menu">
          <a class="dropdown-item" href="{{ url('stranka/o-klubu')}}">O klubu</a>
          <a class="dropdown-item" href="#">Naše mapy</a>
          <a class="dropdown-item" href="#">Starší závody</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          Akce
          </a>
          <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Závody</a>
          <a class="dropdown-item" href="#">Oddílový přebor</a>
          <a class="dropdown-item" href="#">Soustředění</a>
          <a class="dropdown-item" href="#">Tábor</a>
          </div>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="{{ url('login')}}">Přihlásit se</a>
        </li>
      </ul>
    </div>
  </nav>
</div>
