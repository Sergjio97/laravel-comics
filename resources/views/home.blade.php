@extends('layouts.base')

@section('pageTitle')
    Home    
@endsection

@section('pageContent')
    <main>
        <div class="cards_box">
            @foreach ($comics as $comic)
                <div class="card">
                    <img src="{{$comic['thumb']}}" alt="hero">
                    <h3>{{$comic['title']}}</h3>
                </div> 
            @endforeach
        </div>
    </main>
@endsection