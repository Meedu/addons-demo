@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{asset('/addons/AddonsDemo/assets/css/app.css')}}?v=20200723">
@endsection

@section('content')

    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <ul>
                    @foreach($blogs as $blog)
                        <li>{{$blog['title']}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@endsection