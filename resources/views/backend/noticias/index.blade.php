@extends('backend.layouts.main')
@section('title',__('noticias.index'))
@section('content')
@forelse ($noticias as $noticia)
@if ($loop->iteration % 2 != 0)
    <div class="row">@endif
        <div class="col-md-6">
            <div class="card">
                {{-- @if ($noticia->imagen)
                @if (Str::startsWith($noticia->imagen, 'http'))
                <img scr="{{ $noticia->imagen }}" class="card-img-top" alt="...">
                @else
                <img src="{{ asset($noticia->imagen) }}" class="card-img-top" alt="...">
                @endif
                @else --}}
                <img src="https://i.imgur.com/6S1nxee.gif" class="card-img-top" alt="no image"><hr>
                {{-- @endif --}}
                <div class="card-body">
                    <p class="card-text text-right">
                    <h3 class="card-title text-info">{{ $noticia->titulo }}</h3>
                    <p class="card-text text-left">{{ $noticia->autor }}</p>
                    <p class="card-text">{!! $noticia->cuerpo !!}</p>
                    {{-- Esto es un comentario en Blade--}}
                    <div class="card-footer">
                        <div class="row">
                            <a href="{{ route('noticias.show', ['noticia' => $noticia->id]) }}" class="btn btn-secondary">
                                <i class="bi bi-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@if ($loop->iteration % 2 == 0)
</div><hr>
@endif
@empty
<p class="text-capitalize">No hay noticias</p>
@endforelse
</div><hr>
@endsection
