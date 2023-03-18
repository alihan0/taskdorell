@extends('master')
@section('title', 'Envanter')

@section('content')
    <div class="row">
        @foreach ($inventory as $item)
        <div class="col-lg-2 col-md-3 col-sm-12 m-4">
            <a href="#" class="bg-success p-4 m-4" title=" {!! json_decode($item->title)->tr !!}" data-bs-toggle="tooltip" data-bs-placement="top">
            <img width="150" src="/static/img/badges/{{$item->asset}}" alt="" srcset="">
           
            </a>
        </div>
        
        @endforeach
       
    </div>
@endsection