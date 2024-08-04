@extends('layouts.fronty')

@section('contents')
<div class="navandbody-section p-main" id="crypto-front-initiate">
        <!-- TBC exchange section -->
        <div>
            <div class="container-fluid px-240p pb-10 row-head">
                <div class="row">
                    <div class="col-lg-6  col-sm-12 col-sm-12 col-xs-12 mw-auto">
                        <div class="pt-95">
                            <p class="f-21 OpenSans-600 color-CD aos-init aos-animate" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
                                THE SAFEST &amp; MOST RELIABLE</p>
                            <p class="bold-text p-0">
                                <span class="crypto-text OpenSans-700 color-E8">TBC</span><br>
                                <span class="exchange-text OpenSans-700 color-FF">EXCHANGE</span>
                            </p>
                            <div class="OpenSans-400 font-20 text-width color-CD">
                                Buy, sell, and exchange most valued cryptocurrency "The Billion Coin" easily, safely &amp; securely with low fees in just a few minutes.
                            </div>
                            <p class="OpenSans-400 font-16 col-md-11 mulish4 c-blue2"></p>
                            <p class="font-22 OpenSans-600 c-blue2 mt-38 color-E8">Let's Get Started..</p>
                            <div class="button-widths d-flex justify-content-between align-items-center mt-14 cursor-pointer btn-animate text-light">

                                <div class="ml-27p svg-img-parent">
                                    <div class="svg-img">
                                        <svg width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="54" height="54" rx="6" fill="none"></rect>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.8181 39.1818C15.4164 38.7801 15.4164 38.1289 15.8181 37.7273L34.7272 18.8182C35.1288 18.4165 35.7801 18.4165 36.1817 18.8182C36.5834 19.2198 36.5834 19.8711 36.1817 20.2727L17.2726 39.1818C16.871 39.5835 16.2198 39.5835 15.8181 39.1818Z" fill="#403E5B"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M24.2441 19.5454C24.2441 18.9774 24.7046 18.5169 25.2727 18.5169L35.4545 18.5169C36.0225 18.5169 36.483 18.9774 36.483 19.5454L36.483 29.7273C36.483 30.2953 36.0225 30.7558 35.4545 30.7558C34.8864 30.7558 34.426 30.2953 34.426 29.7273L34.426 20.574L25.2727 20.574C24.7046 20.574 24.2441 20.1135 24.2441 19.5454Z" fill="#403E5B"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
    <div class="row">
        <div class="col-md-12 p-1-res">
            <div class="pt-80">
                                                    <nav class="nav-dimension">
                        <div class="navmp nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link c-off-white padding-a OpenSans-700 crypto crypto_swap active" id="nav-home-tab" data-bs-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" data-type="crypto_swap">Crypto Swap </a>

                        </div>
                    </nav>

                <form action="#" method="POST" accept-charset="UTF-8" id="crypto-send-form">
                    <input type="hidden" name="_token" value="Zw0tjR1I5l9mXyBV9qCscb624B7hUCPy5NZjfjVm" autocomplete="off">                    <input type="hidden" name="from_type" id="from_type" value="crypto_swap">

                    <div class="tab-content tab-dimension mt-n3" id="nav-tabContent">
                        <div class="box-shadow tabpan-rad tab-pane  show active bg-light bg-5B" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                            <!-- You Send Section -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="boxdiv yousend-top bg-light mx-28 mt-35 box-bg-one">
                                        <div class="d-flex justify-content-between">

                                            <!-- You Send Amount -->
                                            <div class="mt-2 mt-n8-res w-100">
                                                <span class="font-14 OpenSans-400 c-blue2 pl-20 color-E8">You Send</span>
                                                <br>
                                                <input type="text" class="form-control custom-height w-100 input-customization s-font-24 c-blue2 mulish4 pl-20 mt-n3 color-E8" autocomplete="off" name="send_amount" id="send_amount" value="0.05000000" onkeypress="return isNumberOrDecimalPointKey(this, event);" oninput="restrictNumberToPrefdecimalOnSendInput(this)">
                                            </div>

                                            <!-- Button trigger modal -->
                                                <div id="selected-from-currency" class="selected d-flex gap-20" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm">
                                                                                                            <button type="button" class="btn btn-primary md:ms-2">
                                                            <img id="seleceted-from-image" class="img-fluid rounded-icon set-img" src="/demo.paymoney.techvill.net/public/uploads/currency_logos/1671520294.png">
                                                            <span class="set-coinname px-2" id="from-selected">ETH</span>
                                                        </button>
                                                                                                    </div>

                                                <input type="hidden" name="from_currency" id="fromCurrencyId" value="11">

                                        </div>
                                    </div>
                                </div>
                            </div>




                            <!-- Limit Fees Estimated Text -->
                            <div class="row">
                                <div class="col-md-10 col-10 parent-2">
                                    <div class="ul-one ul-ml-51 dot display-hide">
                                    </div>
                                    <div class="d-flex align-items-center dot dot-message display-hide">
                                        <div class="ul-two ul-ml-47 dot display-hide">
                                        </div>

                                        <p class="mb-unset OpenSans-400 font-13 c-blue2 pl-16 send_amount_error"></p>
                                    </div>

                                    <div class="ul-three ul-ml-51">
                                    </div>
                                    <div class="d-flex align-items-center h-9p">
                                        <div class="ul-four ul-ml-47">
                                        </div>
                                        <p class="mb-unset OpenSans-400 font-13 c-blue2 pl-16">
                                            Fees : <span class="exchange_fee">0.00125</span>
                                        </p>
                                    </div>
                                    <div class="ul-five ul-ml-51">
                                    </div>
                                    <div class="d-flex align-items-center h-9p">
                                        <div class="ul-six ul-ml-47">
                                        </div>
                                        <p class="mb-unset OpenSans-400 font-13 c-blue2 pl-16">
                                            Estimated rate : <span class="rate">18.58000000</span>
                                        </p>
                                    </div>

                                    <div class="ul-seven ul-ml-51">

                                    </div>
                                </div>
                                <div class="col-md-2 col-2 d-flex align-items-center">
                                    <div class="buy-sell-btn display-flex justify-content-center align-items-center switch-box display-hide cur-pointer">
                                        <svg width="22" height="23" viewBox="0 0 22 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.75 0C12.3358 0 12 0.373096 12 0.833333C12 1.29357 12.3358 1.66667 12.75 1.66667H15.75C15.9489 1.66667 16.1397 1.75446 16.2803 1.91074C16.421 2.06702 16.5 2.27899 16.5 2.5V17.4164L13.4226 14.2511C13.0972 13.9163 12.5695 13.9163 12.2441 14.2511C11.9186 14.5858 11.9186 15.1285 12.2441 15.4632L16.4107 19.7489C16.6068 19.9506 16.8761 20.0308 17.1305 19.9895C17.1694 19.9964 17.2093 20 17.25 20C17.6095 20 17.9098 19.719 17.983 19.344L21.7559 15.4632C22.0814 15.1285 22.0814 14.5858 21.7559 14.2511C21.4305 13.9163 20.9028 13.9163 20.5774 14.2511L18 16.9021V2.5C18 1.83696 17.7629 1.20107 17.341 0.732233C16.919 0.263392 16.3467 0 15.75 0H12.75ZM4.62801 4.01042C4.396 3.97235 4.1488 4.03861 3.96967 4.20921L0.21967 7.78064C-0.0732233 8.05958 -0.0732233 8.51184 0.21967 8.79079C0.512563 9.06974 0.987437 9.06974 1.28033 8.79079L4 6.20063V20.625C4 21.2549 4.23705 21.859 4.65901 22.3044C5.08097 22.7498 5.65326 23 6.25 23H9.25C9.66421 23 10 22.6456 10 22.2083C10 21.7711 9.66421 21.4167 9.25 21.4167H6.25C6.05109 21.4167 5.86032 21.3333 5.71967 21.1848C5.57902 21.0363 5.5 20.835 5.5 20.625V6.67682L7.71967 8.79079C8.01256 9.06974 8.48744 9.06974 8.78033 8.79079C9.07322 8.51184 9.07322 8.05958 8.78033 7.78064L5.487 4.64413C5.42152 4.27741 5.11645 4 4.75 4C4.70846 4 4.66771 4.00356 4.62801 4.01042Z" fill="currentColor" fill-opacity="0.6"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <!-- You Get Section -->
                            <div class="row pb-36">
                                <div class="col-md-12">
                                    <div class="boxdiv bg-light mx-28 box-bg-two">
                                        <div class="d-flex justify-content-between">

                                            <!-- You Get Amount -->
                                            <div class="mt-2 mt-n8-res w-100">
                                                <span class="font-14 poppins5 c-blue2 pl-20">You Get</span>
                                                <br>
                                                <input type="text" class="form-control custom-height w-100 input-customization s-font-24 c-blue2 mulish4 pl-20 mt-n3" autocomplete="off" name="get_amount" id="get_amount" value="0.1" onkeypress="return isNumberOrDecimalPointKey(this, event);" oninput="restrictNumberToPrefdecimalOnReceiveInput(this)">
                                            </div>



                                            <div id="selected-to-currency" class="selected d-flex gap-20" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm-to">
                                                                                                <button type="button" class="btn btn-primary md:ms-2">
                                                    <img id="seleceted-to-image" class="img-fluid rounded-icon set-imgTo" src="/demo.paymoney.techvill.net/public/uploads/currency_logos/icons8-litecoin-test-48.png">
                                                    <span id="to-selected" class="set-coinnameTo px-2">LTC </span>
                                                </button>
                                                                                            </div>

                                            <input type="hidden" id="toCurrencyId" name="to_currency" value="8">

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Exchange Button -->
                            <div class="row pb-36">
                                <div class="col-md-12">
                                    <div class="mx-28 exchangebutton-2 text-center d-grid">
                                        <button type="submit" class="btn-lg btn-block btn cur-pointer btn-bg-color" id="crypto_buy_sell_button">
                                            <div class="spinner spinner-border text-white spinner-border-sm mx-2 d-none">
                                                <span class="visually-hidden"></span>
                                            </div>
                                            <span class="exc-font-22 OpenSans-600 c-white" id="rp_text">Swap</span>
                                            <span id="rightAngleSvgIcon"><svg class="position-relative ms-1 rtl-wrap-one nscaleX-1" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.11648 12.216C3.81274 11.9123 3.81274 11.4198 4.11648 11.1161L8.23317 6.99937L4.11648 2.88268C3.81274 2.57894 3.81274 2.08647 4.11648 1.78273C4.42022 1.47899 4.91268 1.47899 5.21642 1.78273L9.88309 6.4494C10.1868 6.75314 10.1868 7.2456 9.88309 7.54934L5.21642 12.216C4.91268 12.5198 4.42022 12.5198 4.11648 12.216Z" fill="currentColor"></path>
                            </svg></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<div class="modal fade-in animated bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog crypto-modal-width modal-sm modal-dialog-scrollable modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0">
            <h2 class="modal-title f-18 OpenSans-400" id="exampleModalLongTitle">Select Crypto</h2>
            <button type="button" class="close close-icon" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body modal-body-parent">
        <div class="p-3">
        <div class="crypto-search">
            <input type="text" class="form-control" id="fromInput" placeholder="Search">
            <span class="fa fa-search"></span>
        </div>
        </div>
            <div class="modal-body-child thin-scrollbar">
            <table class="table table-hover" id="from-currency-table">
                <tbody id="from-currency-tr">

                         <tr>
                            <td class="text-left cursor-pointer from-currency" id="11">
                                <div class="d-flex px-3 align-items-center">
                                    <img id="from-image-11" class="img-fluid currency-img" src="/demo.paymoney.techvill.net/public/uploads/currency_logos/1671520294.png" alt="ETH">

                                    <div class="px-3 coin-list">
                                        <p class="coin-tag" id="from-code-11">
                                         ETH
                                        </p>
                                        <span class="coin-name">Ethereum</span>
                                    </div>

                                </div>

                            </td>
                        </tr>


                         <tr>
                            <td class="text-left cursor-pointer from-currency" id="8">
                                <div class="d-flex px-3 align-items-center">
                                    <img id="from-image-8" class="img-fluid currency-img" src="/demo.paymoney.techvill.net/public/uploads/currency_logos/icons8-litecoin-test-48.png" alt="LTC">

                                    <div class="px-3 coin-list">
                                        <p class="coin-tag" id="from-code-8">
                                         LTC
                                        </p>
                                        <span class="coin-name">Litecoin Testnet</span>
                                    </div>

                                </div>

                            </td>
                        </tr>


                         <tr>
                            <td class="text-left cursor-pointer from-currency" id="29">
                                <div class="d-flex px-3 align-items-center">
                                    <img id="from-image-29" class="img-fluid currency-img" src="/demo.paymoney.techvill.net/public/uploads/currency_logos/bitcoin_crypto.png" alt="BTC">

                                    <div class="px-3 coin-list">
                                        <p class="coin-tag" id="from-code-29">
                                         BTC
                                        </p>
                                        <span class="coin-name">Bitcoin</span>
                                    </div>

                                </div>

                            </td>
                        </tr>


                </tbody>
            </table>
            </div>

        </div>
      </div>
    </div>
