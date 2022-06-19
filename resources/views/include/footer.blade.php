<footer class="bg-black" style="background:linear-gradient(0deg, rgb(0, 0, 0), rgba(0, 0, 0, 0.75)), url(https://images.unsplash.com/photo-1454496522488-7a8e488e8606?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80); background-repeat: no-repeat; background-size: cover; background-position: bottom;">
  <div class="container p-footer">
    <div class="row justify-content-between">


      <!-- footer content -->
      <div class="col-lg-3 mt-3 mt-lg-0">
        <h4 class="text-white mb-4">
          {{ app()->getLocale() == 'es'? "लिङ्कहरु":"Links"}}
        </h4>
        <ul class="list-styled">
          <li class="mb-lg-3 mb-2 text-light"><a class="text-light d-block" href="/">{{ app()->getLocale() == 'es'? "गृहपृष्ठ":"HomePage"}}</a></li>
          <li class="mb-lg-3 mb-2 text-light"><a class="text-light d-block" href="/d/programs">{{ app()->getLocale() == 'es'? "कार्यक्रम":"Program"}}</a></li>
          <li class="mb-lg-3 mb-2 text-light"><a class="text-light d-block" href="/s/notice">{{ app()->getLocale() == 'es'? "सूचना":"Notice"}}</a></li>
          <li class="mb-lg-3 mb-2 text-light"><a class="text-light d-block" href="/s/gallery">{{ app()->getLocale() == 'es'? "ग्यालरी":"Gallery"}}</a></li>
          <li class="mb-lg-3 mb-2 text-light"><a class="text-light d-block" href="/d/nagarik-wadapatra">{{ app()->getLocale() == 'es'? "नागरिक वडापत्र":"Citizen's Charter"}}</a></li>
        </ul>
      </div>
      <div class="col-lg-3 mt-3 mt-lg-0">
        <h4 class="text-white mb-4">{{ app()->getLocale() == 'es'? "सम्पर्क":"Contact"}}</h4>
        <ul class="list-unstyled">
          <li class="text-light mb-3">
            <address>{{ app()->getLocale() == 'es'? "ठेगाना: बबरमहल काठमाडौं":"Address:Babar Mahal Kathmandu"}}</address>
          </li>
          <li class="text-light mb-3"><a href="tel:+977 036 420134">{{ app()->getLocale() == 'es'? "फोन: ०१-५३४७५९९, ०१-५३५८४६८":"Phone: 01-5347599, 015358468"}}</a> </li>
          <li class="text-light mb-3"><a href="mailto: khodfo@dof.gov.np">{{ app()->getLocale() == 'es'? "ई-मेल": "email"}}: info@cfsc.gov.np</a></li>
        </ul>
        <!-- social links -->
        <ul class="list-inline social-icon-fotter">
          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        </ul>
      </div>
      <div class="col-lg-3 mt-3 mt-lg-0">
        <iframe src="https://www.hamropatro.com/widgets/calender-small.php" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" class="float-lg-right" style="border:none; overflow:hidden; width:200px; height:290px;" allowtransparency="true"></iframe>
      </div>
    </div>
  </div>
  <!-- copyright -->
  <div class="container copyright-c">
    <div class="row">
      <div class="col-lg-7 col-md-12 text-center text-center text-lg-left mb-3 mb-md-0">
        @if(app()->getLocale() == 'es')
              <p class="mb-0 text-white"> ©सर्वाधिकार@ <span id="year"></span> सामुदायिक वन अध्ययन केन्द्र (सी.एफ.एस.सी-नेपाल) -<span class="color"><a href="http://goldstone.com.np/" target="_blank">GoldStone Consultancy Pvt.
              Ltd.</a></span>
              द्वारा निर्माणित
             
         @elseif(app()->getLocale() == 'en')
            <p class="mb-0 text-white"> ©copyright@ <span id="year"></span> Community Forest Study Center (CFSC-Nepal) - <span class="color"><a href="http://goldstone.com.np/" target="_blank"> GoldStone Consultancy Pvt.
              Ltd.
           </a></span>

        @endif
      </div>
      <div class="col-lg-5 col-md-12 text-center text-lg-right">
        <ul class="list-inline">
          <li class="list-inline-item mx-0"><a class="d-inline-block px-3 text-white border-right"
               href="{{ url(app()->getLocale() == 'es'? 'es/s/complain':'en/s/complain') }}">{{ app()->getLocale() == 'es'? "उजुरी हाल्नुहोस्": "File a complaint"}}</a></li>
          <li class="list-inline-item mx-0"><a class="d-inline-block px-3 text-white" href="/s/contact">
           {{ app()->getLocale() == 'es'? " सम्पर्क गर्नुहोस्": "Contact Us"}}</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer><!-- footer -->