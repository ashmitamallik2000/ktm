@extends('layout.master')
@section('content')
<div class="container-fluid bg-light">
        <div class="container py-5">
            <h3 class="text-dark fw-bold ms-5">परिचय</h3>
            <a class="text-decoration-none text-dark ms-5 " href="index.html">गृहपृष्ठ</a><i
                class="fas fa-greater-than text-muted ms-2"></i><a
                class="text-decoration-none text-dark ms-2 link-primary" href="about.html">परिचय</a>
        </div>
    </div>
    @foreach($introductions as $introduction)
    <div class="container border rounded mt-4 mb-3">
        <p class="text-dark py-3">{{$introduction->description}}</p>
    </div>
    @endforeach
@endsection