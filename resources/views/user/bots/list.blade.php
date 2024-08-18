@extends('layouts.fronty')

@section('contents')
    <div class="w-full p-3">


        <div class="card lg:flex lg:gap-3">

            <div class=" card-header bg-primary text-white  lg:w-2/3-x">
                <div class="card-body p-5 mb-5 ts-gray-2-x rounded-lg transition-all rescron-card" id="bots">
                    <h3 class="capitalize  font-extrabold "><span class="border-b-2">My Deposit List</span>
                    </h3>

                    <div class="w-full">


                        <div class="grid grid-cols-1-x lg:grid-cols-2-x gap-3 mt-5">

                            @forelse ($activations as $bot)
                                <div
                                    class="w-full bg-bot-1 rounded-lg border border-slate-800 hover:border-slate-600 cursor-pointer">
                                    <div class="rounded-lg">
                                        <div class="relative">
                                            <div
                                                class="absolute flex justify-center items-center -top-1 -right-1 border border-slate-800  rounded-lg p-1 text-xs text-white hover:scale-110 transition-all hover:text-white @if ($bot->expires_in < time()) bg-red-500 @else bg-green-500 @endif">
                                                <a role="button" class="flex space-x-1 items-center cursor-pointer"
                                                    id="{{ 'bot_timer_' . $bot->id }}">

                                                </a>
                                            </div>
                                        </div>
                                        <div class="p-2">
                                            <div class="w-full flex justify-between items-center mb-2">
                                                <p class="flex space-x-1 items-center"><img
                                                        class="w-8 h-8 bg-white rounded-full"
                                                        src="{{ asset('storage/bots/' . $bot->bot->logo) }}" alt="">
                                                    <span
                                                        class="font-mono font-semibold text-left">{{ $bot->bot->name }}</span>
                                                    @if ($bot->status == 'active')
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-5 h-5 text-green-500" fill="currentColor"
                                                            class="bi bi-patch-check-fill" viewBox="0 0 16 16">
                                                            <path
                                                                d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z" />
                                                        </svg>
                                                    @else
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white"
                                                            fill="currentColor" class="bi bi-patch-exclamation-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                                        </svg>
                                                    @endif
                                                </p>

                                            </div>
                                            <div class="w-full">
                                                <div class="grid grid-cols-2 gap-2">

                                                    <p class="text-xs text-mono grid grid-cols-1"><span
                                                            class="text-orange-500 text-xs">Activation Date</span>
                                                        <span
                                                            class="local-time">{{ date('d-m-y H:i:s', strtotime($bot->created_at)) }}</span>
                                                    </p>

                                                    <p class="text-xs text-mono grid grid-cols-1"><span
                                                            class="text-orange-500 text-xs">Portfolio</span>
                                                        <span>{{ formatAmount($bot->capital) }}</span>
                                                    </p>

                                                    <p class="text-xs text-mono grid grid-cols-1"><span
                                                            class="text-orange-500 text-xs">Portfolio Balance</span>
                                                        <span>{{ formatAmount($bot->balance) }}</span>
                                                    </p>

                                                    <p class="text-xs text-mono grid grid-cols-1"><span
                                                            class="text-orange-500 text-xs">PNL</span>
                                                        @if ($bot->profit < 0)
                                                            <span
                                                                class="text-red-500 flex space-x-1"><span>{{ ($bot->profit / $bot->capital) * 100 }}%</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                    fill="currentColor" class="w-6 h-6">
                                                                    <path fill-rule="evenodd"
                                                                        d="M1.72 5.47a.75.75 0 011.06 0L9 11.69l3.756-3.756a.75.75 0 01.985-.066 12.698 12.698 0 014.575 6.832l.308 1.149 2.277-3.943a.75.75 0 111.299.75l-3.182 5.51a.75.75 0 01-1.025.275l-5.511-3.181a.75.75 0 01.75-1.3l3.943 2.277-.308-1.149a11.194 11.194 0 00-3.528-5.617l-3.809 3.81a.75.75 0 01-1.06 0L1.72 6.53a.75.75 0 010-1.061z"
                                                                        clip-rule="evenodd" />
                                                                </svg>
                                                            </span>
                                                        @else
                                                            <span
                                                                class="text-green-500 flex space-x-1"><span>+{{ ($bot->profit / $bot->capital) * 100 }}%</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                    fill="currentColor" class="w-6 h-6">
                                                                    <path fill-rule="evenodd"
                                                                        d="M15.22 6.268a.75.75 0 01.968-.432l5.942 2.28a.75.75 0 01.431.97l-2.28 5.941a.75.75 0 11-1.4-.537l1.63-4.251-1.086.483a11.2 11.2 0 00-5.45 5.174.75.75 0 01-1.199.19L9 12.31l-6.22 6.22a.75.75 0 11-1.06-1.06l6.75-6.75a.75.75 0 011.06 0l3.606 3.605a12.694 12.694 0 015.68-4.973l1.086-.484-4.251-1.631a.75.75 0 01-.432-.97z"
                                                                        clip-rule="evenodd" />
                                                                </svg>
                                                            </span>
                                                        @endif
                                                    </p>


                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>

                            @empty
                                <div
                                    class="w-full flex justify-center items-center ts-gray-3-x p-2 rounded-lg border border-slate-800 hover:border-slate-600 cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-orange-500"
                                        fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </svg>
                                    <span>You have not deposited in any plan</span>
                                </div>
                            @endforelse






                        </div>

                        <div class="w-full mt-5 flex items-center ts-gray-3-x p-2 rounded-lg border border-slate-800 hover:border-slate-600 cursor-pointer simple-pagination"
                            data-paginator="bots">
                            {{ $activations->links('paginations.simple') }}
                        </div>

                    </div>

                </div>




            </div>

        </div>
    </div>
