<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">OLIMPIADE</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-lg-0 mb-2">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('peserta.index') }}">Peserta</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('nilai.index') }}" class="nav-link" aria-current="page" href="">Nilai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('rangking') }}">Rangking</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
