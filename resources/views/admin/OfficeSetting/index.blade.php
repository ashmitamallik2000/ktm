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
<div class="card">
    <div class="container">
        <form action="{{ route('admin.officeSetting.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12 my-3">
                    <label>Office Name</label>
                    <input type="text" name="office_name" class="form-control border border-2" value="{{ old('office_name', $officeSetting?->office_name) }}">
                </div>
                <div class="col-md-12 my-3">
                    <label>Office Name-en</label>
                    <input type="text" name="office_name_en" class="form-control border border-2" value="{{ old('office_name_en', $officeSetting?->office_name_en) }}">
                </div>
                <div class="col-md-6 my-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control border border-2" value="{{ old('email', $officeSetting?->email) }}">
                </div>
                <div class="col-md-6 my-3">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control border border-2" value="{{ old('phone', $officeSetting?->phone) }}">
                </div>
                <div class="col-md-4 my-3">
                    <label>Office head</label>
                    <select id="office_head_id" name="office_head_id" class="bg-white border border-2 fs-9" style="height:38px; width:18rem; border-radius:8px;">

                        <option value="">-----------Choose ------------</option>
                        @foreach ($employees as $employee)
                        <option value="{{ $employee->id }}" {{ $employee->id == old('office_head_id', $officeSetting?->office_head_id) ? 'selected' : '' }}>
                            {{ $employee->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 my-3">
                    <label>Information officer</label>
                    <select id="information_officer_id" name="information_officer_id" class="bg-white border border-2 fs-9" style="height:38px; width:18rem; border-radius:8px;">
                        <option value="">---------Choose ------------</option>
                        @foreach ($employees as $employee)
                        <option value="{{ $employee->id }}" {{ $employee->id == old('information_officer_id', $officeSetting?->information_officer_id) ? 'selected' : '' }}>
                            {{ $employee->name }}
                        </option>
                        @endforeach
                    </select>
                </div>


                <div class="col-md-4 my-3">
                    <label>Spoke person</label>
                    <select id="spoke_person_id" name="spoke_person_id" class="bg-white border border-2 fs-9" style="height:38px;  border-radius:8px; width:19rem; ">
                        <option value="">------------Choose ------------</option>
                        @foreach ($employees as $employee)
                        <option value="{{ $employee->id }}" {{ $employee->id == old('spoke_person_id', $officeSetting?->spoke_person_id) ? 'selected' : '' }}>
                            {{ $employee->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="row">
                    <div class="col-md-4 my-3">
                        <label>Logo</label>
                        <img src="{{$officeSetting?->logo}}" width="100" height="100">

                        <input type="file" name="logo" class="form-control border border-2">
                    </div>
                    <div class="col-md-4 my-3">
                        <label>Flag</label>
                        <img src="{{$officeSetting?->flag}}" width="100" height="100">

                        <input type="file" name="flag" class="form-control border border-2">
                    </div>
                    <div class="col-md-4 my-3">
                        <label>Background Image</label>
                        <img src="{{$officeSetting?->background_image}}" width="100" height="100">
                        <input type="file" name="background_image" class="form-control border border-2">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 my-3">
                        <label>Map</label>
                        <textarea class="form-control " id="map_iframe" name="map_iframe" rows="3">{{$officeSetting?->map_iframe}}</textarea>
                    </div>
                    <div class="col-md-12 my-3">
                        <label>Facebook-iframe </label>
                        <textarea class="form-control " name="facebook_iframe" id="facebook_iframe" rows="3"></textarea>
                    </div>
                    <div class="col-md-12 my-3">
                        <label>Twitter-iframe</label>
                        <textarea class="form-control " name="twitter_iframe" id="twitter_iframe" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary my-3">Submit</button>
        </form>
    </div>
</div>

@endsection