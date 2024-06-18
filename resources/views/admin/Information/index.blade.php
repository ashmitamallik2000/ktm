@extends('admin.layouts.masters')
@section('content')
<div class="container">
    <div class="d-flex  justify-content-between bd-highlight">
        <div class="p-2 bd-highlight">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page"> <a href="{{route('admin.dashboard')}}">
                            Home</a></li>
                </ol>
            </nav>
        </div>

    </div>
    <div class="card  bd-highlight">
        <div class="d-flex justify-content-between">
            <div>
                <h4 class="py-3 ms-4">Document</h4>
            </div>
            <div>
                <a href="{{ route('admin.information.create') }}">
                    <button type="button" class="btn btn-primary mt-3 me-3">Create</button></a>
            </div>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col ">S.No</th>
                <th scope="col">Title</th>
                <th scope="col">Title_en</th>
                <th scope="col">Action</th>

            </tr>
            @foreach ($informations as $information)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $information->title }}</td>
                <td>{{ $information->title_en }}</td>
                <td>
                    <div class="d-flex bd-highlight mx-0">
                        <div class="p-2  bd-highlight">
                            <a href="{{ route('admin.information.edit', $information) }}"><i class=" ti ti-pencil fs-6 "></i></a>
                        </div>
                        <div class="p-2 bd-highlight">
                            <form action="{{ route('admin.information.destroy', $information) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="text-primary show_confirm border-0 bg-transparent"> <i class="ti ti-trash fs-6"></i>
                                </button>
                            </form>
                        </div>
                </td>
            </tr>

            @endforeach

        </thead>

    </table>
</div>
@endsection