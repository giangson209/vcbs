@extends('frontend.master')
@section('main')
<main>
    <section class="mar-top d-none">
        <marquee>
            <ul>
                <?php
                for ($x = 0; $x <= 40; $x++) { ?>
                  <li>{{ $site_info->title_event }}: <strong>{{ $site_info->time_event }}</strong></li>
                <?php }
                ?>
            </ul>
        </marquee>
    </section>
    <section class="box-banner">
        <div class="avarta-banner">
            <img src="{{ $site_info->banner }}" class="img-fluid w-100 bn-pc" alt="VCBS">
            <img src="{{ __BASE_URL__ }}/images/banner-mb.png" class="img-fluid w-100 bn-mb d-none" alt="">
        </div>
        <div class="link-banner text-uppercase">
            <a href="{{ $site_info->link_banner }}" class="btn-main blink wow fadeInUp wHighlight" data-wow-duration="1s" target="_blank">{{ $site_info->title_banner }}</a>
        </div>
    </section>
    <section class="box-endow" id="endow">
        <div class="container">
            <div class="title text-center">
                <h2 class="wow fadeInUp wHighlight" data-wow-duration="1s">{{ $site_info->title_intro }}</h2>
                <div class="desc-title wow fadeInUp wHighlight" data-wow-duration="1s">
                    {!! nl2br($site_info->desc_intro) !!}
                </div>
            </div>
            <div class="list-endow text-center">
                <div class="row">
                    <div class="col-md-6 wow fadeInRight wHighlight" data-wow-duration="1s">
                        <div class="item-endow">
                            <div class="avarta"><img src="{{ $site_info->banner_ud_1 }}" class="img-fluid w-100" alt=""></div>
                            <div class="info">
                                <div class="desc">{!! @$site_info->title_ud_1 !!}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInRight wHighlight" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="item-endow">
                            <div class="avarta"><img src="{{ $site_info->banner_ud_2 }}" class="img-fluid w-100" alt=""></div>
                            <div class="info">
                                <div class="desc">
                                    {!! @$site_info->title_ud_2 !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 wow fadeInRight wHighlight" data-wow-duration="1s">
                        <div class="item-endow endow-txt">
                            <h3>{{ $site_info->title_obj }}</h3>
                            <div class="txt-endow">{!! nl2br($site_info->des_obj) !!}</div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInRight wHighlight" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="item-endow endow-txt">
                            <h3>{{ $site_info->dk_obj }}</h3>
                            <div class="btn-endow">
                                <a href="{{ $site_info->link_obj }}" class="btn-main" target="_blank">Xem tại đây</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-formality">
        <div class="container">
            <div class="title text-center">
                <h2 class="wow fadeInUp wHighlight" data-wow-duration="1s">{!! nl2br($site_info->title_ht) !!}</h2>
                <div class="desc-title wow fadeInUp wHighlight" data-wow-duration="1s">
                    {{ $site_info->desc_ht }}
                </div>
            </div>
            <div class="list-formality">
                <div class="row">
                    <div class="col-md-6 wow zoomIn wHighlight" data-wow-duration="1s">
                        <div class="item-formality">
                            <h4>{{ $site_info->title_ht_1 }}</h4>
                            <h3>{{ $site_info->loai_ht_1 }}</h3>
                            <div class="link-more">
                                <a href="{{ $site_info->link_ht_1 }}" class="btn-main"><span>{{ $site_info->nut_ht_1 }}</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow zoomIn wHighlight" data-wow-duration="1s">
                        <div class="item-formality no-vcb">
                            <h4>{{ $site_info->title_ht_2 }}</h4>
                            <h3>{{ $site_info->loai_ht_2 }}</h3>
                            <div class="link-more">
                                <a href="{{ $site_info->link_ht_2 }}" class="btn-main"><span>{{ $site_info->nut_ht_2 }}</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-instruct" id="instruct">
        <div class="avr-abs"><img src="{{ __BASE_URL__ }}/images/bg-bot.png" class="img-fluid w-100" alt=""></div>
        <div class="container">
            <div class="content-instruct text-center" id="instruct-1">
                <div class="title wow fadeInUp wHighlight" data-wow-duration="1s">
                    {!! @$site_info->title_hd_1 !!}
                </div>
                <div class="list-step">
                    <div class="row">
                        <?php $j = 1; ?> 
						@foreach($site_info->hd1 ?? [] as $key => $item)
                        <div class="col-md-3 wow fadeInRight wHighlight" data-wow-duration="1s" data-wow-delay="0.{{ $j }}s">
                            <div class="item-step">
                                <div class="avarta"><img src="{{ @$item->image }}" class="img-fluid" alt="{{ @$item->content }}"></div>
                                <div class="info">
                                    <h3>Bước {{ $j }}</h3>
                                    <div class="desc">{!! @$item->content !!}</div>
                                </div>
                            </div>
                        </div>
						<?php $j++; ?> 
						@endforeach
                    </div>
                </div>
            </div>
            <div class="content-instruct text-center" id="instruct-2">
                <div class="title wow fadeInUp wHighlight" data-wow-duration="1s">
                    {!! @$site_info->title_hd_2 !!}
                </div>
                <div class="list-step">
                    <div class="row">
						<?php $i = 1; ?> 
						@foreach($site_info->hd2 ?? [] as $key => $item)
                        <div class="col-md-3 wow fadeInRight wHighlight" data-wow-duration="1s" data-wow-delay="0.{{ $i }}s">
                            <div class="item-step">
                                <div class="avarta"><img src="{{ @$item->image }}" class="img-fluid" alt="{{ @$item->content }}"></div>
                                <div class="info">
                                    <h3>Bước {{ $i }}</h3>
                                    <div class="desc">{!! @$item->content !!}</div>
                                </div>
                            </div>
                        </div>
						<?php $i++; ?> 
						@endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@stop