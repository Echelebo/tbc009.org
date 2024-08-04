<!DOCTYPE html>

<html lang="en" class="scrol-pt">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="Zw0tjR1I5l9mXyBV9qCscb624B7hUCPy5NZjfjVm">
    <meta name="description" content="TBC009 Exchange, TBC009 wallet, Recover your TBC coin">
    <meta name="keywords" content="">
    <title>TBC Exchange</title>
    <script src="/demo.paymoney.techvill.net/public/frontend/templates/js/flashesh-dark.min.js"></script>
<link rel="stylesheet" href="/demo.paymoney.techvill.net/public/dist/libraries/bootstrap-5.0.2/css/bootstrap.min.css">
<link rel="stylesheet" href="/demo.paymoney.techvill.net/public/frontend/templates/css/style.min.css">
<link rel="stylesheet" href="/demo.paymoney.techvill.net/public/frontend/templates/css/owl-css/owl.min.css">
<link rel="stylesheet" href="/demo.paymoney.techvill.net/public/dist/plugins/select2-4.1.0-rc.0/css/select2.min.css">
<link rel="shortcut icon" href="/demo.paymoney.techvill.net/public/uploads/logos/1530689937_favicon.png">

    <link rel="stylesheet" href="/demo.paymoney.techvill.net/Modules/CryptoExchange/Resources/assets/landing/css/style.min.css">
    <link rel="stylesheet" href="/demo.paymoney.techvill.net/Modules/CryptoExchange/Resources/assets/landing/css/scrolling.min.css">

</head>
<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0" data-new-gr-c-s-check-loaded="14.1190.0" data-gr-ext-installed="">
<style>

    .sidenav {
  height: 100%;
  width: 0px;
  position: fixed;
  z-index: 1;
  top: 0;
  right: 0;
  background-color: #fff;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 20px;
}

.sidenav a {
  padding: 8px 8px 8px 16px;
  text-decoration: none;
  font-weight: bold;
  font-size: 15px;
  color: #111010;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #015697;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 15px;
  margin-left: 20px;
}

.wallettext {
    font-size:18px;
}

@media only screen and (min-device-width: 768px) and (max-device-width: 1605px) {
    .wallet-area {
    margin: auto;
    width:60%;
}
.tranx-area {
    margin: auto;
    width: 80%;
}
}

@media screen and (max-height: 480px) {
  .sidenav {padding-top: 9px;}
  .sidenav a {font-size: 13px;}
  .wallet-area {
    width:100%;
}
.tranx-area {
    width:100%;
}
.wallettext {
    font-size:12px;
}
}

</style>
</head>


<body class="bg-image bg-fixed" data-img-src="/prime/images/forbanner.jpg" data-new-gr-c-s-check-loaded="14.1159.0"
data-gr-ext-installed=""
style="background-image: url(&quot;/prime/images/forbanner.jpg&quot;); position: relative; min-height: 100%; top: 0px;">
    <div class="container-fluid">

    <div class="row">
        <div class="col-md-6"></div>

    <div class="col-md-6 mt-8 py-4" >
        <button style="font-size:15px;cursor:pointer;right:0;float:right;font-weight:bold;background-color:#ffffff;margin-right:50px;padding:4px 12px;border-width:0;border-radius:15px;color:#3d5acb;;" onclick="openNav()">&#9776; MENU</button>

        <div id="mySidenav" class="sidenav text-center">
            <a href="javascript:void(0)" class="closebtn" style="background-color:#3d5acb; border-radius:15px; border-width:0;padding:4px 8px; color:#fff;" onclick="closeNav()">&times; CLOSE</a>
            <h2 class="mt-4" style="color: #111010; font-size: 30px;">Menu</h2>
            <p>{{ user()->email }}</p>
            <a href="{{ route('user.dashboard') }}" class="mt-4"><i class="fa fa-home" aria-hidden="true"></i> GO BACK TO WALLET</a>
            <hr style="width: 80%; background-color:#dbdbdb; height:0.2px;  border-width:0; margin: auto; text-align:center;"/>
            <a href="{{ route('user.bots.index') }}" class="mt-2"><i class="fa fa-exchange" aria-hidden="true"></i>  EXCHANGE</a>
            <hr style="width: 80%; background-color:#dbdbdb; height:0.2px;  border-width:0; margin: auto; text-align:center;"/>
            <a href="{{ route('user.referrals') }}" class="mt-2"><i class="fa fa-user-plus"></i> REFERRALS</a>
            <hr style="width: 80%; background-color:#dbdbdb; height:0.2px; border-width:0; margin: auto; text-align:center;"/>
            <a href="{{ route('user.bots.history') }}" class="mt-2"><i class="fa fa-history" aria-hidden="true"></i> EXCHANGE HISTORY</a>
            <hr style="width: 80%; background-color:#dbdbdb; height:0.2px; border-width:0; margin: auto; text-align:center;"/>
          </div>
