<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>कृषि तथा भूमि व्यवस्था मन्त्रालय</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/backend/images/logos/image.png') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/backend/css/styles.min.css') }}" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-10 col-lg-7">
                        <div class="card">
                            <div class="card  mx-2 my-3">
                                {{-- <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="{{asset('assets/backend/images/logos/dark-logo.svg')}}" width="180" alt="">
                </a> --}}
                                <div class="d-flex ">
                                    <div class="col-md-6 d-flex flex-column align-items-center justify-content-center text-center text-white"
                                        style="background-color: #2460B9;">
                                        <img src="{{ asset('assets/backend/images/logos/images.jpg') }}" class="mb-2"
                                            width="150" alt="">
                                        <p class="fw-bold fs-4">काठमाडौं उपमहानगरपालिका</p>
                                        <p class="fw-bold fs-3">नगर कार्यपालिकाको कार्यलयले,बागमती प्रदेश</p>
                                    </div>

                                    <div class="col-md-6 mx-3 card-body">
                                        <p class="text-center fs-8  text-dark"><i class="fa fa-user-lock"></i>
                                        </p>
                                        <form action="{{ route('login.signIn') }}" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                                <input type="email" class="form-control" name="email"
                                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                            <div class="mb-4 bg-white">
                                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                                <input type="password" class="form-control " name="password"
                                                    id="exampleInputPassword1">
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-4">
                                                <div class="form-check">
                                                    <input class="form-check-input primary" type="checkbox"
                                                        value="" id="flexCheckChecked" checked>
                                                    <label class="form-check-label text-dark" for="flexCheckChecked">
                                                        Remeber this Device
                                                    </label>
                                                </div>
                                            </div>
                                           <div class="d-flex justify-content-center ">
                                            <button class="btn btn-success m-2  py-2 fs-4 mb-4 rounded-2"><i class="fa fa-lock"></i> Log
                                                In</button>
                                                <button class="btn m-2 py-2 fs-4 mb-4 rounded-2 text-white" style="background-color: #ef5e6f;"><i class="fas fa-times-circle"></i>
                                                    reset</button>
                                           </div>
                                           <div class="col-md-12 text-lg-end">
                                            <a class="ms-1 fw-bold" href="#">Forget Password?</a>
                                           </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="foot text-white" style="background-color: #2460B9;">
        <div class="py-6 px-6 text-center mx-2">
            <p class="mb-0 fs-4">2024&copy;Design and Developed by <a
                    href="https://www.facebook.com/profile.php?id=100016876090011" target="_blank"
                    class="pe-1 text-primary text-decoration-underline">Ashmita Mallik</a> Distributed by <a
                    href="https://www.ninjainfosys.com/">Ninja Infosys</a></p>
        </div>

    </div>
    <script src="{{ asset('assets/backend/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/backend/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>