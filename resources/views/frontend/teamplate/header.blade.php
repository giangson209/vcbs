<header id="header">
    <div class="header-top text-center">
        <div class="container">
            <div class="txt-head-top">
                <p>{{ $site_info->title_event }}: <strong>{{ $site_info->time_event }}</strong></p>
            </div>
        </div>
    </div>
    <div class="header-pc">
        <div class="container">
            <div class="content-menu">
                <div class="logo"><a href="/"><img src="{{ $site_info->logo }}" class="img-fluid" alt="VCBS"></a></div>
                <div class="btn-menu">
                    <a href="javascript:void(0)">
                        <span class="icon open_menu">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.66797 24H25.3346" stroke="#336D32" stroke-width="2" stroke-linecap="round"/>
                                <path d="M6.66797 16H25.3346" stroke="#336D32" stroke-width="2" stroke-linecap="round"/>
                                <path d="M6.66797 8H25.3346" stroke="#336D32" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </span>
                        <span class="icon close_menu">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 24L24 8" stroke="#336D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M24 24L8 8" stroke="#336D32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="h-menu">
                    <ul>
                        @foreach($menu[1] ?? [] as $key => $item)
                        <li><a href="{{ @$item->url }}" class="clc-scroll">{{ @$item->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-mobile">
        <div class="container">
            <div class="content-nav">
                <div class="link-menu">
                    <ul>
                        @foreach($menu[1] ?? [] as $key => $item)
                        <li><a href="{{ @$item->url }}" class="clc-scroll">{{ @$item->title }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="social-nav">
                    <ul>
                        @foreach($site_info->social ?? [] as $key => $item)
                        <li><a href="{{ @$item->link }}" target="_blank"><img src="{{ @$item->logo }}" class="img-fluid" alt="{{ @$item->camket->name }}"></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>