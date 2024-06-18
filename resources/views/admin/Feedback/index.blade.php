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
                <h4 class="py-3 ms-4">Contact</h4>
            </div>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col ">S.No</th>
                <th scope="col">Full-Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Objectives</th>
                <th scope="col">Action</th>

            </tr>
            @foreach ($feedbacks as $feedback)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $feedback->full_name }}</td>
                <td>{{ $feedback->phone }}</td>
                <td>{{ $feedback->email }}</td>
                <td>{{ $feedback->objectives }}</td>
                <td>
                    <div class="d-flex bd-highlight mx-0">
                        <div class="p-2  bd-highlight">
                            <a href="{{ route('admin.feedback.show', $feedback) }}"><i class=" ti ti-eye fs-6 "></i></a>
                        </div>
                        <div class="p-2 bd-highlight">
                            <form action="{{ route('admin.feedback.destroy', $feedback) }}" method="POST">
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