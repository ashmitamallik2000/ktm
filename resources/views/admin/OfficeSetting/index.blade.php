@extends('admin.layouts.masters')
@section('content')
<div class="d-flex justify-content-between bd-highlight">
    <div class="p-2 bd-highlight">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.dashboard') }}">Home</a>
                </li>
            </ol>
        </nav>
    </div>
    <div class="p-2 ms-5 bd-highlight">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb me-3">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.officeSetting.index') }}">Office Setting</a></li>
            </ol>
        </nav>
    </div>
</div>
<div class="card bd-highlight">
    <div class="d-flex justify-content-between">
        <div>
            <h4 class="py-3 ms-4">Office Setting</h4>
        </div>
    </div>
</div>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="container">
    <form action="{{ route('admin.officeSetting.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="fs-4 mb-2 fw-bold">Office Name</label>
                <input type="text" name="office_name" class="form-control border border-2" value="{{ old('office_name', $officeSetting?->office_name) }}">
            </div>
            <div class="col-md-6 mb-3">
                <label class="fs-4 mb-2 fw-bold">Office Name-en</label>
                <input type="text" name="office_name_en" class="form-control border border-2" value="{{ old('office_name_en', $officeSetting?->office_name_en) }}">
            </div>
            <div class="col-md-6 mb-3">
                <label class="fs-4 mb-2 fw-bold">Email</label>
                <input type="email" name="email" class="form-control border border-2" value="{{ old('email', $officeSetting?->email) }}">
            </div>
            <div class="col-md-6 mb-3">
                <label class="fs-4 mb-2 fw-bold">Phone</label>
                <input type="text" name="phone" class="form-control border border-2" value="{{ old('phone', $officeSetting?->phone) }}">
            </div>
            <div class="col-md-4 mb-3">
                <label class="fs-4 mb-2 fw-bold">Office head</label>
                <select id="office_head_id" name="office_head_id" class="bg-white border border-2 fs-9" style="height:38px; width:18rem; border-radius:8px;">

                    <option value="">Choose ------------</option>
                    @foreach ($employees as $employee)
                    <option value="{{ $employee->id }}" {{ $employee->id == old('office_head_id', $officeSetting?->office_head_id) ? 'selected' : '' }}>
                        {{ $employee->name }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4 mb-3">
                <label class="fs-4 mb-2 fw-bold">Information officer</label>
                <select id="information_officer_id" name="information_officer_id" class="bg-white border border-2 fs-9" style="height:38px; width:18rem; border-radius:8px;">
                    <option value="">---------Choose ------------</option>
                    @foreach ($employees as $employee)
                    <option value="{{ $employee->id }}" {{ $employee->id == old('information_officer_id', $officeSetting?->information_officer_id) ? 'selected' : '' }}>
                        {{ $employee->name }}
                    </option>
                    @endforeach
                </select>
            </div>


            <div class="col-md-4 mb-3">
                <label class="fs-4 mb-2 fw-bold">Spoke person</label>
                <select id="spoke_person_id" name="spoke_person_id" class="bg-white border border-2 fs-9" style="height:38px;  border-radius:8px; width:19rem; ">
                    <option value="">Choose ------------</option>
                    @foreach ($employees as $employee)
                    <option value="{{ $employee->id }}" {{ $employee->id == old('spoke_person_id', $officeSetting?->spoke_person_id) ? 'selected' : '' }}>
                        {{ $employee->name }}
                    </option>
                    @endforeach
                </select>
            </div>


            <div class="container ">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="fs-4 mb-2 fw-bold">Logo</label>
                        <img src="{{$officeSetting?->logo}}" width="80" height="100">

                        <input type="file" name="logo" class="form-control border border-2">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="fs-4 mb-2 fw-bold">Flag</label>
                        <img src="{{$officeSetting?->flag}}" width="80" height="100">

                        <input type="file" name="flag" class="form-control border border-2">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="fs-4 mb-2 fw-bold">Background Image</label>
                        <img src="{{$officeSetting?->background_image}}" width="80" height="100">
                        <input type="file" name="background_image" class="form-control border border-2">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="fs-4 mb-2 fw-bold">Map</label>
                        <textarea class="form-control w-50" id="map_iframe" name="map_iframe" rows="4">{{$officeSetting?->map_iframe}}</textarea> 
                        <!-- <input type="url" class="form-control" id="map_iframe" name="map_iframe" rows="4" value="{{$officeSetting?->map_iframe}}"> -->
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="fs-4 mb-2 fw-bold">Facebook-iframe </label>
                        <!-- <input type="url" class="form-control" id="facebook_iframe" name="facebook_iframe" rows="4" value="{{$officeSetting?->facebook_iframe}}"> -->

                         <textarea class="form-control w-50" name="facebook_iframe" id="facebook_iframe" rows="3"></textarea> 
                    </div>
                    <div class="col-md-12 mb-3">
                        <label class="fs-4 mb-2 fw-bold">Twitter-iframe</label>
                        <!-- <input type="url" class="form-control" id="twitter_iframe" name="twitter_iframe" rows="4" value="{{$officeSetting?->twitter_iframe}}"> -->

                         <textarea class="form-control w-50"  name="twitter_iframe" id="twitter_iframe" rows="3"></textarea> 
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3 fs-5">Submit</button>
    </form>
</div>
@endsection