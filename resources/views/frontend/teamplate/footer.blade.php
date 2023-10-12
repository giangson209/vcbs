<footer id="contact">
    <div class="container">
        <div class="content-footer">
            <div class="row">
                <div class="col-md-4">
                    <div class="item-fter">
                        <div class="logo"><img src="{{ $site_info->logo_ft }}" class="img-fluid" alt=""></div>
                        <div class="desc">
                            {!! nl2br($site_info->intro) !!}
                        </div>
                        <div class="social">
                            <ul>
                                @foreach($site_info->social ?? [] as $key => $item)
                                <li><a href="{{ @$item->link }}" target="_blank"><img src="{{ @$item->logo }}" class="img-fluid" alt="{{ @$item->camket->name }}"></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item-fter">
                       <div class="head-fter">Về chúng tôi</div>
                        <div class="info">
                            <ul>
                                <li>{{ $site_info->address }}</li>
                                <li>{{ $site_info->hotline }}</li>
                                <li><a href="{{ $site_info->link }}" target="_blank"><span>{{ $site_info->link }}</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item-fter">
                       <div class="head-fter c-white">Tải ứng dụng VCBS Mobile</div>
                        <div class="info">
                            <ul>
                                <li><a href="{{ $site_info->link_ios }}" target="_blank"><img src="{{ __BASE_URL__ }}/images/app-1.svg" class="img-fluid" alt=""></a></li>
                                <li><a href="{{ $site_info->link_android }}" target="_blank"><img src="{{ __BASE_URL__ }}/images/app-2.svg" class="img-fluid" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>