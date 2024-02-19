
@extends('layouts.app')

@section('content')


    <h1 class="font-bold text-3xl">{{$category->name}}</h1>


    <div class="pt-10 grid grid-cols-4 gap-4">
        @foreach($category->products as $p)
            <div class=" text-center">


                @if (!empty($p->getFirstMediaUrl(\App\Models\Product::MEDIA_IMAGES)))
                    <img src="{{ $p->getFirstMediaUrl(\App\Models\Product::MEDIA_IMAGES) }}" alt="" class="w-full">
                @else
                    {{-- <div alt="" class="h-[100px] w-[100px] bg-gray-100 rounded-xl float-right inline-block"></div> --}}
                @endif
                    <div class="pt-3 font-bold text-large text-lg">{{ $p->name }}</div>

                    &euro;{{ $p->price }}
            </div>
        @endforeach
    </div>


@endsection
