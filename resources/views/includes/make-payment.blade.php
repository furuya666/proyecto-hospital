<div id="makepayment" class="makepayment_content-popup is_popup">
    <div class="swiper-makepayment">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="content_lightbx">
                    <h5 class="title_init">Realizar cobro</h5>
                    <hr>
                    <div class="content-qr_generate">
                        <img src="{{ asset('assets/img/qr.JPG') }}" alt="QR">
                    </div>
                    <br>
                    <div class="row row_type align_centr justify_centr">
                        <div class="col-md-6 col-xs-12 col-12">
                            <a href="#" download="QR Make Payment.pdf" class="btn_in">Descargar QR</a>
                        </div>
                        <div class="col-md-6 col-xs-12 col-12">
                            <button class="btn_in select_options other-third_btn" type="button">Seleccionar otra opción</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="content_lightbx">
                    <h5 id="text-payment-request" class="title_init">Realizar cobro</h5>
                    <hr>
                    <form action="#">
                        <div class="content-select_makepayment row_type ds_column align_centr justify_centr">
                            <br>
                            <h5>Ingrese el monto del cobro</h5>
                            <br>
                            <div class="content_text">
                                <label for="amount">Monto en bolivianos (Bs.):</label>
                                <input id="amount" name="amount" type="text" placeholder="Escribir Aquí...">
                            </div>
                            <br>
                            <h5>Seleccione el tipo de cobro</h5>
                            <div class="content_options">
                                <input id="myInputCopy" name="myInputCopy" type="text" hidden value="{{ url('https://prod.qhantuy.com/payment/to-pay?country=29&phone=&amount_deposit=') }}">
                                <button type="button" disabled class="alert-dark btn-step payments_option_button generate_qr">Generar QR de cobro</button>
                                <button type="button" disabled class="alert-dark btn-step payments_option_button make-payment_form second_btn">Cobrar por número de celular</button>
                                <button type="button" disabled id="btnSubmitLink" class="alert-dark payments_option_button btn_in5" value="{{ url('inicio') }}" title="Copiar link de pago" ><i class="feather icon-copy mr-1 font-weight-bold"></i>Copiar Link de pago</button>
                            </div>
                            <br>
                        </div>
                    </form>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="content_lightbx">
                        {{-- <div class="alert alert-danger" role="alert"> This is a danger alert—check it out! </div> --}}
                    <h5 id="text-init" class="title_init">Realizar cobro</h5>
                    <hr>
                    <div class="row row_type align_centr justify_centr">
                        {{-- <div class="col-12"> --}}
                        {{-- <div class="alert alert-danger" role="alert"> This is a danger alert—check it out! </div> --}}
                        {{-- </div> --}}
                    <h5 class="title_init">Realizar cobro</h5>
                    <hr>
                    <div class="row row_type align_centr justify_centr">
                        <div class="col-md-12 col-12">
                            <div class="content_imb-desc">
                                <p>Realizar cobro a:</p>
                                <div class="row row_type align_centr justify_centr">
                                    <div class="col-md-3 col-sm-3 col-xs-3 col-3">
                                        <div class="content_img">
                                            <img src="{{ asset('assets/img/user_default.png') }}" alt="User">
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-9 col-9">
                                        <div class="content_text">
                                            <label for="cellphone">Número de celular</label>
                                            <input id="cellphone" name="cellphone" type="number" placeholder="Escribir Aquí...">
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>
                        <div class="col-md-12 col-12 col-parent">
                            <form class="content_imb-transactions" style="background-color: #fff">
                                <div class="row row_type">
                                    <div class="col-md-12 col-12 col-xs-12">
                                        <div class="content_text">
                                            <label for="payment_detail">Escribe una nota:</label>
                                            <input id="payment_detail" name="payment_detail" type="text" placeholder="Escribir Aquí..." value="">
                                        </div>
                                        <br>
                                    </div>
                                    <div class="col-md-6 col-xs-12 col-12">
                                        <button class="btn_in select_options other-third_btn" type="button" title="Seleccionar otra opción de pago">Seleccionar otra opción</button>
                                    </div>
                                    <div class="col-md-6 col-xs-12 col-12">
                                        <button id="btn-submit" class="btn_in" type="submit" title="Cobrar">Cobrar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
