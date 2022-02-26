@extends('layouts.layout')

@section('content')

    <div class="container">
        <section id="blog">
            {{-- <h2>
        Blog
      </h2>
      <br /><br /> --}}
            @foreach ($portfolio as $item)

                <h3>
                    {{ $item->title }}
                </h3>
                <small class="text-muted"><i>{{ $item->kategori }}</i></small>
                <p class="mt-3">
                    {{ $item->description }}
                </p>
                <a href="{{ $item->link }}">Lihat Selengkapnya</a> <br>
            @endforeach
        </section>
    </div>

@endsection
