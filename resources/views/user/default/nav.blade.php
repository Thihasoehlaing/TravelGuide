<nav id="travelnavbar" class="navbar fixed-top navbar-light" style="background-color: #e6e6e6;">
    <a class="navbar-brand" href="{{ route('home') }}">
        <em class="applogo">Travel Guide</em>
    </a>

    <ul class="nav nav-pills justify-content-end">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" id="navbarDropdown" aria-haspopup="true" aria-expanded="false">Divisions</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('yangon') }}">Yangon</a>
                <a class="dropdown-item" href="#delivery">Mandalay</a>
                <a class="dropdown-item" href="#delivery">Bago</a>
                <a class="dropdown-item" href="#allservices">Sagaing</a>
                <a class="dropdown-item" href="#delivery">Magway</a>
                <a class="dropdown-item" href="#delivery">Tanintharyi</a>
                <a class="dropdown-item" href="#delivery">Ayeyarwady</a>
                <a class="dropdown-item" href="#delivery">Kachin</a>
                <a class="dropdown-item" href="#delivery">Kayar</a>
                <a class="dropdown-item" href="#delivery">Kayin</a>
                <a class="dropdown-item" href="#delivery">Chin</a>
                <a class="dropdown-item" href="#delivery">Mon</a>
                <a class="dropdown-item" href="#delivery">Rachine</a>
                <a class="dropdown-item" href="#delivery">Shan</a>
            </div>
        </li>
        <li class="navbar-item active">
            <a class="nav-link" href="#about">About Us</a>
        </li>
        <li class="navbar-item active">
            <a class="nav-link" href="#contact">Contact Us</a>
        </li>
    </ul>
</nav>