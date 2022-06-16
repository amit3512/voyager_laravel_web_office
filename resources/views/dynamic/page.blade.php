@extends('myapp.layout')

@section('title',setting('site.title'))

@section('body')
    <!-- Breadcrumbs -->
    @include('include.breadcrumps',[
        's_title',
        'hasParent',
        'title'=>app()->getLocale() =='es' ? $data->title:$data->title_eng,
        ])
    <!-- End Breadcrumbs -->

    <!-- Start Feature section Area -->
    <div class="inner-content-wrapper blog-sec blog-area">
        <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-9 mb-30">
            <div class="blog-details">
                <div class="post-text mb-20">
                    @if(app()->getLocale()=='en')
                    {!! $data->body_eng !!}
                    @else
                    {!! $body !!}
                    @endif
                </div>
            </div>
            </div>

            @include('include.sidebar',['s_lists','s_title'])

        </div>
        </div>
    </div>
    <!-- End Feature section Area -->
@endsection
