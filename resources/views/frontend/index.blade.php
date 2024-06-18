@extends('layout.master')
@section('content')
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h class="modal-title fw-bold" id="exampleModalLabel">नयाँ वर्षको हार्दिक शुभकामना । | 2081-01-01
                    </h>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{asset('assets/frontend/image\pop.webp')}}" style="height:100%; width:100%;">
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
            </div>
        </div>
    </div>

     <!-- morquee -->
    <!-- <div class="container py-3">
        <div class="ticker">
            <div class="title">
                <h5 class="fs-6 text-white">सूचना/समाचार</h5>
            </div>
            <div class="news bg-light">
                <marquee class="news-content">
                    <p>आधारभुत तह (कक्षा-८) उत्तीर्ण परिक्षाको नतिजा प्रकाशन सम्बन्धी सुचना ।(श्री कक्षा ८ संचालित
                        विद्यालय सबै का.म.पा.)
                        बिबरण उपलब्ध गराउने सम्बन्धमा ।</p>
                    <p> उपस्थिति सम्बन्धमा ।( श्री सबै सामुदायिक विद्यालयहरु, का.म.पा. ) आधारभुत तह (कक्षा-८) उत्तीर्ण
                        परिक्षाको नतिजा प्रकाशन सम्बन्धी सुचना </p>
                    <p>(श्री कक्षा ८ संचालित विद्यालय सबै का.म.पा.) बिबरण उपलब्ध गराउने सम्बन्धमा ।</p>
                </marquee>
            </div>
        </div>
    </div> -->
    <div class="container">
        <div class="ticker">
            <div class="news-title">
                <h5>सूचना/समाचार</h5>
            </div>
            <div class="news">
                <marquee class="news-content">
                    <p>आधारभुत तह (कक्षा-८) उत्तीर्ण परिक्षाको नतिजा प्रकाशन सम्बन्धी सुचना ।(श्री कक्षा ८ संचालित
                        विद्यालय सबै का.म.पा.)
                        बिबरण उपलब्ध गराउने सम्बन्धमा ।</p>
                    <p> उपस्थिति सम्बन्धमा ।( श्री सबै सामुदायिक विद्यालयहरु, का.म.पा. ) आधारभुत तह (कक्षा-८) उत्तीर्ण
                        परिक्षाको नतिजा प्रकाशन सम्बन्धी सुचना </p>
                    <p>(श्री कक्षा ८ संचालित विद्यालय सबै का.म.पा.) बिबरण उपलब्ध गराउने सम्बन्धमा ।</p>
                </marquee>
            </div>
        </div>
    </div>



    <!-- slider -->
    <div class="container" data-aos="fade-up-right">
        <div class="row py-3">
            <div Class="col-md-8">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      @foreach($sliders as $slider)
                      <div class="carousel-item {{$loop->first ? 'active' : ''}}">
                            <img src="{{$slider->photo}}" height="600">
                        </div>
                      @endforeach
                       

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-4 bg-light py-3" data-aos="fade-left">
                <h6 class="fw-bold fs-5">काठमाडौँ महानगरपालिकाको परिचय</h6>
                <p class="  py-2">काठमाडौँ नेपालको केन्द्रीय राजधानी शहर तथा मुलुककै पहिलो महानगर पनि हो । यस महानगरको
                    नजिकका रुपमा
                    रहेका दुई ठूला शहरहरु मध्ये दक्षिणतर्फ ललितपुर महानगरपालिका र पूर्वतर्फ भक्तपुर नगरपालिका रहेका छन्
                    । शिवपुरी, फुल्चोकी, नागार्जुङ र चन्द्रागिरी नामका चार ठूला पहाडहरुको बीचमा रहेको यो महानगर अनुपम
                    भौगोलिक अवस्था, रहस्यपूर्ण जैविक विविधता सहित कचौरा आकारमा समुन्द्री सतहबाट लगभग १४०० मिटर (४६००
                    फिट) को उचाइमा ५०.६७ वर्ग किलो मिटरमा फैलिएर २७’२२” उत्तरी अक्षांश र ८५’२०” पूर्वी देशान्तरमा
                    अवस्थित रहेको छ । धार्मिक सहिष्णुता र उच्च सामाजिक मानव सम्बन्ध रहेको यस शहरको इतिहास लगभग २००० वर्ष
                    पुरानो रहेको मानिन्छ । बौद्ध र हिन्दु धर्मावलम्बीहरुको आस्थाको केन्द्रको.... <button
                        class="btn btn-primary">थप हेर्नुहोस</button>
                </p>
                <div class="row">
                    <div class="col-md-5 bg-primary rounded  mx-3 mt-5">
                        <div class="row">
                            <div class="col-md-4 ">
                                <a href="#">
                                    <i class="  border bg-white  rounded-circle d-flex justify-content-center
                                    align-items-center mt-3 mb-3  fa fa-legal text-primary fs-5"
                                        style="height:60px; width:60px" ;></i>
                                </a>
                            </div>
                            <div class="col-md-8 py-4 mt-2 ">
                                <h class="text-white fw-bold ms-2">हाम्रो कानुन</h>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 bg-primary rounded  mt-5">
                        <div class="row">
                            <div class="col-md-4  ">
                                <a href="#">
                                    <i class="fas fa-newspaper text-primary fs-5 bg-white rounded-circle d-flex justify-content-center
                                        align-items-center mt-3 mb-3" style="height:60px; width:60px;"></i>
                                </a>
                            </div>
                            <div class="col-md-8 py-4 mt-2 ">
                                <h class="text-white fw-bold ms-2">सूचनाहरुको हक</h>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" data-aos="fade-up">
        <div class="row d-flex">
            <div class=" col d-flex rounded relative bg-light mb-5 mx-2">
            
                <div class="flex items-center p-3 gap-3">
                   
                    <img class="aspect-square  rounded  object-cover" src="{{officeSetting()?->informationofficer?->photo}}"
                        style="height:120px; width:150px;">
                       
                </div>
                
                <div class="col-md-3">
                    <h5 class="fw-bold mt-3 ">{{officeSetting()?->informationofficer?->name}}</h5>
                    <h class="text-primary">{{officeSetting()?->informationofficer?->designation->title}}</h>
                    <p class="mt-1">{{officeSetting()?->informationofficer?->email}}</p>
                    <p>{{officeSetting()?->informationofficer?->phone}}</p>
                </div>
            </div>
            <div class=" col d-flex rounded relative bg-light mb-5 mx-4">
                <div class=" flex items-center p-3 gap-3">
                    <img class="aspect-square  rounded object-cover" src="{{asset('assets/frontend/image\sunita.png')}}"
                        style="height:120px; width:150px;">
                </div>
                <div class="col-md-4">
                    <h5 class="fw-bold mt-3 ">सुनिता डंगोल</h5>
                    <h class="text-primary mt-1">उप– प्रमुख</h>
                    <p class="mt-1">deputy.mayor@kathmandu.gov.np</p>
                    <p>९८१९५०००००</p>
                </div>
            </div>
            <div class="col d-flex rounded relative bg-light mb-5">
                <div class="items-center p-3 gap-3">
                    <img class="aspect-square  rounded object-cover" src="{{asset('assets/frontend/image\pradip.jpeg')}}"
                        style="height:120px; width:150px;">
                </div>
                <div class="col-md-4">
                    <h5 class="fw-bold mt-3 ">प्रदीप परियार</h5>
                    <h class="text-primary ">प्रमुख प्रशासकिय अधिकृत</h>
                    <p class="">ceo@kathmandu.gov.np</p>
                    <p>९८१९५०००००</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- news -->
    <div class="container ">
        <div class="row ">
            <div class="col-md-7 bg-light  mx-5 " data-aos="fade-right">
                <ul class="nav nav-pills mb-3  mt-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active text-white" id="pills-सूचना-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-सूचना" type="button" role="tab" aria-controls="pills-सूचना"
                            aria-selected="true">सूचना</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-white" id="pills-समचार-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-समचार" type="button" role="tab" aria-controls="pills-समचार"
                            aria-selected="false">समचार</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-white" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">कानुन</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-white" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">खरिद</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-white" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">प्रतिवेदन</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-white" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">बजेट</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-white" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">योजना</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade" id="pills-सूचना" role="tabpanel" aria-labelledby="pills-सूचना-tab">
                        <div class="d-flex ">
                            <div class="col-md-1">
                                <a href="#"><i class="fas fa-link text-dark"></i></a>
                            </div>
                            <div class="col-md-11">
                                <h class="text-secondary fs-5">का.म.पा को प्रथम चौमासिक खर्च विवरण (क्षेत्रगत बजेट तथा
                                    खर्च)</h>
                                <p class="text-muted">प्रकाशित मिति:23-03-2024|10:12:04AM</P>
                                <hr>
                            </div>
                        </div>
                        <div class="d-flex ">
                            <div class="col-md-1">
                                <a href="#"><i class="fas fa-link text-dark"></i></a>
                            </div>
                            <div class="col-md-11">
                                <h class="text-secondary fs-5">का.म.पा को प्रथम चौमासिक खर्च विवरण (क्षेत्रगत बजेट तथा
                                    खर्च)</h>
                                <p class="text-muted">प्रकाशित मिति:23-03-2024|10:12:04AM</P>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-समचार" role="tabpanel" aria-labelledby="pills-समचार-tab">
                        <div class="d-flex ">
                            <div class="col-md-1">
                                <a href="#"><i class="fas fa-link text-dark"></i></a>
                            </div>
                            <div class="col-md-11">
                                <h class="text-secondary fs-5">का.म.पा को प्रथम चौमासिक खर्च विवरण (क्षेत्रगत बजेट तथा
                                    खर्च)</h>
                                <p class="text-muted">प्रकाशित मिति:23-03-2024|10:12:04AM</P>
                                <hr>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="col-md-1">
                                <a href="#"><i class="fas fa-link text-dark"></i></a>
                            </div>
                            <div class="col-md-11">
                                <h class="text-secondary fs-5">Document title 2</h>
                                <p class="text-muted">प्रकाशित मिति:23-03-2024|10:12:04AM</P>
                                <hr>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="col-md-1">
                                <a href="#"><i class="fas fa-link text-dark"></i></a>
                            </div>
                            <div class="col-md-11">
                                <h class="text-secondary fs-5">Document title 3</h>
                                <p class="text-muted">प्रकाशित मिति:23-03-2024|10:12:04AM</P>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-कानुन-tab">
                        <div class="d-flex ">
                            <div class="col-md-1">
                                <a href="#"><i class="fas fa-link text-dark"></i></a>
                            </div>
                            <div class="col-md-11">
                                <h class="text-secondary fs-5">विधि सँग सम्बन्धित बिषय</h>
                                <p class="text-muted">प्रकाशित मिति:23-03-2024|10:12:04AM</P>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-खरिद-tab">
                        ...</div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-प्रतिवेदन-tab">
                        ...</div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-बजेट-tab">
                        ...</div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-योजना-tab">
                        ...</div>
                </div>
                <button class="btn btn-primary mt-4 mb-4 ">थप हेर्नुहोस</button>
            </div>

            <div class="col-md-4 bg-light" data-aos="fade-left">
                <button class="btns btn-danger mt-2 mb-2 fw-bold fs-5 "
                    style="height:50px; width:410px;">प्रकाशन</button>
                <div class="d-flex ">
                    <div class="col-md-1">
                        <a href="#"><i class="fas fa-link text-dark"></i></a>
                    </div>
                    <div class="col-md-11">
                        <h class="text-secondary fs-5">का.म.पा को प्रथम चौमासिक खर्च विवरण (क्षेत्रगत बजेट तथा खर्च)</h>
                        <p class="text-muted">प्रकाशित मिति:23-03-2024|10:12:04AM</P>
                        <hr>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="col-md-1">
                        <a href="#"><i class="fas fa-link text-dark"></i></a>
                    </div>
                    <div class="col-md-11">
                        <h class="text-secondary fs-5">Document title 2</h>
                        <p class="text-muted">प्रकाशित मिति:23-03-2024|10:12:04AM</P>
                        <hr>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="col-md-1">
                        <a href="#"><i class="fas fa-link text-dark"></i></a>
                    </div>
                    <div class="col-md-11">
                        <h class="text-secondary fs-5">Document title 3</h>
                        <p class="text-muted">प्रकाशित मिति:23-03-2024|10:12:04AM</P>
                        <hr>
                    </div>
                </div>
                <button class="btn btn-primary mt-4 mb-4 ">थप हेर्नुहोस</button>
            </div>
        </div>
    </div>

    <div class="container" data-aos="fade-up-left">
        <div class="row mt-3">
            <div class="col-md-3">
                <div class="card mb-3 bg-light" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset('assets/frontend/image\11.jpg')}}" class="img-fluid rounded-start ms-2 py-3 mb-5" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">नवीन मानन्धर</h5>
                                <p class="card-text text-primary m-0">प्रवक्ता</p>
                                <p class="card-text fs-4 mt-3"><small class="text-dark">9851279917</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mb-3 bg-light" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset('assets/frontend/image\12.png')}}" class="img-fluid rounded-start ms-2 py-3 mb-5" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">दीपक अधिकारी</h5>
                                <p class="card-text text-primary m-0">सहायक प्रवक्ता
                                </p>
                                <p class="card-text fs-4 mt-3"><small class="text-dark">9851094877</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="card mb-3 bg-light" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{asset('assets/frontend/image\13.png')}}" class="img-fluid rounded-start ms-2 py-3 mb-5" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">दीपक अधिकारी</h5>
                                <p class="card-text text-primary m-0">सहायक प्रवक्ता
                                </p>
                                <p class="card-text fs-4 mt-3"><small class="text-dark">9851094877</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery -->
    <div class="container-fluid  mt-5 mb-5" data-aos="zoom-in">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-8 mt-3">
                    <h class="text-white fw-bold fs-4 ">नागरिक क्षेत्र</h>
                    <div class="row mt-3 ">
                        <div class="col-md-3 mb-5 rounded bg-white mx-1">
                            <div class="card-border-0 mb-5 mt-3  ">
                                <a href="#">
                                    <span
                                        class="bg-primary rounded-circle d-flex justify-content-center align-items-center mx-5 ms-5 mb-3 hover-effect "
                                        style="height:70px; width:70px;">
                                        <img src="{{asset('assets/frontend/image\a.png')}}" class=" py-3 " style="height:80px; width:80px;">
                                    </span>
                                </a>
                                <h class="text-center fw-bold text-primary ms-2">सेवाहरु/नागरीक वडापत्र</h>
                            </div>
                        </div>
                        <div class="col-md-3 mb-5 rounded bg-white mx-1">
                            <div class="card-border-0 mb-5 mt-3">
                                <a href="#">
                                    <span
                                        class="bg-primary rounded-circle d-flex justify-content-center align-items-center mx-5 ms-5 mb-3"
                                        style="height:70px; width:80px;">
                                        <img src="{{asset('assets/frontend/image\b.png')}}" class=" py-3" style="height:80px; width:70px;">
                                    </span>
                                </a>
                                <h class="text-center  fw-bold text-primary ms-5">ई-सरकारी सेवा</h>
                            </div>
                        </div>
                        <div class="col-md-3 mb-5 rounded bg-white mx-1">
                            <div class="card-border-0 mb-5 mt-3">
                                <a href="#">
                                    <span
                                        class="bg-primary rounded-circle d-flex justify-content-center align-items-center mx-5 ms-5 mb-3"
                                        style="height:70px; width:85px;">
                                        <img src="{{asset('assets/frontend/image\c.png')}}" class=" py-3" style="height:80px; width:80px;">
                                    </span>
                                </a>
                                <h class="text-center fw-bold text-primary ms-5">सचिवालयबिभाग</h>
                            </div>
                        </div>
                        <div class="col-md-2 mb-5 rounded bg-white">
                            <div class="card-border-0 mb-5 mt-3">
                                <a href="#">
                                    <span
                                        class="bg-primary rounded-circle d-flex justify-content-center align-items-center mx-5 ms-4 mb-3"
                                        style="height:70px; width:70px;">
                                        <img src="{{asset('assets/frontend/image\d.png')}}" class=" py-3" style="height:80px; width:80px;">
                                    </span>
                                </a>
                                <h class="text-center fw-bold text-primary ms-5">वडा</h>
                            </div>
                        </div>
                        <div class="col-md-3 mx-1 mb-5 tex-center rounded bg-white">
                            <div class="card-border-0 mb-5 mt-3">
                                <a href="#">
                                    <span
                                        class="bg-primary rounded-circle d-flex justify-content-center align-items-center  ms-5 mb-3"
                                        style="height:70px; width:70px;">
                                        <img src="{{asset('assets/frontend/image\e.png')}}" class=" py-3" style="height:80px; width:80px;">
                                    </span>
                                </a>
                                <h class="text-center fw-bold text-primary ms-5 ">सम्पदा</h>
                            </div>
                        </div>
                        <div class="col-md-3 mx-1 mb-5 rounded bg-white">
                            <div class="card-border-0 mb-5 mt-3">
                                <a href="#">
                                    <span
                                        class="bg-primary rounded-circle d-flex justify-content-center align-items-center  ms-5 mb-3"
                                        style="height:70px; width:70px;">
                                        <img src="{{asset('assets/frontend/image\f.png')}}" class=" py-3" style="height:80px; width:80px;">
                                    </span>
                                </a>
                                <h class="text-center fw-bold text-primary ms-2">राष्ट्रिय/अन्तरास्ट्रिय सम्बन्ध</h>
                            </div>
                        </div>
                        <div class="col-md-2 mx-1 mb-5 rounded bg-white">
                            <div class="card-border-0 mb-5 mt-3">
                                <a href="#">
                                    <span
                                        class="bg-primary rounded-circle d-flex justify-content-center align-items-center  ms-4 mb-3"
                                        style="height:70px; width:70px;">
                                        <img src="{{asset('assets/frontend/image\g.png')}}" class=" py-3" style="height:80px; width:80px;">
                                    </span>
                                </a>
                                <h class="text-center fw-bold text-primary ms-4">गुनाशो</h>
                            </div>
                        </div>
                        <div class="col-md-3  mb-5 rounded bg-white">
                            <div class="card-border-0 mb-5 mt-3">
                                <a href="#">
                                    <span
                                        class="bg-primary rounded-circle d-flex justify-content-center align-items-center mx-5 ms-5 mb-3"
                                        style="height:70px; width:70px;">
                                        <img src="{{asset('assets/frontend/image\h.png')}}" class=" py-3" style="height:80px; width:80px;">
                                    </span>
                                </a>
                                <h class="text-center fw-bold text-primary ms-5">कोभिद-१९</h>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-3">
                    <h3 class="text-white fw-bold fs-4">महानगरको नक्सा (वडा सहित)</h3>
                    <div class="row mt-3 ">
                        <div class="col-md-12 mb-5 rounded bg-white mx-1">
                            <div class="card-border-0 mb-5 mt-3  ">
                                <a href="#">
                                    <img src="{{asset('assets/frontend/image\map.png')}}" style="height:400px;width:400px;" class="bg-white py-3 ">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 mb-3 rounded bg-white mx-3 ">
                    <div class="row">
                        <div class="col-md-2 mb-3 mt-3 ms-2 rounded bg-danger mx-1">
                            <div class="card-border-0 mb-3 mt-3  ">
                                <h5 class="text-center fw-bold text-white py-3">का.म.पा. का मोबाइल एपहरु</h5>
                            </div>
                        </div>
                        <div class="col-md-2 ms-5">
                            <div class="card-border-0 mb-5 mt-3   ">
                                <a href="#">
                                    <span
                                        class="bg-primary rounded d-flex justify-content-center align-items-center  ms-3 mb-3 "
                                        style="height:70px; width:70px;">
                                        <img src="{{asset('assets/frontend/image\city.jpeg')}}" class=" py-3 " style="height:80px; width:80px;">
                                    </span>
                                </a>
                                <h class="text-center text-primary fw-bold">का.मा.पा.स्मार्ट एप</h>
                            </div>
                        </div>
                        <div class="col-md-2 ms-3">
                            <div class="card-border-0 mb-5 mt-3  ">
                                <a href="#">
                                    <span
                                        class="bg-primary rounded d-flex justify-content-center align-items-center  ms-3 mb-3 "
                                        style="height:70px; width:90px;">
                                        <img src="{{asset('assets/frontend/image\ka.jpeg')}}" class=" py-3 " style="height:80px; width:80px;">
                                    </span>
                                </a>
                                <h class="text-center text-primary fw-bold">का.मा.पा.सम्पदा भ्रमाद एप</h>
                            </div>
                        </div>
                        <div class="col-md-2 ms-3">
                            <div class="card-border-0 mb-5 mt-3  ">
                                <a href="#">
                                    <span
                                        class="bg-primary rounded d-flex justify-content-center align-items-center  ms-3 mb-3 "
                                        style="height:70px; width:70px;">
                                        <img src="{{asset('assets/frontend/image\doit.jpeg')}}" class=" py-3 " style="height:80px; width:80px;">
                                    </span>
                                </a>
                                <h class="text-center text-primary fw-bold">स्थानिय ताहा एप</h>
                            </div>
                        </div>
                        <div class="col-md-2 ms-5">
                            <div class="card-border-0 mb-5 mt-3  ">
                                <a href="#">
                                    <span
                                        class="bg-primary rounded d-flex justify-content-center align-items-center  ms-3 mb-3 "
                                        style="height:70px; width:70px;">
                                        <img src="{{asset('assets/frontend/image\ktm.png')}}" class=" py-3 " style="height:80px; width:80px;">
                                    </span>
                                </a>
                                <h class="text-center text-primary fw-bold">Covid-19 निगरानी प्रणाली</h>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4 rounded bg-white">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card-border-0 mt-3 ">
                                <a href="#">
                                    <span class="bg-info rounded d-flex justify-content-center
                                        align-items-center mt-5" style="height:90px; width:90px;">
                                        <img src="{{asset('assets/frontend/image\men.png')}}" class=" py-3" style="height:80px; width:80px;">
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 mt-5 py-3">
                            <h class="text-primary fw-bold ">सार्बजनिक सौचालाएहरू(Google map)</h>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container bg-light mb-5">
        <div class="d-flex">
            <div class="col-md-4  bg-danger mt-3 mx-3  " style="height:40px; width:145px;">
                <h5 class="fw-bold  text-white  fs-5 mt-2 ms-5">ग्यालरी</h5>
            </div>
            <div class="col-md-8 mt-3">
                <ul class="nav nav-pills mx-5 mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active text-white" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">सबै</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-white" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false">तस्बिर पुस्तिका</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-white" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">भिडियो ग्यालरी</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-white" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">अन्य</button>
                    </li>
                </ul>
            </div>

        </div>

        <div class="row text-center text-lg-start py-5">

            <div class="col-lg-3 col-md-4 col-6" data-aos="flip-left">

                <img class="img-fluid  rounded mb-3" src="{{asset('assets/frontend/image\1.jpg')}}" alt="">

            </div>
            <div class="col-lg-3 col-md-4 col-6" data-aos="flip-left">

                <img class="img-fluid rounded " src="{{asset('assets/frontend/image\2.jpg')}}" alt="">

            </div>
            <div class="col-lg-3 col-md-4 col-6" data-aos="flip-left">

                <img class="img-fluid rounded" src="{{asset('assets/frontend/image\3.jpg')}}" alt="">

            </div>
            <div class="col-lg-3 col-md-4 col-6" data-aos="flip-left">

                <img class="img-fluid rounded" src="{{asset('assets/frontend/image\4.jpg')}}" alt="">

            </div>
            <div class="col-lg-3 col-md-4 col-6" data-aos="flip-left">

                <img class="img-fluid rounded " src="{{asset('assets/frontend/image\5.jpg')}}" alt="">

            </div>
            <div class="col-lg-3 col-md-4 col-6" data-aos="flip-left">

                <img class="img-fluid rounded " src="{{asset('assets/frontend/image\1.jpg')}}" alt="">

            </div>
            <div class="col-lg-3 col-md-4 col-6" data-aos="flip-left">

                <img class="img-fluid rounded " src="{{asset('assets/frontend/image\5.jpg')}}" alt="">

            </div>
            <div class="col-lg-3 col-md-4 col-6" data-aos="flip-left">

                <img class="img-fluid rounded" src="{{asset('assets/frontend/image\4.jpg')}}" alt="">

            </div>
        </div>
        <button class="btn btn-primary justify-content-center mx-5 mb-3" style="height:50px;width:100px;">थप
            हेर्नुहोस</button>
    </div>

    <div class="container mb-5 bg-light" data-aos="fade-down">

        <div class="row d-flex justify-content-center">
            <h class="text-primary fw-bold fs-5 mt-5 text-center mb-3">सामाजिक सञ्जालमा महानगर</h>

            <button type="button" class="btn  btn-lg d-flex align-items-center text-white mb-5 "
                style="height:60px; width:250px;">FaceBook
                <span class="bg-white rounded ms-2 d-flex justify-content-center align-items-center"
                    style="height:30px; width:35px">
                    <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f text-primary"></i></a>
                </span>
            </button>

            <button type="button" class="btn  btn-lg d-flex align-items-center text-white ms-5"
                style="height:60px; width:250px;">X
                <span class="bg-white rounded ms-2 d-flex justify-content-center align-items-center"
                    style="height:30px; width:35px">
                    <a href="www.twitter.com"><i class="fa-brands fa-x-twitter text-primary"></i></a>
                </span>
            </button>

            <button type="button" class="btn  btn-lg d-flex align-items-center text-white ms-5"
                style="height:60px; width:250px;">Youtube
                <span class="bg-white rounded ms-2 d-flex justify-content-center align-items-center"
                    style="height:30px; width:35px">
                    <a href="www.youtube.com"><i class="fa-brands fa-youtube text-danger"></i></a>
                </span>
            </button>

        </div>
    </div>

    
@endsection