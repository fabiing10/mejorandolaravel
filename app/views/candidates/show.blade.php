@extends('layout')

@section('content')

<div class="container">
    <h1>{{ $candidate->user->full_name }}</h1>

    <p>
        Categoria:
        <a href="{{ route('category',[$candidate->category->slug, $candidate->category->id]) }}">
            {{ $candidate->category->name }}
        </a>
    </p>

    <p>tipo de trabajo: {{ $candidate->job_type }}</p>

    <p>
        Website:
        <a href="{{ $candidate->website_url }}">
            {{ $candidate->website_url }}
        </a>
    </p>

    <p>
        Descripcion: {{ $candidate->description }}
    </p>
</div>
@stop