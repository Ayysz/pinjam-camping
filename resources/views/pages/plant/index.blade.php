@extends('layouts.app')
@section('title', "List data tanaman")

@section('content')

    <div class="album py-5 bg-body-tertiary" id="content">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($list as $item)
                    <div class="col">
                        @include('components.card', [
                            "id" => $item->id,
                            "title" => $item->name,
                            "text" => $item->description,
                            "species" => $item->species,
                            "image" => asset("images/$item->image"),
                            "price" => $item->price,
                            "sunlight_requirement" => $item->sunlight_requirement,
                        ])
                    </div>
                @endforeach

                {{ $list->links() }}

            </div>
        </div>
    </div>

@endsection
