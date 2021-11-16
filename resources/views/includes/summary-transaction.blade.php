<div class="ajaxcontent lightbox">
    <style>
        body.admin-site-2 .featherlight .featherlight-content { width: 850px; }
        @media screen and (max-width: 767px) {
            .col_npadding-resp { padding: 0; }
            .col_npadding-resp-left { padding-left: 0; }
            .col_npadding-resp-rigth { padding-right: 0; }
            body.admin-site-2 .featherlight .featherlight-content .content_imb-transactions .contnt { padding: 10px; }
            body.admin-site-2 .featherlight .featherlight-content .content_imb-transactions .contnt h5 { font-size: 12px; }
            body.admin-site-2 .featherlight .featherlight-content .content_imb-transactions .contnt p { font-size: 12px; }
            body.admin-site-2 .featherlight .featherlight-content .content_imb-transactions .btn_in { font-size: 14px; }
        }
    </style>
    <h5 class="title_init">Resumen de transacción</h5>
    <div class="row row_type">
        <div class="col-md-5 col-12">
            <div class="content_imb-desc">
                <h2>De: @if($item->profile&&$item->profile->customer){{ $item->profile->customer->name }} @else {{ $item->profile->device->name }} @endif</h2>
                <h3>PLYETVDN</h3>
                <h4>Tipo: <span>Cobro</span></h4>
                <div class="content_img">
                    <img src="{{ asset('assets/img/user_default.png') }}" alt="User">
                </div>
                <p class="text-uppercase">{{ trans('master::admin.'.$item->status) }}</p>
            </div>
        </div>
        <div class="col-md-7 col-12 col_npadding-resp">
            <div class="content_imb-transactions">
                <div class="row row_type">
                    <div class="col-md-6 col-6 col-xs-6 col_npadding-resp-right">
                        <div class="contnt int_1">
                            <h5>Monto del cobro:</h5>
                            <p>Bs. {{ $item->amount }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-6 col-xs-6 col_npadding-resp-left">
                        <div class="contnt int_2">
                            <h5>Detalles del cobro:</h5>
                            <p>{{ $item->detail }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-6 col-xs-6 col_npadding-resp-right">
                        <div class="contnt int_3">
                            <h5>Fecha de cobro:</h5>
                            <p>{{ $item->payment_date }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-6 col-xs-6 col_npadding-resp-left">
                        <div class="contnt int_2">
                            <h5>Estado del cobro:</h5>
                            <p>{{ trans('master::admin.'.$item->status) }}</p>
                        </div>
                    </div>
                    <div class="col-12 col-xs-12">
                        <h5 class="subt">Descarga y comparte el comprobante de la transacción</h5>
                        <a class="btn_in btn_donwload btn_share" href="{{ \Func::paymentConfirmation($item->id) }}" download="transaction_{{$item->id}}.pdf">Descargar y Compartir</a>
                        <a class="btn_in view_doc" target="_blank" href="{{ $item->invoice }}">Ver Factura de Comisión</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>