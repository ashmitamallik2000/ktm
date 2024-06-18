@extends('layout.master')
@section('content')
<div class="container-fluid bg-light">
    <div class="container py-5">
        <h3 class="text-dark fw-bold ms-5">ऐन, कानुन तथा निर्देशिका</h3>
        <a class="text-decoration-none text-dark ms-5 " href="index.html">गृहपृष्ठ</a><i class="fas fa-greater-than text-muted ms-2"></i><a class="text-decoration-none text-dark ms-2 link-primary" href="law.html">ऐन, कानुन तथा निर्देशिका</a>
    </div>
</div>
<div class="container my-4">
    {{$law->date}}
    <div class="row mt-3">
        <div class="col-md-8">
            <iframe src="{{$law->photo}}" height="600px" width="100%"></iframe>
        </div>
        <div class="col-md-4">

        </div>
    </div>
</div>

</div>
@endsection