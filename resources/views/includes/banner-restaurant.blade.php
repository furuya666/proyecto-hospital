<!-- SubHeader =============================================== -->
<section class="parallax-window" data-parallax="scroll" data-image-src="{!! Asset::get_image_path('business-cover_image', 'normal', $item->cover_image) !!}" data-natural-width="1400" data-natural-height="470">
    <div id="subheader">
        <div id="sub_content">
            <div id="thumb">{!! Asset::get_image('business-image', 'normal', $item->image, '') !!}</div>
            <div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i> <!--(<small><a href="detail_page_2.html">Read 98 reviews</a></small>)--></div>
            <h1>{{ $item->name }}</h1>
            <div><em>
                {!! $item->description !!}
            </em></div>
            <div><i class="icon_pin"></i> 
                {{ $item->city->name }} / 
                @if($item->address)
                    {{ $item->address }}
                @elseif($item->full_address)
                    {{ $item->full_address }}
                @endif
            </div>
        </div><!-- End sub_content -->
    </div><!-- End subheader -->
</section><!-- End section -->
<!-- End SubHeader ============================================ -->

<div id="position">
    <div class="container">
        <ul>
            <li><a href="{{ url('inicio') }}">Inicio</a></li>
            @if($item->type)
                <li><a href="#0">{{ $item->type->name }}</a></li>
            @endif
            <li>{{ $item->name }}</li>
        </ul>
        <a href="#0" class="search-overlay-menu-btn"><i class="icon-search-6"></i> Buscar</a>
    </div>
</div><!-- Position -->
