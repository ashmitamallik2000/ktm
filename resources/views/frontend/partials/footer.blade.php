<footer class="footer ">
    <div class="container ">
        <div class="row ">
            <div class="col-md-4 py-5">

                <h5 class="fw-bold text-white">{{officeSetting()?->office_name}}</h5>
                <h6 class="fw-bold text-white">नगर कार्यपालिकाको कार्यालय, वाग्मती प्रदेश</h6>
                <p class="text-white">काठमाडौँ प्लाजा, कमलादी</p>
                <ul>
                    <li class=" text-white mt-2"><i class="fa-solid fa-phone text-white mx-2 mb-2"></i>{{officeSetting()?->phone}}</li>
                    <li class="text-white mt-2"><i class="fa fa-fax text-white mx-2 mb-2" aria-hidden="true"></i>फ्याक्स:
                        ०१५९०९०३२</li>
                    <li class="text-white mt-2 "><i class="fa fa-envelope mx-2" aria-hidden="true"></i>ईमेल:{{officeSetting()?->email}}
                    </li>
                </ul>

            </div>
            <div class="col-md-4 py-5">
                <h5 class="text-white fw-bold">महत्वपूर्ण लिंकहरु</h5>
                @foreach(links() as $link)
                <ul>
                    <li class="text-white  "><i class="fas fa-link text-white  me-1"></i><a class="text-white " href="{{$link->Url}}">{{$link->title}}
                        </a></li>


                </ul>
                @endforeach
            </div>
            <div class="col-md-4 py-5">
                <h5 class="fw-bold text-white">गुगल म्याप</h5>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28258.09050744015!2d85.32178!3d27.709217!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19065a8e57ef%3A0x48ed93942e26cac8!2sKathmandu%20Plaza%2C%20Kamaladi%20Rd%2C%20Kathmandu%2044600%2C%20Nepal!5e0!3m2!1sen!2sus!4v1713420076478!5m2!1sen!2sus" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <hr class="text-white ">
            <div class="col-md-4 mt-2 mb-3">
                <ul>
                    <li class="text-white"><i class="fa-solid fa-copyright text-white mx-1"></i> 2024 काठमाडौँ
                        महानगरपालिका</li>
                </ul>
            </div>
            <div class="col-md-4 d-flex">
                <p class="text-white">आगन्तुकहरु:</p>
                <span class="text-primary bg-white rounded mx-2 fw-bold" style="height:30px; width:75px">123,22,11</span>
            </div>
            <div class="col-md-4">
                <div class="d-flex">
                    <div class="col-md-2">
                        <a href="#"><i class=" bg-white rounded d-flex justify-content-center
                        align-items-center fa-brands fa-facebook-f fs-5 text-primary" style="height:40px; width:40px;"></i></a>
                    </div>
                    <div class="col-md-2 ">
                        <a href="#"><i class=" bg-white rounded d-flex justify-content-center
                        align-items-center fa-brands fa-x-twitter fs-5  text-primary" style="height:40px; width:40px;"></i></a>
                    </div>
                    <div class="col-md-2 ">
                        <a href="#"><i class="bg-white rounded d-flex justify-content-center
                        align-items-center fa-brands fa-youtube fs-5  text-primary" style="height:40px; width:40px;"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>