@endsection

@section('scripts')
    @foreach ($activations as $item)
        <script>
            $(document).ready(function() {
                var target = "{{ 'bot_timer_' . $item->id }}";
                var expires_in = {{ $item->expires_in }};

                // Get the current time in milliseconds
                var currentTime = new Date().getTime();

                // Calculate the remaining time in milliseconds
                var remainingTime = expires_in * 1000 - currentTime;

                // Calculate days, hours, minutes, and seconds
                var days = Math.floor(remainingTime / (1000 * 60 * 60 * 24));
                var hours = Math.floor((remainingTime % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((remainingTime % (1000 * 60)) / 1000);

                // Display the countdown
                var countdownElement = document.getElementById(target);
                countdownElement.innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s";

                // Update the countdown every second
                var countdownInterval = setInterval(function() {
                    if (remainingTime > 0) {
                        remainingTime -= 1000;

                        days = Math.floor(remainingTime / (1000 * 60 * 60 * 24));
                        hours = Math.floor((remainingTime % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        minutes = Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60));
                        seconds = Math.floor((remainingTime % (1000 * 60)) / 1000);

                        countdownElement.innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds +
                            "s";
                    } else {
                        clearInterval(countdownInterval);
                        countdownElement.innerHTML = "Expired";
                    }
                }, 1000);
            });
        </script>
    @endforeach
    <script>
        let interval;


        // select the bot bot
        $(document).on('click', ".bot", function(e) {


            var bot_id = $(this).data('bot_id');
            var bot_name = $(this).data('bot_name');

            Swal.fire({
                html: `
                    <div class="mt-5">
                        <div>
                            <div class="ts-gray-1-x text-white px-2 py-5 w-full rounded-lg border border-slate-800 hover:border-slate-600">
                                <form action="{{ route('user.bots.new') }}" method="post" id="botForm">
                                    @csrf
                                    <input type="hidden" name="bot_id" id="bot_id">
                                    <p class="mb-3">You have chosen to activate <span class="text-orange-500" id="dispay_bot_name"></span>  Ai bot</p>
                                    <p class="mb-3 text-red-500 text-xs" id="errorMessage"></p>
                                    <div class="flex justify-end mb-5">
                                        <div class="grid grid-cols-1 mb-2 mt-5 w-full">
                                            <div class="relative">

                                                <span class="theme1-input-icon material-icons">
                                                    paid
                                                </span>
                                                <input type="number" step="any"
                                                    placeholder="Capital ({{ site('currency') }})" id="capital"
                                                    class="theme1-text-input" name="capital" value="0" required>
                                                <label for="capital"
                                                    class="placeholder-label text-white ts-gray-2-x px-2">Capital
                                                    ({{ site('currency') }})
                                                </label>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-10 mb-10 px-3 flex flex-start">
                                        <button type="submit" id="activateButton"
                                            class="bg-purple-500 px-2 py-1 rounded-lg hover:scale-110 transition-all"> Activate Now
                                        </button>
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>
                `,
                toast: false,
                background: 'rgb(34, 37, 47, 0)',
                showConfirmButton: false,
                showCancelButton: false,
                showCloseButton: true,
                allowEscapeKey: false,
                allowOutsideClick: false,



            });

            $('#dispay_bot_name').html(bot_name);
            $("#bot_id").val(bot_id);




        });

        // handle deposit form
        $(document).on('submit', '#botForm', function(e) {
            e.preventDefault();

            var form = $(this);
            var formData = new FormData(this);

            var submitButton = $(this).find('button[type="submit"]');
            submitButton.addClass('relative disabled');
            submitButton.append('<span class="button-spinner"></span>');
            submitButton.prop('disabled', true);
            $.ajax({
                url: form.attr('action'),
                method: 'POST',
                data: formData,
                dataType: 'json',
                contentType: false,
                processData: false,
                success: function(response) {
                    var link = window.location.href;
                    var targetDiv = '#bots';
                    $.ajax({
                        url: link,
                        method: 'GET',
                        success: function(response) {
                            $(targetDiv).html($(response).find(targetDiv).html());
                            var scrollTo = $(targetDiv).offset().top - 100;
                            $('.rescron-card').addClass('hidden');
                            $(targetDiv).removeClass('hidden');
                            $('html, body').animate({
                                scrollTop: scrollTo
                            }, 800);
                        }
                    });
                    toastNotify('success', 'Bot activated successfully');


                },
                error: function(xhr, status, error) {
                    var errors = xhr.responseJSON.errors;

                    if (errors) {
                        $.each(errors, function(field, messages) {
                            var fieldErrors = '';
                            $.each(messages, function(index, message) {
                                fieldErrors += message + '<br>';
                            });
                            $('#errorMessage').html(fieldErrors);
                        });
                    } else {
                        $('#errorMessage').html('error', 'An Error occured, try again later');
                    }


                },
                complete: function() {
                    submitButton.removeClass('disabled');
                    submitButton.find('.button-spinner').remove();
                    submitButton.prop('disabled', false);

                }
            });

        });
    </script>


    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <script>
        var profits = {!! json_encode($profits) !!};
        var profitInt = profits.map(value => parseFloat((value * 1).toFixed(2)));

        Highcharts.chart('profitChart', {
            chart: {
                type: 'spline',
                backgroundColor: '#22252F', // Set background color here

                plotBackgroundColor: '#22252F',
                plotBorderWidth: 1,
                plotBorderColor: 'rgb(168, 85, 247)',

                borderWidth: 0,
                borderColor: 'rgb(168, 85, 247)',
                borderRadius: 10,
                style: {
                    fontFamily: 'Arial, sans-serif',
                    fontSize: '14px',
                    color: '#fff'
                }
            },
            accessibility: {
                point: {
                    descriptionFormatter: function(p) {
                        return p.series.name + ', ' + p.category + ', ' + p.y + '{{ site('currency') }}.';
                    }
                }
            },
            title: {
                text: '<span style="color: white">30 Days PNL</span>'
            },
            subtitle: {
                text: 'PNL Chart history for the last 30 days'
            },
            xAxis: {
                categories: {!! json_encode($days) !!},
                crosshair: true
            },
            yAxis: {
                // min: 0,
                title: {
                    text: '<span style="color: white">PNL ({{ site('currency') }})</span>'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size: 10px">{point.key} PNL</span><br/>',
                valuePrefix: '{{ site('currency') }}'
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'PNL',
                data: profitInt
            }]
        });
    </script>

    {{-- view trading history chart --}}
    <script src="https://s3.tradingview.com/tv.js"></script>
    <script>
        $(document).on('click', '.view-chart', function(e) {
            var pair = $(this).data('pair'); // BTCUSDT

            //fetch trading view chart for the pair
            Swal.fire({
                html: `
                        <div class="mt-5 sm:overflow-x-scroll">
                            <div id="chart-container"></div>
                        </div>
                        `,
                toast: false,
                background: 'rgb(34, 37, 47, 0)',
                showConfirmButton: false,
                showCloseButton: true,
                position: 'top-left',
                allowEscapeKey: false, // Prevent closing by escape key
                allowOutsideClick: false, // Prevent closing by clicking backdrop
                willClose: () => {
                    //delete the previously generated qrcode
                    // $('#single_wallet_qrcode').html('');
                }
            });

            new TradingView.widget({
                // Define the container element for the widget
                container_id: 'chart-container', // Replace 'chart-container' with your actual container ID

                // Specify the symbol (pair) you want to display
                symbol: pair,

                // Specify the interval for the chart (e.g., '1D' for 1 day)
                interval: '1D',

                // Choose the style of the chart (e.g., 'Line' or 'Candles')
                style: 'Candles',

                // Specify the timezone for the chart
                timezone: 'Etc/UTC',
                theme: 'Dark'

            });

        });
    </script>
@endsection
