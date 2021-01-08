@extends('front.layouts.master')

@section('content')

    <main>
        <article class="
            markup markup-lists markup-links
            mt-12 mx-auto px-6 sm:px-12 md:px-16
            max-w-4xl"
            >
            <h1>@yield('title')</h1>
            @yield('article')
        </article>

    </main>


@endsection
