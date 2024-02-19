
@extends('layouts.app')

@section('content')


    <h1 class="font-bold text-3xl">{{$page->name}}</h1>

    <p class="pt-10 font-light">

        {!! $page->text !!}

    </p>


@endsection
