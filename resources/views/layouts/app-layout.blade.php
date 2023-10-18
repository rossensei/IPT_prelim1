@extends('base');

@section('content')
    <div>
        <div class="h-100 w-100">
            <nav class="navbar navbar-expand-lg border-bottom">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/dashboard">
                    <img src="https://i.pinimg.com/550x/04/8a/ac/048aac8f549e923dbd25aa769032d339.jpg" alt="" style="width: 50px; margin: auto;">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/items">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/dashboard">Items</a>
                        </li>
                    </ul>
                    <div style="position: relative;">
                        <a class="nav-link dropdown-toggle fs-6" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            You are logged in as {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" style="left: 70px; top: 50px;">
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    {{ csrf_field() }}
                                    <button type="submit" class="text-start" style="background-color: white; border: none; width: 100%;">Logout</button>
                                </form>
                            </li>

                        </ul>
                    </div>

                    </div>
                </div>
            </nav>

            <div class="container">
                {{ $slot }}
            </div>
        </div>
    </div>
@endsection
