@extends('myapp.layout')

@section('title','सम्पर्क')

@section('body')
<!-- Breadcrumbs -->

@include('include.breadcrumps',[
'title'=>Request::is('en/s/contact') ? 'Contact':'सम्पर्क',
'hasParent'=>0,
])
<div class="inner-content-wrapper contact-section pt-0 bg-light">
    <div class="container">

        <div class="contact-info">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            @if(count($errors)>=1)
            <div class="alert alert-danger">
                Oops!! There was a problem when sending the message. Please recheck and submit it.
            </div>
            @endif
            @if(Request::is('es/s/contact'))
            <div class="sec-title centered mb-20">
                <h1>सम्पर्कमा रहनुहोला</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="contact-info-block">
                        <i class="fas fa-map-marker-alt fa-2x mb-2"></i>
                        <h5>ठेगाना</h5>
                        <div class="text">डिभिजन वन कार्यलय, खोटाङ्ग</div>
                        <div class="text">प्रदेश नं १, नेपाल</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="contact-info-block">
                        <i class="fa fa-envelope fa-2x mb-2"></i>
                        <h5>ई-मेल</h5>
                        <div class="text">khodfo@dof.gov.np.com</div>
                        <div class="text">info@dfokhotang.gov.np</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="contact-info-block fa-2x mb-2" style="min-height: 197px">
                        <i class="fa fa-phone"></i>
                        <h5>फोन</h5>
                        <div class="text">+९७७ ०३६ ४२०१३४ </div>
                    </div>
                </div>
            </div>
            @else
            <div class="sec-title centered mb-20">
                <h1>Contact</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="contact-info-block">
                        <i class="fas fa-map-marker-alt fa-2x mb-2"></i>
                        <h5>Address</h5>
                        <div class="text">Division Forest Office, Khotang</div>
                        <div class="text">Province No.1, Nepal</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="contact-info-block">
                        <i class="fa fa-envelope fa-2x mb-2"></i>
                        <h5>Email</h5>
                        <div class="text">khodfo@dof.gov.np.com</div>
                        <div class="text">info@dfokhotang.gov.np</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="contact-info-block fa-2x mb-2" style="min-height: 197px">
                        <i class="fa fa-phone"></i>
                        <h5>Phone</h5>
                        <div class="text">+977 036420134</div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->
@if(Request::is('es/s/contact'))
<div class="inner-content-wrapper contact-section">
    <div class="container">
        <div class="sec-title centered mb-20">
            <h1>सन्देश पठाउनुहोस्</h1>
        </div>
        <div class="default-form-area">
            <p class="text-secondary primary text-left font-weight-normal">तपाईंले निम्न फारम मार्फत आफ्ना सन्देश यस डिभिजन वन कार्यालयलाई पठाउन सक्नुहुन्छ। सो
                तरिका ले पठायिएको कुनै पनि सन्देशले तपाईंले भरेका निम्न विवरण बाहेकका ब्यक्तिगत जानकारी सम्प्रेशन गरेर राख्ने छैन। तपाईंकाे
                सन्देशलाई यस डिभिजन वन कार्यालयले गम्भिर्ताका साथ हेर्नेछ।</p>
            <form action="/contact" id="contact-form" method="POST">
                @csrf
                <div class="row clearfix">
                    <div class="col-md-6 column">
                        <div class="form-group">
                            <input type="text" name="form_name" class="form-control" value="{{ old('form_name') }}" placeholder="नाम" required>
                        </div>
                    </div>
                    <div class="col-md-6 column">
                        <div class="form-group">
                            <input type="email" name="form_email" class="form-control required email" value="{{ old('form_email') }}" placeholder="ई-मेल" required>
                        </div>
                    </div>
                    <div class="col-md-6 column">
                        <div class="form-group">
                            <input type="text" name="form_phone" value="{{ old('form_phone') }}" class="form-control" value="" placeholder="फोन">
                        </div>
                    </div>
                    <div class="col-md-6 column">
                        <div class="form-group">
                            <input type="text" name="form_address" class="form-control" value="{{ old('form_address') }}" placeholder="ठेगाना">
                        </div>
                    </div>
                    <div class="col-md-12 column">
                        <div class="form-group">
                            <textarea name="form_message" class="form-control textarea required" placeholder="सन्देश">{{ old('form_message') }}</textarea>
                        </div>
                    </div>
                </div>
                @if(env('CAPTCHA_KEY'))
                <div class="row clearfix mt-2 mb-2">
                    <div class="col-md-12 column">
                        <div class="input-group d-flex justify-content-center">
                            <div class="g-recaptcha  is-invalid" data-sitekey="{{ env('CAPTCHA_KEY') }}">
                            </div>
                            @error('g-recaptcha-response')
                            <div class="invalid-feedback">
                                {{ $errors->first('g-recaptcha-response') }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>

                @endif
                <div class="contact-section-btn">
                    <div class="form-group style-two">
                        <button class="bttn" type="submit" data-loading-text="Please wait...">पठाउनुहोस्</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
@else
<div class="inner-content-wrapper contact-section">
    <div class="container">
        <div class="sec-title centered mb-20">
            <h1>Send Message</h1>
        </div>
        <div class="default-form-area">
            <p class="text-secondary primary text-left font-weight-normal">
                You can send your message to this Division Forest Office through the following form. 
                Any message sent in that way is as follows.
                Personal information other than details will not be transmitted.
                Your Division One Office will take your message seriously.
            </p>
            <form action="/contact" id="contact-form" method="POST">
                @csrf
                <div class="row clearfix">
                    <div class="col-md-6 column">
                        <div class="form-group">
                            <input type="text" name="form_name" class="form-control" value="{{ old('form_name') }}" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="col-md-6 column">
                        <div class="form-group">
                            <input type="email" name="form_email" class="form-control required email" value="{{ old('form_email') }}" placeholder="ई-मेल" required>
                        </div>
                    </div>
                    <div class="col-md-6 column">
                        <div class="form-group">
                            <input type="text" name="form_phone" value="{{ old('form_phone') }}" class="form-control" value="" placeholder="Phone">
                        </div>
                    </div>
                    <div class="col-md-6 column">
                        <div class="form-group">
                            <input type="text" name="form_address" class="form-control" value="{{ old('form_address') }}" placeholder="Address">
                        </div>
                    </div>
                    <div class="col-md-12 column">
                        <div class="form-group">
                            <textarea name="form_message" class="form-control textarea required" placeholder="Message">{{ old('form_message') }}</textarea>
                        </div>
                    </div>
                </div>
                @if(env('CAPTCHA_KEY'))
                <div class="row clearfix mt-2 mb-2">
                    <div class="col-md-12 column">
                        <div class="input-group d-flex justify-content-center">
                            <div class="g-recaptcha  is-invalid" data-sitekey="{{ env('CAPTCHA_KEY') }}">
                            </div>
                            @error('g-recaptcha-response')
                            <div class="invalid-feedback">
                                {{ $errors->first('g-recaptcha-response') }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>

                @endif
                <div class="contact-section-btn">
                    <div class="form-group style-two">
                        <button class="bttn" type="submit" data-loading-text="Please wait...">Send</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
@endif
@endsection