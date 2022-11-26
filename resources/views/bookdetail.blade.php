@extends('layout/main')

@section('title', 'Giant Book Supplier')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10 bg-secondary text-white">
                <h5 class="mt-3">Book Detail</h5>
            </div>
            <div class="col-10">
                <img src="{{$book->image}}" class="card-img-top img-fluid" alt="...">
                <div class="h6">Title: {{$book->title}}</div>
                <div class="h6">Author: {{$book->author}}</div>
                <div class="h6">Publisher: {{$book->publisher->name}}</div>
                <div class="h6">Year: {{$book->year}}</div>
                <div class="h6">Sypnosis:</div>
                <div class="h6">{{$book->sypnosis}}</div>
            </div>
        </div>
    </div>
@endsection
