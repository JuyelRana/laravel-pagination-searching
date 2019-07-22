@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @foreach($posts as $post)
                            <h2>{{$post->title}}</h2>
                            <div>
                                {!! $post->description !!}}
                            </div>
                        @endforeach
                    </div>
{{--                    <div class="d-flex justify-content-center">{{$posts->links()}}</div>--}}
                </div>
            </div>
        </div>
    </div>
@endsection
