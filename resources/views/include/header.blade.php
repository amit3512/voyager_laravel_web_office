<header class="header">
  <!-- Topbar -->
  <div class="topbar">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-8 col-12 d-flex align-items-center">
          <!-- Top Contact -->
          <ul class="top-contact">
            <!-- <li><i class="fas fa-map-marker-alt"></i>@lang('auth.title')</li> -->
            <li><i class="fas fa-map-marker-alt"></i>
              {{ app()->getLocale() == 'es'? 'बबरमहल काठमाडौं':'Babar Mahal Katnmandu' }}
            </li>
            <li><i class="fa fa-phone"></i> {{ app()->getLocale() == 'es'? 'नेपाल फोन:':'Nepal Phone:' }}<a href="tel:+977 123456789">
                {{ app()->getLocale() == 'es'? '०१-५३४७५९९, ०१-५३५८४६८':'01-5347599, 015358468' }}
              </a></li>
            <li><a href="mailto: khodfo@dof.gov.np"><i class="fa fa-envelope"></i>info@cfsc.gov.np</a></li>
            <li><i class="fa fa-calendar"></i>
              {{ app()->getLocale() == 'es'? TodayDate::nepali() : now()->toDateTimeString()  }}
            </li>
          </ul>
          <!-- End Top Contact -->
        </div>

        <div class="col-lg-3 col-md-4 col-12">

          <!-- Contact -->
          <ul class="top-link">
            <li class="dropdown">
              <button style="padding: 0 13% ; font-size: 0.9em" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ app()->getLocale() == 'es'? 'NP':'EN' }}
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <!-- <a class="dropdown-item" href="{{url('en')}}">  {{ app()->getLocale() == 'en'? 'English':'Spanish' }}</a>
                  <a class="dropdown-item"  href="{{url('es')}}">Spainish</a> -->
                <a class="dropdown-item small"  href="{{ url(app()->getLocale() == 'es'? 'en':'es' ) }}"> {{ app()->getLocale() == 'en'? 'Nepali':'English' }}</a>
              </div>
            </li>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li>
              @guest
              <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item text-dark" target="_blank" href="{{ route('voyager.login') }}">Login</a>
                </div>
              </div>
              @else
              <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item text-dark" href="{{ route('voyager.dashboard') }}">Dashboard</a>
                  <a class="dropdown-item text-dark" href="{{ route('voyager.logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">Logout
                  </a>
                  <form id="logout-form" action="{{ route('voyager.logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </div>
              </div>
              @endguest
            </li>

          </ul>
          <!-- End Contact -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Topbar -->
  <div class="container" style="position: relative; margin-top:-12px">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-3 col-md-3 col-3" style="display: inline-block;">
        <!-- Start Logo -->
        <div class="logo" style="height: 98px">
          <a href="#">
            <div class="dfo-logo">
              <img src="/images/nepal_emblem_new.gif">
              <!-- <div class="logo-desc text-center"  style="margin-left:12em">
                <span class="logo-address color-secondary" >
                  {{ app()->getLocale() == 'es'? 'नेपाल सरकार':'Nepal Government' }}
                </span>
                <span class="logo-address color-secondary">
                  {{ app()->getLocale() == 'es'? 'वन तथा वातावरण मन्त्रालय / वन तथा भु संरक्षण बिभाग':'
                                                            Ministry of Forests and Environment/Forest and Land Conservation Department' }}
                </span>
                <span class="logo-title color-primary">  {{ app()->getLocale() == 'es'? 'सामुदायिक वन अध्ययन केन्द्र (सी.एफ.एस.सी-नेपाल)':'Community Forest Study Center (CFSC-Nepal)' }}</span>
                <span class="logo-address color-secondary">  {{ app()->getLocale() == 'es'? 'प्रदेश नं ३, नेपाल':'Province No. 3, Nepal' }} </span>
              </div> -->
            </div>
          </a>
        </div>

        <!-- End Logo -->

        <!-- Mobile Nav -->
        <!-- End Mobile Nav -->
      </div>

      <div class="col-lg-6 col-md-6 col-6">
        <div class="logo">
          <a href="#">
            <div class="dfo-logo">
              <div class="logo-desc text-center">
                <span class="logo-address color-secondary">
                  {{ app()->getLocale() == 'es'? 'नेपाल सरकार':'Nepal Government' }}
                </span>
                <span class="logo-address color-secondary">
                  {{ app()->getLocale() == 'es'? 'वन तथा वातावरण मन्त्रालय':'
                                                            Ministry of Forests and Environment' }}
                </span>
                 <span class="logo-address color-secondary">
                  {{ app()->getLocale() == 'es'? 'वन तथा भु संरक्षण बिभाग':'
                                                            Forest and Land Conservation Department' }}
                </span>
                <span class="logo-title color-primary"> {{ app()->getLocale() == 'es'? 'सामुदायिक वन अध्ययन केन्द्र (सी.एफ.एस.सी-नेपाल)':'Community Forest Study Center (CFSC-Nepal)' }}</span>
                <span class="logo-address color-secondary"> {{ app()->getLocale() == 'es'? 'ववरमहल, काठ्माडाै':'Babarmahal, Kathmandu' }} </span>
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-md-3 col-3">
        <div class="nepal-flag" style="height:70px; float:right;">
          <img src="/images/nepal-flag.gif" alt="" style="height: 100%">
        </div>
      </div>
    </div>


  </div>

  <!-- Header Inner -->
  <div class="header-inner">
    <div class="container">
      <div class="inner">
        <div class="row">
          <div class="col-12">
            <!-- Main Menu -->
            <div class="main-menu">
              <nav class="navigation">
                <ul class="nav menu">
                  <!-- हाम्रो बारेमा  -->
                  @foreach (menu('dfo-khotang','_json') as $item)
                  <li class="{{ checkActive($item) }}">
                    <!-- <a href="{{$item->url}}">{{$item->title}} @if(!$item->children->isEmpty())<i class="icofont-rounded-down"></i>@endif</a> -->
                    @if($item->url == "https://mis.cfsc.gov.np/login")
                    <a href="{{$item->url}}">
                      {{$item->title}}
                    </a>
                    @else
                    <a href="{{ url(app()->getLocale() == 'es'? 'es'.$item->url:'en'.$item->url ) }}">
                      @if(app()->getLocale()=="en")
                      @if($item->title == "गृह पृष्ठ")Home
                      @elseif( $item->title == "कार्यक्रम")Program
                      @elseif( $item->title == "हाम्रो बारेमा")About Us
                      @elseif( $item->title == "प्रगति विवरण")Progress Details
                      @elseif( $item->title == "सूचना")Notice
                      @elseif( $item->title == "डाउनलोड")Download
                      @elseif( $item->title == "सुझाव / गुनासो / उजुरी")Suggestions / Complaints
                      @elseif( $item->title == "ग्यालरी")Gallery
                      @elseif( $item->title == "सम्पर्क")Contact
                      @elseif( $item->title == "सामुदायिक वनको राष्ट्रिय गोष्ठी")National Conference <br/> on Community Forests
                      <!-- @else  {{$item->title}} -->
                      @endif
                      @elseif(app()->getLocale() == "es") {{$item->title}}
                      @endif
                      @endif

                      @if(!$item->children->isEmpty())<i class="icofont-rounded-down"></i>@endif</a>
                    @if(!$item->children->isEmpty())
                    <ul class="dropdown">
                      @foreach ($item->children as $subitem)
                      <li>
                        <!-- <a href="{{$subitem->url}}">{{$subitem->title}}</a> -->
                        <a href="{{ url(app()->getLocale() == 'es'? 'es'.$subitem->url:'en'.$subitem->url ) }}">
                          
                        <!-- {{$subitem->title}} -->
                      @if(app()->getLocale()=="en")
                      @if($subitem->title == "परिचय")Introduction
                      @elseif( $subitem->title == "भिजन / मिसन / उद्देश्य")Vision/Mission/Goals
                      @elseif( $subitem->title == "नागरिक वडापत्र")Citizen's Charter 
                      @elseif( $subitem->title == "कर्मचारी विवरण")Employee Details
                      @elseif( $subitem->title == "चौमासिक प्रगति विवरण")Trimester Progress Report
                      @elseif( $subitem->title == "वार्षिक प्रगति विवरण")Yearly Progress Report
                      @elseif( $subitem->title == "ऐन तथा नियमावली")Act Regulation
                      @elseif( $subitem->title == "सामुदायिक वनको राष्ट्रिय गोष्ठी")National Conference on Community Forests
                      @elseif( $subitem->title == "अन्य")Others
                      @endif
                      @elseif(app()->getLocale() == "es") {{$subitem->title}}
                      @endif
                      
                      </a>

                        @endforeach
                    </ul>
                    @endif
                  </li>
                  @endforeach
                </ul>
              </nav>
            </div>
            <!--/ End Main Menu -->
          </div>
          <div class="mobile-nav" style="width: 100%; padding-right: 20px; background: #1453B4">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ End Header Inner -->
</header>
{{-- marquee section --}}
<div class="p-0 d-flex" style="height: 45px; background:#e4e4e4" role="alert">
  <div class="container d-flex">
    <div class="mynotice container-fluid px-0 d-flex align-items-center position-relative">
      <marquee onmouseover="this.stop()" onmouseout="this.start()">
        @foreach (\App\Lists::where('latest_notice',1)->orderBy('created_at','desc')->get() as $item)
        @php
        $url = '#';
        if(!empty(json_decode($item->file))){
        $url = '/storage/'.json_decode($item->file)[0]->download_link;
        $target = '_blank';
        }

        if($item->body){
        $url = '/d/'.$item->category->slug.'?id='.$item->id;
        $target = '_self';
        }
        @endphp
        <a href="{{$url}}" target="{{ $target }}">&#10070; {{$item->title}}</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        @endforeach

      </marquee>
      <span class="invi">

      </span>
      <div class="notice position-absolute d-flex align-items-center px-3" style="background:rgb(204, 0, 0); color:white; top:0; height:100%">
        <span> {{ app()->getLocale() == 'es'? 'सुचना':'Notice' }}</span>
      </div>
    </div>


  </div>
</div>
{{-- end of marquee section --}}

@php
function checkActive($menu){

// for homepage
if(Request::segment(1)==null && $menu->url=='/'){
return 'active';
}

// generating slug equivalent to menu->url
$temp_slug = '/'.Request::segment(1).'/'.Request::segment(2);

// for menu without and submenu
if($menu->url==$temp_slug){
return 'active';
}

// for menu with submenu
if($menu->children->where('url',$temp_slug)->first()){
return 'active';
}



}
@endphp