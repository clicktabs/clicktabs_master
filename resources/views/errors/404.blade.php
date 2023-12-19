@extends('layouts.app')

@section('content')

    <main>
        <div class="vs jj ttm vl ou uf na">

            <div class="ua nt rl">

                <div class="gn vs">
                    <div class="inline-flex rc">
                        <img src="{{ asset('assets/images/404-illustration.svg') }}"
                             width="176" height="176" alt="404 illustration">
                    </div>
                    <div class="rh">Hmm...this page doesn’t exist. Try searching for something else!</div>
                    <a href="{{ route('dashboard') }}" class="btn ho xi ye">Back To Dashboard</a>
                </div>

            </div>

        </div>
    </main>

@endsection
