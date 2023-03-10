<header>
    <div class="bg-primary text-white fw-semibold d-flex justify-content-end">
        <div class="me-5">DC POWER&#x2120; VISA&#xae;</div>
        <div class="pe-5">ADDITIONAL DC SITES &#x25BE;</div>
    </div>
    <nav class="bg-white py-2">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <a href="{{ route("home") }}"><img class="img-fluid" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt=""></a>
                </div>
                <div class="nav-list">
                    <ul class="d-flex gap-4 fw-bold">
                        @foreach ($headerArray as $headerElement)
                            <li class="list-item"><a href="{{ route("news") }}" class="text-dark">{{ $headerElement }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <form class="d-flex" role="search">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    </form>
                </div>
            </div>
        </div>
    </nav>
</header>