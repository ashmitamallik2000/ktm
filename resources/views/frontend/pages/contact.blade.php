@extends('layout.master')
@section('content')
<div class="container-fluid bg-light">
    <div class="container py-5">
        <h3 class="text-dark fw-bold ms-5">सम्पर्क</h3>
        <a class="text-decoration-none text-dark ms-5 " href="index.html">गृहपृष्ठ</a><i class="fas fa-greater-than text-muted ms-2"></i><a class="text-decoration-none text-dark ms-2 link-primary" href="contact.html">सम्पर्क</a>
    </div>
</div>

<div class="container border rounded mt-3 mb-3">
    <div class="row">
        <div class="col-md-5 py-3">
            <iframe class="ms-3" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28258.09050744015!2d85.32178!3d27.709217!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19065a8e57ef%3A0x48ed93942e26cac8!2sKathmandu%20Plaza%2C%20Kamaladi%20Rd%2C%20Kathmandu%2044600%2C%20Nepal!5e0!3m2!1sen!2sus!4v1713420076478!5m2!1sen!2sus" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-md-7 ">
            <!-- <h5 class="text-dark fw-bold mt-5 ms-5">सम्पर्क</h5>
                <ul>
                    <li class=""><i class="fa fa-map-marker mx-2 text-primary" aria-hidden="true"></i>नगर कार्यपालिकाको कार्यालय, वाग्मती प्रदेश
                        काठमाडौँ प्लाजा, कमलादी</li>
                    <li class="mt-2"><i class="fa-solid fa-phone text-primary mx-2"></i>Phone: ०१५९०९०३२, ०१५९०९२५२</li>
                    <li class="mt-2"><i class="fa fa-envelope mx-2 text-primary" aria-hidden="true"></i>E-mail:
                        mayor@kathmandu.gov.np<br>ceo@kathmandu.gov.np<br>info@kathmandu.gov.np</li>
                </ul> -->
            <h5 class="fw-bold m-0 py-3">सम्पर्क विवरण</h5>
            <form class="border rounded mb-3">
                <div class="row">
                    <div class="col ms-2 mt-2 ">
                        <label class="form-label">पुरा नाम *</label>
                        <input placeholder="पुरा नाम *" type="text" id="name" class="form-control">
                    </div>
                    <div class="col me-2 mt-2">
                        <label class="form-label">फोन नं. *</label>
                        <input placeholder="फोन नं. *" type="number" id="phone" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col ms-2 py-3">
                        <label class="form-label">ईमेल *</label>
                        <input placeholder="ईमेल *" type="email" id="email" class="form-control">
                    </div>
                    <div class="col  me-2 py-3">
                        <label class="form-label">सम्पर्कको उद्देश्य *</label>
                        <input placeholder="सम्पर्कको उद्देश्य *" type="text" id="discription" class="form-control">
                    </div>
                </div>
                <div class="col ms-2 me-2">
                    <label class="form-label">सन्देश *</label>
                    <textarea rows="3" placeholder="सन्देश *" id="message" class="form-control"></textarea>
                </div>
                <button class="btn mt-3 mb-3 ms-2 text-white">पेस गर्नुहोस</button>
            </form>
        </div>
    </div>
</div>
@endsection