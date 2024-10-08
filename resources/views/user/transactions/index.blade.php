@extends('layouts.fronty')

@section('contents')
    <div class="container-fluid" id="pageContent">
        <div class="col-sm-12">
            <div class="card">
                <h5 class="card-header bg-primary text-white">Transactions History</h5>
                <div class="card-body">
                    <div class="w-full-x lg:w-1/3 h-32  rounded-lg p-5 mb-3">
                        <div class="w-full grid grid-cols-1 gap-3 p-2">
                            <div class="w-full ">
                                You have made {{ $transactions->total() }} transactions
                            </div>

                        </div>
                    </div>







                    <!--<input type="hidden" name="currency_code" id="currency_code" value="USDTTRC20">-->




                    <div class="grid grid-cols-1 gap-3 mt-5">
                        <div class="flex justify-end mb-5">
                            <div class="flex justify-end items-center  mb-2 mt-5">
                                <div class="relative">

                                    <span class="theme1-input-icon material-icons">
                                        search
                                    </span>
                                    <input type="text" placeholder="Txn Ref" id="search-transaction-input"
                                        class="py-2 pr-4 text-sm text-topbar-item bg-topbar border border-topbar-border rounded pl-8 placeholder:text-slate-400 form-control focus-visible:outline-0 min-w-[300px] focus:border-blue-400 group-data-[topbar=dark]:bg-topbar-dark group-data-[topbar=dark]:border-topbar-border-dark group-data-[topbar=dark]:placeholder:text-slate-500 group-data-[topbar=dark]:text-topbar-item-dark group-data-[topbar=brand]:bg-topbar-brand group-data-[topbar=brand]:border-topbar-border-brand group-data-[topbar=brand]:placeholder:text-blue-300 group-data-[topbar=brand]:text-topbar-item-brand group-data-[topbar=dark]:dark:bg-zink-700 group-data-[topbar=dark]:dark:border-zink-500 group-data-[topbar=dark]:dark:text-zink-100 rounded-0"
                                        value="{{ request()->s }}">
                                    <label for="search-transaction-input" class="placeholder-label text-gray-300  px-2">Txn
                                        Ref
                                    </label>

                                </div>
                                <div class="simple-pagination" data-paginator="transactions">
                                    <a id="search-transaction-button"
                                        class="paginator-link px-3 py-2 bg-blue-500 hover:scale-110 transition-all"
                                        data-link="{{ route('user.transactions.index') }}" href="">Search</a>
                                </div>
                            </div>
                        </div>
                        @forelse ($transactions as $transaction)
                            <div
                                class="w-full flex justify-between items-center  p-2 rounded-lg border border-slate-800 hover:border-slate-600 cursor-pointer">
                                <div class="">
                                    <p class="local-time">{{ date('d-m-y H:i:s', strtotime($transaction->created_at)) }}
                                    </p>
                                    <p class="clipboard cursor-pointer break-all" data-copy="{{ $transaction->ref }}">

                                        REF: {{ $transaction->ref }}
                                    </p>
                                    <p class="font-bold text-mono">{{ formatAmount($transaction->amount) }}</p>

                                </div>
                                <div class="break-all">
                                    <p class="flex justify-end items-center space-x-1">
                                        @if ($transaction->type == 'debit')
                                            <span class="text-red-500 uppercase text-xs">{{ $transaction->type }}</span>
                                        @else
                                            <span class="text-green-500 uppercase text-xs">{{ $transaction->type }}</span>
                                        @endif
                                    </p>
                                    <p class="flex justify-end cursor-pointer text-xs break-all"
                                        data-copy="{{ $transaction->description }}">

                                        {{ $transaction->description }}
                                    </p>
                                </div>
                            </div>

                        @empty
                            <div
                                class="w-full flex justify-center items-center  p-2 rounded-lg border border-slate-800 hover:border-slate-600 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-orange-500" fill="currentColor"
                                    class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg>
                                <span>Empty Record. No transaction found!</span>
                            </div>
                        @endforelse





                        <div class="w-full flex items-center  p-2 rounded-lg border border-slate-800 hover:border-slate-600 cursor-pointer simple-pagination"
                            data-paginator="transactions">
                            {{ $transactions->links('paginations.simple') }}
                        </div>
                    </div>
                </div>

            </div>






        </div>

    </div>
    </div>
@endsection

@section('scripts')
    <script>
        // search transaction
        $(document).on('input keyup', '#search-transaction-input', function(e) {
            var ref = $(this).val();
            var base_link = $('#search-transaction-button').data('link');
            var encodedRef = encodeURIComponent(ref);

            // Append the query parameter to the URL
            var link = base_link + '?s=' + encodedRef;
            $('#search-transaction-button').attr('href', link);
        });
    </script>
@endsection
