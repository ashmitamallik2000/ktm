@extends('layout.master')
@section('content')
<div class="container-fluid bg-light">
    <div class="container py-5">
        <h3 class="text-dark fw-bold ms-5">जनप्रतिनिधिहरू</h3>
        <a class="text-decoration-none text-dark ms-5 " href="index.html">गृहपृष्ठ</a><i class="fas fa-greater-than text-muted ms-2"></i><a class="text-decoration-none text-dark ms-2 link-primary" href="about.html">जनप्रतिनिधि</a>
    </div>
</div>
<div class="container border py-5 rounded my-3">
<form action="" method="get" class="me-2">
                    <input class="form-control form-control-sm filter-form w-50" name="search" type="search" placeholder="filter data....." autocomplete="off"
                           value="{{old('search',\request('search'))}}">
                </form>
    <div class="col-md-12 ">
        <table class="table table-hover border  mt-3">
            <thead>
                <tr>
                    <th scope="col">फोटो</th>
                    <th scope="col">नाम</th>
                    <th scope="col">पद</th>
                    <th scope="col">इमेल</th>
                    <th scope="col">फोन.न</th>
                </tr>
            </thead>
            <tbody>
            @foreach($employees as $employee)
                <tr>
                   
                    <td>
                        <div>
                            <img class="rounded" src="{{$employee->photo}}" style="height:100px; width:110px;">
                        </div>
                    </td>
                    <td class="py-5">{{$employee->name}}</td>
                    <td class="py-5">नगर प्रमुख</td>
                    <td class="py-5">mayor@kathmandu.gov.np</td>
                    <td class="py-5">123-456-7890</td>
                   
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