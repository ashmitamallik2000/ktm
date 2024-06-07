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
                <tr>
                    <td class="text-dark ">1</td>
                    <td>काठमाडौं महानगरपालिकाबाट आ.ब. २०८०/८१ मा निकासा गरिएको वडास्तरीय
                        प्रशासनिक तथा
                        विकास निर्माण बजेट खर्च गर्ने मार्गदर्शन २०८०</td>
                    <td>
                        <div class="d-flex"><a href="#"><i class="bg-primary rounded d-flex justify-content-center align-items-center
                           fa-solid fa-file text-white fs-5" style="height:40px; width:50px;"></i></a>
                            <a href="#"><i class="bg-primary rounded d-flex justify-content-center align-items-center
                            fa-solid fa-file-pdf text-white fs-5 ms-2" style="height:40px; width:50px;"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-dark">2</td>
                    <td>करारमा कर्मचारी पदपूर्ति गर्ने सम्बन्धी कार्यविधि, २०७९</td>
                    <td>
                        <div class="d-flex"><a href="#"><i class="bg-primary rounded d-flex justify-content-center align-items-center
                           fa-solid fa-image text-white fs-5" style="height:40px; width:50px;"></i></a>
                            <a href="#"><i class="bg-primary rounded d-flex justify-content-center align-items-center
                            fa-solid fa-file text-white fs-5 ms-2" style="height:40px; width:50px;"></i></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="text-dark ">3</td>
                    <td>काठमाडौं महानगरपालिका घर बहाल व्यवस्था निर्देशिका २०७९</td>
                    <td>
                        <a href="#"><i class="bg-primary rounded d-flex justify-content-center align-items-center
                           fa-solid fa-image text-white fs-5" style="height:40px; width:50px;"></i></a>
                    </td>
                </tr>
                <tr>
                    <td class="text-dark">4</td>
                    <td>काठमाडौं महानगरपालिका साझेदारी तथा लगानी ऐन २०७</td>
                    <td>
                        <a href="#"><i class="bg-primary rounded d-flex justify-content-center align-items-center
                           fa-solid fa-file-pdf text-white fs-5" style="height:40px; width:50px;"></i></a>
                    </td>
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