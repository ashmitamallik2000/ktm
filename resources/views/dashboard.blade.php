@extends('admin.layouts.masters')
@section('content')
<header class="header">
  <div class="container-fluid">
    <div class="row">
      <div class="container d-flex ">
        <i class="ti ti-list fs-8"></i>
        <div class=" mx-4 border border-dark" style="width:13rem; height:2rem;">
          <div class="d-flex flex-row bd-highlight mb-3">
            <div class="p-2 bd-highlight">
              <i class="ti ti-search"></i>
            </div>
            <div class="p-1 bd-highlight">
              <input type="text " id="search-input" class="border border-0 " style="width:9rem;" placeholder="Search....">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<div class="container-fluid bg-light mt-3" style="height: 20rem;">
  <div class="row">
  <div class="col-md-3 mt-4 ">
      <div class="card border-0">
        <div class="d-flex bd-highlight">
          <div class="p-3 mt-3 bd-highlight">

            <i class="ti ti-file fs-4 ms-4"></i>
          </div>
          <div class="p-2 bd-highlight">
            <h5 class="fw-bold text-dark mt-4 ">जम्मा कर्मचारीहरु</h5>
          </div>
        </div>
        <h3 class="text-center mx-5 mb-3 fs-5">{{ $employee_count}}</h3>
      </div>

    </div>
    <div class="col-md-3 mt-4 ">
      <div class="card border-0">
        <div class="d-flex bd-highlight">
          <div class="p-3 mt-3  bd-highlight">

            <i class="ti ti-users fs-4 ms-4"></i>
          </div>
          <div class="p-2 bd-highlight">
            <h5 class="fw-bold mt-4 text-dark">जम्मा फोटो</h5>
          </div>
        </div>
        <h3 class="text-center mx-5 mb-3 fs-5">0</h3>
      </div>
    </div>
    <div class="col-md-3 mt-4 ">
      <div class="card border-0 ">
        <div class="d-flex bd-highlight">
          <div class="p-3 mt-3 bd-highlight">

            <i class="ti ti-slideshow fs-4 ms-4"></i>
          </div>
          <div class="p-2 bd-highlight">
            <h5 class="fw-bold text-dark mt-4 ">जम्मा स्लाइडर</h5>
          </div>
        </div>
        <h3 class="text-center mx-5 mb-3 fs-5">{{ $slider_count }}</h3>
      </div>
    </div>
    <div class="col-md-3 mt-4 ">
      <div class="card border-0">
        <div class="d-flex bd-highlight">
          <div class="p-3 mt-3 bd-highlight">

            <i class="ti ti-license fs-4 ms-4"></i>
          </div>
          <div class="p-2 bd-highlight">
            <h5 class="fw-bold text-dark mt-4 ">सूचना/समाचार</h5>
          </div>
        </div>
        <h3 class="text-center mx-5 mb-3 fs-5">{{$news_count}}</h3>
      </div>
    </div>
    <div class="col-md-3 mt-4 ">
      <div class="card border-0">
        <div class="d-flex bd-highlight">
          <div class="p-3 mt-3 bd-highlight">

            <i class="ti ti-album fs-4 ms-4"></i>
          </div>
          <div class="p-2 bd-highlight">
            <h5 class="fw-bold text-dark mt-4 ">प्रकाशन</h5>
          </div>
        </div>
        <h3 class="text-center mx-5 mb-3 fs-5">{{$publication_count}}</h3>
      </div>
    </div>
    <div class="col-md-3 mt-4 ">
      <div class="card border-0">
        <div class="d-flex bd-highlight">
          <div class="p-3 mt-3 bd-highlight">

            <i class="ti ti-file fs-4 ms-4"></i>
          </div>
          <div class="p-2 bd-highlight">
            <h5 class="fw-bold text-dark mt-4 ">कानुन दस्तावेज</h5>
          </div>
        </div>
        <h3 class="text-center mx-5 mb-3 fs-5">{{ $law_count }}</h3>
      </div>

    </div>
  </div>
</div>
@endsection