@extends('layout.master')
@section('content')
<div class="container-fluid bg-light">
    <div class="container py-5">
        <h3 class="text-dark fw-bold ms-5">जनप्रतिनिधिहरू</h3>
        <a class="text-decoration-none text-dark ms-5 " href="index.html">गृहपृष्ठ</a><i class="fas fa-greater-than text-muted ms-2"></i><a class="text-decoration-none text-dark ms-2 link-primary" href="about.html">जनप्रतिनिधि</a>
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
                    <th scope="col">फोटो</th>
                    <th scope="col">नाम</th>
                    <th scope="col">पद</th>
                    <th scope="col">इमेल</th>
                    <th scope="col">फोन.न</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div>
                            <img class="rounded" src="{{asset('assets/frontend/image\balen.png')}}" style="height:100px; width:110px;">
                        </div>
                    </td>
                    <td class="py-5">बालेन्द्र शाह</td>
                    <td class="py-5">नगर प्रमुख</td>
                    <td class="py-5">mayor@kathmandu.gov.np</td>
                    <td class="py-5">123-456-7890</td>
                </tr>
                <tr>
                    <td>
                        <div>
                            <img class="rounded" src="{{asset('assets/frontend/image\sunita.png')}}" style="height:100px; width:110px;">
                        </div>
                    </td>
                    <td class="py-5">सुनिता डंगोल</td>
                    <td class="py-5">नगर उप– प्रमुख</td>
                    <td class="py-5">deputy.mayor@kathmandu.gov.np</td>
                    <td class="py-5">987-654-3210</td>
                </tr>
                <tr>
                    <td>
                        <div>
                            <img class="rounded" src="{{asset('assets/frontend/image\dinesh.jpg')}}" style="height:100px; width:110px;">
                        </div>
                    </td>
                    <td class="py-5">दिनेश महर्जन</td>
                    <td class="py-5">वडा अध्यक्ष</td>
                    <td class="py-5"></td>
                    <td class="py-5">987-654-3210</td>
                </tr>
                <td>
                    <div>
                        <img class="rounded" src="{{asset('assets/frontend/image\bharat.png')}}" style="height:100px; width:110px;">
                    </div>
                </td>
                <td class="py-5">भरतलाल श्रेष्ठ</td>
                <td class="py-5">वडा अध्यक्ष</td>
                <td class="py-5"></td>
                <td class="py-5">987-654-3210</td>
                </tr>
                <tr>
                    <td>
                        <div>
                            <img class="rounded" src="{{asset('assets/frontend/image\rajendra.jpg')}}" style="height:100px; width:110px;">
                        </div>
                    </td>
                    <td class="py-5">राजेन्द्र कुमार श्रेष्ठ</td>
                    <td class="py-5">नगर उप– प्रमुख</td>
                    <td class="py-5">deputy.mayor@kathmandu.gov.np</td>
                    <td class="py-5">987-654-3210</td>
                </tr>
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