</div>

<div class="modal fade-in animated bd-example-modal-sm-to" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog crypto-modal-width modal-sm modal-dialog-scrollable modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0">
            <h2 class="modal-title f-18 OpenSans-400" id="exampleModalLongTitle">Select Crypto</h2>
            <button type="button" class="close close-icon" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body modal-body-parent">
        <div class="p-3">
        <div class="crypto-search">
            <input type="text" class="form-control" id="toInput" placeholder="Search">
            <span class="fa fa-search"></span>
        </div>
        </div>
            <div class="modal-body-child thin-scrollbar">
            <table class="table table-hover" id="to-currency-table">
                <tbody id="to-currency-tr">

                            <tr>
                            <td class="text-left cursor-pointer to-currency" id="8">
                                <div class="d-flex px-3 align-items-center">
                                    <img id="to-image-8" class="img-fluid currency-img" src="/demo.paymoney.techvill.net/public/uploads/currency_logos/icons8-litecoin-test-48.png" alt="LTC">

                                    <div class="px-3 coin-list">
                                        <p class="coin-tag" id="to-code-8">
                                            LTC
                                        </p>
                                        <span class="coin-name">Litecoin Testnet</span>
                                    </div>
                                </div>
                            </td>
                        </tr>

                            <tr>
                            <td class="text-left cursor-pointer to-currency" id="12">
                                <div class="d-flex px-3 align-items-center">
                                    <img id="to-image-12" class="img-fluid currency-img" src="/demo.paymoney.techvill.net/public/uploads/currency_logos/1671523566.png" alt="DOGE">

                                    <div class="px-3 coin-list">
                                        <p class="coin-tag" id="to-code-12">
                                            DOGE
                                        </p>
                                        <span class="coin-name">Dogecoin</span>
                                    </div>
                                </div>
                            </td>
                        </tr>

                            <tr>
                            <td class="text-left cursor-pointer to-currency" id="13">
                                <div class="d-flex px-3 align-items-center">
                                    <img id="to-image-13" class="img-fluid currency-img" src="/demo.paymoney.techvill.net/public/uploads/currency_logos/avalanche.png" alt="AVAX">

                                    <div class="px-3 coin-list">
                                        <p class="coin-tag" id="to-code-13">
                                            AVAX
                                        </p>
                                        <span class="coin-name">Avalanche</span>
                                    </div>
                                </div>
                            </td>
                        </tr>

                            <tr>
                            <td class="text-left cursor-pointer to-currency" id="14">
                                <div class="d-flex px-3 align-items-center">
                                    <img id="to-image-14" class="img-fluid currency-img" src="/demo.paymoney.techvill.net/public/uploads/currency_logos/bnb.png" alt="BNB">

                                    <div class="px-3 coin-list">
                                        <p class="coin-tag" id="to-code-14">
                                            BNB
                                        </p>
                                        <span class="coin-name">Binance Coin</span>
                                    </div>
                                </div>
                            </td>
                        </tr>

                            <tr>
                            <td class="text-left cursor-pointer to-currency" id="15">
                                <div class="d-flex px-3 align-items-center">
                                    <img id="to-image-15" class="img-fluid currency-img" src="/demo.paymoney.techvill.net/public/uploads/currency_logos/cardano.png" alt="ADA">

                                    <div class="px-3 coin-list">
                                        <p class="coin-tag" id="to-code-15">
                                            ADA
                                        </p>
                                        <span class="coin-name">Cardano</span>
                                    </div>
                                </div>
                            </td>
                        </tr>

                            <tr>
                            <td class="text-left cursor-pointer to-currency" id="16">
                                <div class="d-flex px-3 align-items-center">
                                    <img id="to-image-16" class="img-fluid currency-img" src="/demo.paymoney.techvill.net/public/uploads/currency_logos/luna.png" alt="LUNA">

                                    <div class="px-3 coin-list">
                                        <p class="coin-tag" id="to-code-16">
                                            LUNA
                                        </p>
                                        <span class="coin-name">Terra</span>
                                    </div>
                                </div>
                            </td>
                        </tr>

                            <tr>
                            <td class="text-left cursor-pointer to-currency" id="17">
                                <div class="d-flex px-3 align-items-center">
                                    <img id="to-image-17" class="img-fluid currency-img" src="/demo.paymoney.techvill.net/public/uploads/currency_logos/dot.png" alt="DOT">

                                    <div class="px-3 coin-list">
                                        <p class="coin-tag" id="to-code-17">
                                            DOT
                                        </p>
                                        <span class="coin-name">Polkadot</span>
                                    </div>
                                </div>
                            </td>
                        </tr>

                            <tr>
                            <td class="text-left cursor-pointer to-currency" id="18">
                                <div class="d-flex px-3 align-items-center">
                                    <img id="to-image-18" class="img-fluid currency-img" src="/demo.paymoney.techvill.net/public/uploads/currency_logos/solana.png" alt="SOL">

                                    <div class="px-3 coin-list">
                                        <p class="coin-tag" id="to-code-18">
                                            SOL
                                        </p>
                                        <span class="coin-name">Solana</span>
                                    </div>
                                </div>
                            </td>
                        </tr>

                            <tr>
                            <td class="text-left cursor-pointer to-currency" id="19">
                                <div class="d-flex px-3 align-items-center">
                                    <img id="to-image-19" class="img-fluid currency-img" src="/demo.paymoney.techvill.net/public/uploads/currency_logos/tether.png" alt="USDT">

                                    <div class="px-3 coin-list">
                                        <p class="coin-tag" id="to-code-19">
                                            USDT
                                        </p>
                                        <span class="coin-name">Tether USD (Ethereum)</span>
                                    </div>
                                </div>
                            </td>
                        </tr>

                            <tr>
                            <td class="text-left cursor-pointer to-currency" id="20">
                                <div class="d-flex px-3 align-items-center">
                                    <img id="to-image-20" class="img-fluid currency-img" src="/demo.paymoney.techvill.net/public/uploads/currency_logos/usdc.png" alt="USDC">

                                    <div class="px-3 coin-list">
                                        <p class="coin-tag" id="to-code-20">
                                            USDC
                                        </p>
                                        <span class="coin-name">USD Coin (Tron)</span>
                                    </div>
                                </div>
                            </td>
                        </tr>

                            <tr>
                            <td class="text-left cursor-pointer to-currency" id="21">
                                <div class="d-flex px-3 align-items-center">
                                    <img id="to-image-21" class="img-fluid currency-img" src="/demo.paymoney.techvill.net/public/uploads/currency_logos/ripple.png" alt="XRP">

                                    <div class="px-3 coin-list">
                                        <p class="coin-tag" id="to-code-21">
                                            XRP
                                        </p>
                                        <span class="coin-name">Ripple</span>
                                    </div>
                                </div>
                            </td>
                        </tr>

                            <tr>
                            <td class="text-left cursor-pointer to-currency" id="22">
                                <div class="d-flex px-3 align-items-center">
                                    <img id="to-image-22" class="img-fluid currency-img" src="/demo.paymoney.techvill.net/public/uploads/currency_logos/monero.png" alt="XMR">

                                    <div class="px-3 coin-list">
                                        <p class="coin-tag" id="to-code-22">
                                            XMR
                                        </p>
                                        <span class="coin-name">Monero</span>
                                    </div>
                                </div>
                            </td>
                        </tr>

                            <tr>
                            <td class="text-left cursor-pointer to-currency" id="23">
                                <div class="d-flex px-3 align-items-center">
                                    <img id="to-image-23" class="img-fluid currency-img" src="/demo.paymoney.techvill.net/public/uploads/currency_logos/tron.png" alt="TRX">

                                    <div class="px-3 coin-list">
                                        <p class="coin-tag" id="to-code-23">
                                            TRX
                                        </p>
                                        <span class="coin-name">TRON</span>
                                    </div>
                                </div>
                            </td>
                        </tr>

                            <tr>
                            <td class="text-left cursor-pointer to-currency" id="24">
                                <div class="d-flex px-3 align-items-center">
                                    <img id="to-image-24" class="img-fluid currency-img" src="/demo.paymoney.techvill.net/public/uploads/currency_logos/dash.png" alt="DASH">

                                    <div class="px-3 coin-list">
                                        <p class="coin-tag" id="to-code-24">
                                            DASH
                                        </p>
                                        <span class="coin-name">Dash</span>
                                    </div>
                                </div>
                            </td>
                        </tr>

                            <tr>
                            <td class="text-left cursor-pointer to-currency" id="27">
                                <div class="d-flex px-3 align-items-center">
                                    <img id="to-image-27" class="img-fluid currency-img" src="/demo.paymoney.techvill.net/public/uploads/currency_logos/atom.png" alt="ATOM">

                                    <div class="px-3 coin-list">
                                        <p class="coin-tag" id="to-code-27">
                                            ATOM
                                        </p>
                                        <span class="coin-name">Cosmos</span>
                                    </div>
                                </div>
                            </td>
                        </tr>

                            <tr>
                            <td class="text-left cursor-pointer to-currency" id="29">
                                <div class="d-flex px-3 align-items-center">
                                    <img id="to-image-29" class="img-fluid currency-img" src="/demo.paymoney.techvill.net/public/uploads/currency_logos/bitcoin_crypto.png" alt="BTC">

                                    <div class="px-3 coin-list">
                                        <p class="coin-tag" id="to-code-29">
                                            BTC
                                        </p>
                                        <span class="coin-name">Bitcoin</span>
                                    </div>
                                </div>
                            </td>
                        </tr>

                </tbody>
            </table>
            </div>

        </div>
      </div>
    </div>
</div>
</div>
</div>
</div>
<!-- TBC exchange section End-->
</div>
@endsection

