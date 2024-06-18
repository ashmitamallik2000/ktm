@extends('admin.layouts.masters')
@section('content')
<div class="d-flex  justify-content-between bd-highlight">
    <div class="p-2 bd-highlight">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"> <a href="{{route('admin.dashboard')}}">
                        Home</a></li>
            </ol>
        </nav>
    </div>
    <div class="p-2 ms-5  bd-highlight">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb me-3">
                <li class="breadcrumb-item"> <a href="{{route('admin.dashboard')}}">
                        Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{route('admin.feedback.index')}}">FeedBack
                    </a></li>
            </ol>
        </nav>
    </div>
</div>
<div class="card bg-light ">
    <div class="container my-3 ">
        <div class="row">
            <div class="col-md-2">
                <p>Full-name</p>
                <p>Phone</p>
                <p>Email</p>
                <p>Objectives</p>
                <p>Messages</p>
            </div>
            <div class="col-md-9">
                <p>{{$feedback->full_name}}</p>
                <p>{{$feedback->phone}}</p>
                <p>{{$feedback->email}}</p>
                <p>{{$feedback->objectives}}</p>
                <p>{{$feedback->message}}</p>
            </div>
        </div>
    </div>
</div>
@endsection