</div>
</div>

</div>




    @yield('contents')

    <script src="/demo.paymoney.techvill.net/public/dist/libraries/jquery-3.6.1/jquery-3.6.1.min.js"></script>
<script src="/demo.paymoney.techvill.net/public/frontend/templates/js/owl.carousel.min.js"></script>
<script src="/demo.paymoney.techvill.net/public/dist/libraries/bootstrap-5.0.2/js/bootstrap.min.js"></script>
<script src="/demo.paymoney.techvill.net/public/frontend/templates/js/main.min.js"></script>
<script src="/demo.paymoney.techvill.net/public/dist/plugins/select2-4.1.0-rc.0/js/select2.min.js"></script>
<script>
	$(".custom-select").select2()
</script>

<!--Google Analytics Tracking Code-->


<script type="text/javascript">

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	})

	function resizeHeaderOnScroll() {
		const distanceY = window.pageYOffset || document.documentElement.scrollTop,
		shrinkOn = 100,
		headerEl = document.getElementById('js-header');

		if (headerEl) {
			if (distanceY > shrinkOn) {
				headerEl.classList.add("smaller-header");
				$("#logo_container").attr('src', SITE_URL + '/demo.paymoney.techvill.net/public/frontend/images/logo_sm.png');
			} else {
				headerEl.classList.remove("smaller-header");
				$("#logo_container").attr('src', SITE_URL + '/demo.paymoney.techvill.net/public/frontend/images/logo.png');
			}
		}
	}
	window.addEventListener('scroll', resizeHeaderOnScroll);

	//Language script
	$('#lang').on('change', function (e)
	{
		e.preventDefault();
		lang = $(this).val();
		url = '/demo.paymoney.techvill.net/change-lang';

		$.ajax({
			type: 'get',
			url: url,
			data: {lang: lang},
			success: function (msg)
			{
				if (msg == 1) {
					if (lang == 'ar') {
						localStorage.setItem('lang', 'ar');
						localStorage.setItem('selected', 'ar');
					} else {
						localStorage.setItem('lang', lang)
						localStorage.setItem('selected', lang)
					}
					location.reload();
				}
			}
		});
	});

// custom dropdown

function create_custom_dropdowns() {
$('.select-custom').each(function(i, select) {
	if (!$(this).next().hasClass('dropdown')) {
	$(this).after('<div class="dropdown ' + ($(this).attr('class') || '') + '" tabindex="0"><span class="current"></span><div class="list"><ul></ul></div></div>');
	var dropdown = $(this).next();
	var options = $(select).find('option');
	var selected = $(this).find('option:selected');
	dropdown.find('.current').html(selected.data('display-text') || selected.text());
	options.each(function(j, o) {
		var display = $(o).data('display-text') || '';
		dropdown.find('ul').append('<li class="option ' + ($(o).is(':selected') ? 'selected' : '') + '" data-value="' + $(o).val() + '" data-display-text="' + display + '">' + $(o).text() + '</li>');
	});
	}
});
}

