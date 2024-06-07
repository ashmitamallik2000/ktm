<nav class="navbar navbar-expand-lg navbar-light sticky-top ">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-3 ">
                <li class="nav-item ">
                    <a class="nav-link active text-white fw-bold " aria-current="page" href="{{route('index')}}">गृहपृष्ठ</a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle text-white fw-bold " href="about.html" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        परिचय
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item " href="{{route('about')}}">परिचय</a></li>
                        <li><a class="dropdown-item " href="{{route('candidate')}}">जनप्रतिनिधि</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        प्रतिवेदन
                    </a>
                    <ul class="dropdown-menu text-white" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('law')}}">कनुन तथा निर्देशक</a></li>
                    </ul>
                </li>
                <li class="nav-item ">
                    <a class="nav-link active text-white fw-bold" aria-current="page" href="{{route('link')}}">महत्त्वपूर्ण लिङ्कहरू</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link active text-white fw-bold" aria-current="page" href="{{route('contact')}}">सम्पर्क</a>
                </li>
            </ul>

            <div class="container">
                <div class="input-group ">
                    <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button">
                            <i class="fa fa-search text-white"></i>
                        </button>
                    </div>
                </div>
            </div>

        </div>
</nav>