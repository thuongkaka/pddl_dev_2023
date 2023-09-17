@extends('front.layout.app')

@section('main_content')

<br/>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            Trang web đang trong quá trình phát triển...
        </div>
    </div>
</div>
<div style="height: 350px;"></div>


<!--@if($setting_data->video_status == 'Show')
<div class="video-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="video-heading">
                    <h2>{{ VIDEOS }}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="video-carousel owl-carousel">
                    @foreach($video_data as $item)

                    @if($loop->iteration > $setting_data->video_total)
                        @break
                    @endif

                    <div class="item">
                        <div class="video-thumb">
                            <img src="http://img.youtube.com/vi/{{ $item->video_id }}/0.jpg" alt="">
                            <div class="bg"></div>
                            <div class="icon">
                                <a href="http://www.youtube.com/watch?v={{ $item->video_id }}" class="video-button"><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                        <div class="video-caption">
                            <a href="javascript:void;">{{ $item->caption }}</a>
                        </div>
                        <div class="video-date">
                            @php
                            $ts = strtotime($item->created_at);
                            $created_date = date('d F, Y',$ts);
                            @endphp
                            <i class="fas fa-calendar-alt"></i> {{ $created_date }}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endif-->

@if($home_ad_data->above_footer_ad_status == 'Show')
<div class="ad-section-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if($home_ad_data->above_footer_ad_url == '')
                <img src="{{ asset('uploads/'.$home_ad_data->above_footer_ad) }}" alt="">
                @else
                <a href="{{ $home_ad_data->above_footer_ad_url }}"><img
                        src="{{ asset('uploads/'.$home_ad_data->above_footer_ad) }}" alt=""></a>
                @endif
            </div>
        </div>
    </div>
</div>
@endif


<script>
    (function ($) {
        $(document).ready(function () {
            $("#category").on("change", function () {
                var categoryId = $("#category").val();
                if (categoryId) {
                    $.ajax({
                        type: "get",
                        url: "{{ url('/subcategory-by-category/') }}" + "/" + categoryId,
                        success: function (response) {
                            $("#sub_category").html(response.sub_category_data);
                        },
                        error: function (err) {

                        }
                    })
                }
            })
        });
    })(jQuery);
</script>

@endsection
