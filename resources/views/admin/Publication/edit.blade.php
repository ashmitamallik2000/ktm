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
                <li class="breadcrumb-item active" aria-current="page"><a href="{{route('admin.publication.index')}}">News
                    </a></li>
            </ol>
        </nav>
    </div>
</div>
<div class="card  bd-highlight">
    <div class="d-flex justify-content-between">
        <div>
            <h4 class="py-3 ms-4">News</h4>
        </div>
        <div>
            <a href="{{ route('admin.publication.create') }}">
                <button type="button" class="btn btn-primary mt-3 me-3">Add News</button></a>
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
    <form action="{{route('admin.publication.update', $publication)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="container">
            <div class="row">
                <div class="col-md-5 my-3">
                    <label>Name</label>
                    <input type="text" name="title" class="form-control border border-dark" value="{{ old('title', $publication->title) }}">
                    @error('title')
                    <div class="text-danger">{{$message}}</div>
                    @enderror

                </div>
                <div class=" col-md-5 my-3">
                    <label>Name_en</label>
                    <input type="text" name="title_en" class="form-control border border-dark" value="{{ old('title_en', $publication->title_en) }}">
                    @error('title_en')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>


                <div class=" col-md-5 my-3 ">
                    <label>Publication-category</label>
                    <select id="document_id" name="document_id" class="bg-white border border-dark fs-5" style="height:39px; width:28rem; border-radius:8px; " value="{{ old('document_id', $publication->document_id) }}">

                        <option value>------------ Choose------------</option>

                        @foreach ($documents as $document )
                        <option value="{{$document->id}}">{{$document->title}}</option>
                        @endforeach
                    </select>
                    @error('information_id')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-md-2 my-3">
                    <label>Date</label>
                    <input type="date" name="date" class="form-control border border-2 "value="{{ old('date', $document->date) }}">
                </div>

                <div class="col-md-5 my-3">
                    <label>Photo</label>
                    <input type="file" name="photo" class="form-control border border-dark" value="{{ old('photo', $publication->photo) }}">
                    @error('photo')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-md-4 my-3">
                    <label>Position</label>
                    <input type="number" name="position" class="form-control border border-dark" value="{{ old('position', $publication->position) }}">
                    @error('position')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class=" col-md-4 my-3">
                    <label>Publisher</label>
                    <input type="text" name="publisher" class="form-control border border-dark" value="{{ old('publisher', $publication->publisher) }}">
                    @error('publisher')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class=" col-md-4 my-3">
                    <label>Publisher-en</label>
                    <input type="text" name="publisher_en" class="form-control border border-dark" value="{{ old('publisher_en', $publication->publisher_en) }}">
                    @error('publisher_en')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class=" col-md-12 my-3">
                    <label>Description</label>
                    <textarea name="description" class="form-control border border-dark editor" value="{{ old('description', $publication->description) }}"></textarea>
                    @error('description')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class=" col-md-12 my-3">
                    <label>Description-en</label>
                    <textarea name="description_en" class="form-control border border-dark editor" value="{{ old('description_en', $publication->description_en) }}"></textarea>
                    @error('description_en')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

            </div>
        </div>
        <button type="submit" class="btn btn-primary ms-4 my-3">Submit</button>
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
@endsection