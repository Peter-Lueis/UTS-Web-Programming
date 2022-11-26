@extends('layout/main', ['categories' => $categories])

@section('title', 'Giant Book Supplier')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 bg-secondary text-white">
                <h5 class="mt-3">{{$category->name}}</h5>
            </div>
            @if( isset($books) && count($books) >= 1)
            @foreach ($books as $book)
                <div class="card" style="width: 18rem;">
                    <img src="{{$book->image}}" class="card-img-top h-75 img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$book->title}}</h5>
                        <div class="h6">by</div>
                        <div class="h5">{{$book->author}}</div>
                        <a href="/book-detail/{{$book->id}}" type="button" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            @endforeach
            @else
            <div>Books database is empty</div>
            @endif
        </div>
    </div>
@endsection
