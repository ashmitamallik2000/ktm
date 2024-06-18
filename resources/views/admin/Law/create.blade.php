@extends('admin.layouts.masters')
@section('content')
<div class="d-flex  justify-content-between bd-highlight">
    <div class="p-2 bd-highlight">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"> <a href="{{ route('admin.dashboard') }}">
                        Home</a></li>
            </ol>
        </nav>
    </div>
    <div class="p-2 ms-5  bd-highlight">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb me-3">
                <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                        Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.law.index') }}">Law
                    </a></li>
            </ol>
        </nav>
    </div>
</div>
<div class="card  bd-highlight">
    <div class="d-flex justify-content-between">
        <div>
            <h4 class="py-3 ms-4">Law</h4>
        </div>
        <div>
            <a href="{{ route('admin.law.index') }}">
                <button type="button" class="btn btn-primary mt-3 me-3">Law List</button></a>
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

        <form action="{{ route('admin.law.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mt-3">
                <div class="col-md-5">
                    <label for="name">Name</label>
                    <input id="name" type="text"  name="title" class="form-control border border-2">

                </div>
                <div class="col-md-5">
                    <label for="name_en">Name-en</label>
                    <input id="name_en" type="text" name="title_en" class="form-control border border-2">
                </div>
                <div class=" col-md-5 my-3">
                    <label >Document-category</label>
                    <select id="lawCategory_id" name="lawCategory_id" class="bg-white border border-2 " style="height:39px; width:28rem; border-radius:8px; ">
                        <option value>-------------Choose------------</option>
                        @foreach ($lawCategorys as $lawCategory )
                        <option value="{{$lawCategory->id}}">{{$lawCategory->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2 my-3">
                    <label>Date</label>
                    <input type="date" name="date" class="form-control border border-2 ">
                </div>
                <div class="col-md-5 my-3">
                    <label >Photo</label>
                    <input type="file" name="photo" class="form-control border border-2 ">
                </div>

                <div class="col-md-4 my-3">
                    <label for="position">Position</label>
                    <input id="position"type="number" name="position" class="form-control border border-2 ">
                </div>
                <div class=" col-md-4 my-3">
                    <label for="publisher" >Publisher</label>
                    <input id="publisher"type="text" name="publisher" class="form-control border border-2">
                </div>

                <div class=" col-md-4 my-3">
                    <label for="publisher_en">Publisher-en</label>
                    <input id="publisher_en" type="text" name="publisher_en" class="form-control border border-2">
                </div>
                <div class=" col-md-12 my-3">
                    <label >Description</label>
                    <textarea  name="description" class="form-control border border-2 editor"></textarea>
                </div>
                <div class=" col-md-12 my-3">
                    <label >Description-en</label>
                    <textarea  name="description_en" class="form-control border border-2 editor"></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mb-3">Submit</button>
            <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    document.querySelectorAll(".editor").forEach(element => {
                        ClassicEditor
                            .create(element)
                            .catch(error => {
                                console.error(error);
                            });
                    });

                });
            </script>

        </form>
    </div>
</div>
@endsection