// Event listeners

// Open/close
$(document).on('click', '.dropdown', function(event) {
$('.dropdown').not($(this)).removeClass('open');
$(this).toggleClass('open');
if ($(this).hasClass('open')) {
	$(this).find('.option').attr('tabindex', 0);
	$(this).find('.selected').focus();
} else {
	$(this).find('.option').removeAttr('tabindex');
	$(this).focus();
}
});
// Close when clicking outside
$(document).on('click', function(event) {
if ($(event.target).closest('.dropdown').length === 0) {
	$('.dropdown').removeClass('open');
	$('.dropdown .option').removeAttr('tabindex');
}
event.stopPropagation();
});
// Option click
$(document).on('click', '.dropdown .option', function(event) {
$(this).closest('.list').find('.selected').removeClass('selected');
$(this).addClass('selected');
var text = $(this).data('display-text') || $(this).text();
$(this).closest('.dropdown').find('.current').text(text);
$(this).closest('.dropdown').prev('select').val($(this).data('value')).trigger('change');
});

// Keyboard events
$(document).on('keydown', '.dropdown', function(event) {
var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[0]);
// Space or Enter
if (event.keyCode == 32 || event.keyCode == 13) {
	if ($(this).hasClass('open')) {
	focused_option.trigger('click');
	} else {
	$(this).trigger('click');
	}
	return false;
	// Down
} else if (event.keyCode == 40) {
	if (!$(this).hasClass('open')) {
	$(this).trigger('click');
	} else {
	focused_option.next().focus();
	}
	return false;
	// Up
} else if (event.keyCode == 38) {
	if (!$(this).hasClass('open')) {
	$(this).trigger('click');
	} else {
	var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[0]);
	focused_option.prev().focus();
	}
	return false;
// Esc
} else if (event.keyCode == 27) {
	if ($(this).hasClass('open')) {
	$(this).trigger('click');
	}
	return false;
}
});

$(document).ready(function() {
create_custom_dropdowns();
});

</script>

        <script src="/demo.paymoney.techvill.net/Modules/CryptoExchange/Resources/assets/landing/js/main.min.js"></script>
    <script src="/demo.paymoney.techvill.net/Modules/CryptoExchange/Resources/assets/landing/js/scrolling.min.js"></script>
    <script src="/demo.paymoney.techvill.net/Modules/CryptoExchange/Resources/assets/landing/js/nav-scroll.min.js"></script>
    <script src="/demo.paymoney.techvill.net/public/dist/plugins/debounce-1.1/jquery.ba-throttle-debounce.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    function restrictNumberToPrefdecimal(e, type) {
        let decimalFormat =
            type === "fiat" ?
            "2" :
            "8";

        let num = $.trim(e.value);
        if (num.length > 0 && !isNaN(num)) {
            e.value = digitCheck(num, 8, decimalFormat);
            return e.value;
        }
    }

    function digitCheck(num, beforeDecimal, afterDecimal) {
        return num
            .replace(/[^\d.]/g, "")
            .replace(new RegExp("(^[\\d]{" + beforeDecimal + "})[\\d]", "g"), "$1")
            .replace(/(\..*)\./g, "$1")
            .replace(new RegExp("(\\.[\\d]{" + afterDecimal + "}).", "g"), "$1");
    }

</script>    <script>
    var isNumberOrDecimalPointKey = function(value, e) {

        var charCode = (e.which) ? e.which : e.keyCode;

        if (charCode == 46) {
            if (value.value.indexOf('.') === -1) {
                return true;
            } else {
                return false;
            }
        } else {
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
        }
        return true;
    }
