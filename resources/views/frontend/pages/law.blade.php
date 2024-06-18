@extends('layout.master')
@section('content')
<div class="container-fluid bg-light">
    <div class="container py-5">
        <h3 class="text-dark fw-bold ms-5">ऐन, कानुन तथा निर्देशिका</h3>
        <a class="text-decoration-none text-dark ms-5 " href="index.html">गृहपृष्ठ</a><i class="fas fa-greater-than text-muted ms-2"></i><a class="text-decoration-none text-dark ms-2 link-primary" href="law.html">ऐन, कानुन तथा निर्देशिका</a>
    </div>
</div>
<div class="container border py-5 rounded my-3">
    <div class="input-group mb-3 mx-5">
        <input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="Filter data..">
    </div>
    <div class="col-md-12 ">
        <table class="table table-hover border  mt-3">
            <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">शीर्षक</th>
                    <th scope="col">कागजातहरू</th>
                </tr>
            </thead>
            <tbody>
                @foreach($laws as $law)
                <tr>
                <th class="text-drak"scope="row">{{ $loop->iteration }}</th>
                    <td>{{$law->title}}</td>
                    <td>
                        <button class="btn btn-primary "><a href="{{route('lawDetail',$law)
                        }}"><i class="fa fa-eye"></i></a></button>
                    </td>
                </tr>
                @endforeach
               
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col-md-6 ">
            <p class="text-muted">0 of 5 row(s) selected.</p>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex">
                        <div class="com-md-6">
                            <p class="text-dark ms-3 fw-bold">Rows per page</p>
                        </div>
                        <div class="col-md-6">
                            <select data-mdb-select-init>
                                <option value="1">10</option>
                                <option value="2">20</option>
                                <option value="3">30</option>
                                <option value="4">40</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <p class="text-dark">Page 1 of 1</p>
                </div>
                <div class="col-md-1">
                    <button class="btns btn-white border rounded "><i class="fas fa-angle-double-left text-muted"></i></button>
                </div>
                <div class="col-md-1">
                    <button class="btns btn-white border rounded"><i class="fa-solid fa-less-than text-muted"></i></button>
                </div>
                <div class="col-md-1">
                    <button class="btns btn-white border rounded"><i class="fas fa-greater-than text-muted"></i></button>
                </div>
                <div class="col-md-1">
                    <button class="btns btn-white border rounded"><i class="fas fa-angle-double-right text-muted"></i></button>
                </div>
            </div>
        </div>

    </div>
</div>


@endsection