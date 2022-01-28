@extends('layouts.layout')

@section('content')

    <div class="container">
        <section id="blog">
            {{-- <h2>
        Blog
      </h2>
      <br /><br /> --}}

            @foreach ($blog as $item)
                <h3>
                    {{ $item->title }}
                </h3>
                <p>
                  {{ $item->deskripsi }}
                </p>
                <a href="{{ $item->link }}" target="blank">Lihat Selengkapnya</a>
                <br><br>
            @endforeach
        </section>
    </div>

@endsection