</script>


    <script type="text/javascript">
        'use strict';
        var requiedText = "This field is required.";
        var numberText = "Please enter a valid number.";
        var submitBtnText = "Processing...";
        var exchangeText = "Swap";
        var buyText = "Buy";
        var sellText = "Sell";
        var directionNotAvaillable = "Direction not available.";
        var decimalPreferrence = "8";
        var noResult = "No Result";
        var directionListUrl = "/demo.paymoney.techvill.net/crypto-exchange/direction-currencies";
        var directionAmountUrl = "/demo.paymoney.techvill.net/crypto-exchange/direction-amount";
        var directionTypeUrl = "/demo.paymoney.techvill.net/crypto-exchange/get-direction-by-type";
        var confirmationUrl = "/demo.paymoney.techvill.net/crypto-exchange/verification";
        var currencyLogoUrl = "/demo.paymoney.techvill.net/public/uploads/currency_logos";
    </script>
    <script src="/demo.paymoney.techvill.net/Modules/CryptoExchange/Resources/assets/js/crypto_front.min.js"></script>

     <!-- Imported from user layouts -->

     <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "350px";
        }

        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }
    </script>

     {{-- all script placements --}}
     <script src="/code.jquery.com/jquery-3.5.1.min.js" integrity="sha384-ZvpUoO/+PpLXR1lu4jmpXWu80pZlYUAfxl5NsBMWOEPSjUn/6Z/hRTt8+pR6L4N2" crossorigin="anonymous"></script>



     <!-- Include SweetAlert2 JavaScript file -->
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>

     {{-- owl carrousel --}}
     <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>



     {{-- datatable --}}
     <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
     <script
         src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.12.1/af-2.4.0/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/date-1.1.2/fh-3.2.4/kt-2.7.0/r-2.3.0/sc-2.0.7/sb-1.3.4/sp-2.0.2/datatables.min.js">
     </script>


     {{-- qrcode --}}
     <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
     {{-- main scripts --}}
     <script src="{{ asset('assets/scripts/cs.js') }}"></script>
     <script src="{{ asset('assets/scripts/main.js') }}"></script>


     @yield('scripts')

     <script>
         $(document).ready(function() {
             $('.datatable-skeleton-table').DataTable({
                 scrollX: true,
                 "sScrollXInner": "100%",
             });


         });
     </script>

     {{-- toast notification --}}
     @php
         if (session()->has('fail')) {
             $type = 'error';
             $message = session()->get('fail');
         } elseif (session()->has('success')) {
             $type = 'success';
             $message = session()->get('success');
         } else {
             $type = null;
             $message = null;
         }
     @endphp
     <script>
         var type = "{{ $type }}";
         var message = "{{ $message }}";
         if (type && message) {
             toastNotify(type, message);
         }
     </script>

     {{-- logout --}}
     <script>
         $(document).on('click', '.logout', function(e){
             html = `
                 <div class="mt-5 h-72 p-2 rounded-lg flex justify-center items-center">
                     <div>
                         <h2 class="text-center text-dark">Do you really want to Logout?</h2>
                         <form action="{{ route('user.logout') }}" class="mt-5 gen-form" data-action="redirect" data-url="{{ url('/') }}">
                             @csrf
                             <button type="submit" class="text-white mt-5 bg-red-500 px-2 py-1 rounded-full text-xs hover:scale-110 transition-all uppercase" type="submit">Yes,  Logout</button>
                         </form>

                     </div>
                 </div>
                 `;
             Swal.fire({
                 html: html,
                 toast: false,
                 background: 'rgb(255, 255, 255)',
                 showConfirmButton: false,
                 showCloseButton: true,
                 allowEscapeKey: false, // Prevent closing by escape key
                 allowOutsideClick: false, // Prevent closing by clicking backdrop
                 willClose: () => {
                     //delete the previously generated qrcode
                     // $('#single_wallet_qrcode').html('');
                 }
             });
         });
     </script>

     {{-- livechat --}}
     {!! json_decode(site('livechat')) !!}

     <!-- End of imported from user layouts -->

 </body>
 </html>
