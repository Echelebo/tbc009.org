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
    <link rel="stylesheet"
        href="/demo.paymoney.techvill.net/public/dist/libraries/bootstrap-5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/demo.paymoney.techvill.net/public/frontend/templates/css/style.min.css">
    <link rel="stylesheet" href="/demo.paymoney.techvill.net/public/frontend/templates/css/owl-css/owl.min.css">
    <link rel="stylesheet"
        href="/demo.paymoney.techvill.net/public/dist/plugins/select2-4.1.0-rc.0/css/select2.min.css">
    <link rel="shortcut icon" href="/demo.paymoney.techvill.net/public/uploads/logos/1530689937_favicon.png">

    <link rel="stylesheet"
        href="/demo.paymoney.techvill.net/Modules/CryptoExchange/Resources/assets/landing/css/style.min.css">
    <link rel="stylesheet"
        href="/demo.paymoney.techvill.net/Modules/CryptoExchange/Resources/assets/landing/css/scrolling.min.css">

    <!-- Bootstrap Css -->
    <link href="/prime/1/assets/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="/prime/1/assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="/prime/1/assets/css/app-dark.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="{{ asset('assets/css/gradient.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    {{-- material icon cdn --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    {{-- sweet alert css --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">

    {{-- datatable cdn  --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/scroller/2.0.7/css/scroller.dataTables.min.css">

    {{-- owl carrousel --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <style>
        .goog-te-gadget .goog-te-combo {
            margin: 4px 0 !important;
            /*width: 300px;*/
            text-transform: uppercase;
            font-weight: 400;
            font-weight: bold;
            margin-top: 20px !important;
        }

        .goog-logo-link {
            display: none !important;
        }

        .goog-te-banner-frame.skiptranslate,
        .goog-te-gadget-icon {
            display: none !important;
        }

        body {
            top: 0px !important;
        }

        .goog-tooltip {
            display: none !important;
        }

        .goog-tooltip:hover {
            display: none !important;
        }

        .goog-text-highlight {
            background-color: transparent !important;
            border: none !important;
            box-shadow: none !important;
        }
    </style>
    <style type="text/css">
        .apexcharts-canvas {
            position: relative;
            user-select: none;
            /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
        }

        /* scrollbar is not visible by default for legend, hence forcing the visibility */
        .apexcharts-canvas ::-webkit-scrollbar {
            -webkit-appearance: none;
            width: 6px;
        }

        .apexcharts-canvas ::-webkit-scrollbar-thumb {
            border-radius: 4px;
            background-color: rgba(0, 0, 0, .5);
            box-shadow: 0 0 1px rgba(255, 255, 255, .5);
            -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
        }

        .apexcharts-canvas.apexcharts-theme-dark {
            background: #343F57;
        }

        .apexcharts-inner {
            position: relative;
        }

        .legend-mouseover-inactive {
            transition: 0.15s ease all;
            opacity: 0.20;
        }

        .apexcharts-series-collapsed {
            opacity: 0;
        }

        .apexcharts-gridline,
        .apexcharts-text,
        .apexcharts-annotation-rect {
            pointer-events: none;
        }

        .apexcharts-tooltip {
            border-radius: 5px;
            box-shadow: 2px 2px 6px -4px #999;
            cursor: default;
            font-size: 14px;
            left: 62px;
            opacity: 0;
            pointer-events: none;
            position: absolute;
            top: 20px;
            overflow: hidden;
            white-space: nowrap;
            z-index: 12;
            transition: 0.15s ease all;
        }

        .apexcharts-tooltip.apexcharts-theme-light {
            border: 1px solid #e3e3e3;
            background: rgba(255, 255, 255, 0.96);
        }

        .apexcharts-tooltip.apexcharts-theme-dark {
            color: #fff;
            background: rgba(30, 30, 30, 0.8);
        }

        .apexcharts-tooltip * {
            font-family: inherit;
        }

        .apexcharts-tooltip .apexcharts-marker,
        .apexcharts-area-series .apexcharts-area,
        .apexcharts-line {
            pointer-events: none;
        }

        .apexcharts-tooltip.apexcharts-active {
            opacity: 1;
            transition: 0.15s ease all;
        }

        .apexcharts-tooltip-title {
            padding: 6px;
            font-size: 15px;
            margin-bottom: 4px;
        }

        .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
            background: #ECEFF1;
            border-bottom: 1px solid #ddd;
        }

        .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
            background: rgba(0, 0, 0, 0.7);
            border-bottom: 1px solid #333;
        }

        .apexcharts-tooltip-text-value,
        .apexcharts-tooltip-text-z-value {
            display: inline-block;
            font-weight: 600;
            margin-left: 5px;
        }

        .apexcharts-tooltip-text-z-label:empty,
        .apexcharts-tooltip-text-z-value:empty {
            display: none;
        }

        .apexcharts-tooltip-text-value,
        .apexcharts-tooltip-text-z-value {
            font-weight: 600;
        }

        .apexcharts-tooltip-marker {
            width: 12px;
            height: 12px;
            position: relative;
            top: 0px;
            margin-right: 10px;
            border-radius: 50%;
        }

        .apexcharts-tooltip-series-group {
            padding: 0 10px;
            display: none;
            text-align: left;
            justify-content: left;
            align-items: center;
        }

        .apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
            opacity: 1;
        }

        .apexcharts-tooltip-series-group.apexcharts-active,
        .apexcharts-tooltip-series-group:last-child {
            padding-bottom: 4px;
        }

        .apexcharts-tooltip-series-group-hidden {
            opacity: 0;
            height: 0;
            line-height: 0;
            padding: 0 !important;
        }

        .apexcharts-tooltip-y-group {
            padding: 6px 0 5px;
        }

        .apexcharts-tooltip-candlestick {
            padding: 4px 8px;
        }

        .apexcharts-tooltip-candlestick>div {
            margin: 4px 0;
        }

        .apexcharts-tooltip-candlestick span.value {
            font-weight: bold;
        }

        .apexcharts-tooltip-rangebar {
            padding: 5px 8px;
        }

        .apexcharts-tooltip-rangebar .category {
            font-weight: 600;
            color: #777;
        }

        .apexcharts-tooltip-rangebar .series-name {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .apexcharts-xaxistooltip {
            opacity: 0;
            padding: 9px 10px;
            pointer-events: none;
            color: #373d3f;
            font-size: 13px;
            text-align: center;
            border-radius: 2px;
            position: absolute;
            z-index: 10;
            background: #ECEFF1;
            border: 1px solid #90A4AE;
            transition: 0.15s ease all;
        }

        .apexcharts-xaxistooltip.apexcharts-theme-dark {
            background: rgba(0, 0, 0, 0.7);
            border: 1px solid rgba(0, 0, 0, 0.5);
            color: #fff;
        }

        .apexcharts-xaxistooltip:after,
        .apexcharts-xaxistooltip:before {
            left: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }

        .apexcharts-xaxistooltip:after {
            border-color: rgba(236, 239, 241, 0);
            border-width: 6px;
            margin-left: -6px;
        }

        .apexcharts-xaxistooltip:before {
            border-color: rgba(144, 164, 174, 0);
            border-width: 7px;
            margin-left: -7px;
        }

        .apexcharts-xaxistooltip-bottom:after,
        .apexcharts-xaxistooltip-bottom:before {
            bottom: 100%;
        }

        .apexcharts-xaxistooltip-top:after,
        .apexcharts-xaxistooltip-top:before {
            top: 100%;
        }

        .apexcharts-xaxistooltip-bottom:after {
            border-bottom-color: #ECEFF1;
        }

        .apexcharts-xaxistooltip-bottom:before {
            border-bottom-color: #90A4AE;
        }

        .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
            border-bottom-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
            border-bottom-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-xaxistooltip-top:after {
            border-top-color: #ECEFF1
        }

        .apexcharts-xaxistooltip-top:before {
            border-top-color: #90A4AE;
        }

        .apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
            border-top-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
            border-top-color: rgba(0, 0, 0, 0.5);
        }


        .apexcharts-xaxistooltip.apexcharts-active {
            opacity: 1;
            transition: 0.15s ease all;
        }

        .apexcharts-yaxistooltip {
            opacity: 0;
            padding: 4px 10px;
            pointer-events: none;
            color: #373d3f;
            font-size: 13px;
            text-align: center;
            border-radius: 2px;
            position: absolute;
            z-index: 10;
            background: #ECEFF1;
            border: 1px solid #90A4AE;
        }

        .apexcharts-yaxistooltip.apexcharts-theme-dark {
            background: rgba(0, 0, 0, 0.7);
            border: 1px solid rgba(0, 0, 0, 0.5);
            color: #fff;
        }

        .apexcharts-yaxistooltip:after,
        .apexcharts-yaxistooltip:before {
            top: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }

        .apexcharts-yaxistooltip:after {
            border-color: rgba(236, 239, 241, 0);
            border-width: 6px;
            margin-top: -6px;
        }

        .apexcharts-yaxistooltip:before {
            border-color: rgba(144, 164, 174, 0);
            border-width: 7px;
            margin-top: -7px;
        }

        .apexcharts-yaxistooltip-left:after,
        .apexcharts-yaxistooltip-left:before {
            left: 100%;
        }

        .apexcharts-yaxistooltip-right:after,
        .apexcharts-yaxistooltip-right:before {
            right: 100%;
        }

        .apexcharts-yaxistooltip-left:after {
            border-left-color: #ECEFF1;
        }

        .apexcharts-yaxistooltip-left:before {
            border-left-color: #90A4AE;
        }

        .apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
            border-left-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
            border-left-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip-right:after {
            border-right-color: #ECEFF1;
        }

        .apexcharts-yaxistooltip-right:before {
            border-right-color: #90A4AE;
        }

        .apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
            border-right-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
            border-right-color: rgba(0, 0, 0, 0.5);
        }

        .apexcharts-yaxistooltip.apexcharts-active {
            opacity: 1;
        }

        .apexcharts-yaxistooltip-hidden {
            display: none;
        }

        .apexcharts-xcrosshairs,
        .apexcharts-ycrosshairs {
            pointer-events: none;
            opacity: 0;
            transition: 0.15s ease all;
        }

        .apexcharts-xcrosshairs.apexcharts-active,
        .apexcharts-ycrosshairs.apexcharts-active {
            opacity: 1;
            transition: 0.15s ease all;
        }

        .apexcharts-ycrosshairs-hidden {
            opacity: 0;
        }

        .apexcharts-zoom-rect {
            pointer-events: none;
        }

        .apexcharts-selection-rect {
            cursor: move;
        }

        .svg_select_points,
        .svg_select_points_rot {
            opacity: 0;
            visibility: hidden;
        }

        .svg_select_points_l,
        .svg_select_points_r {
            cursor: ew-resize;
            opacity: 1;
            visibility: visible;
            fill: #888;
        }

        .apexcharts-canvas.apexcharts-zoomable .hovering-zoom {
            cursor: crosshair
        }

        .apexcharts-canvas.apexcharts-zoomable .hovering-pan {
            cursor: move
        }


        .apexcharts-zoom-icon,
        .apexcharts-zoomin-icon,
        .apexcharts-zoomout-icon,
        .apexcharts-reset-icon,
        .apexcharts-pan-icon,
        .apexcharts-selection-icon,
        .apexcharts-menu-icon,
        .apexcharts-toolbar-custom-icon {
            cursor: pointer;
            width: 20px;
            height: 20px;
            line-height: 24px;
            color: #6E8192;
            text-align: center;
        }


        .apexcharts-zoom-icon svg,
        .apexcharts-zoomin-icon svg,
        .apexcharts-zoomout-icon svg,
        .apexcharts-reset-icon svg,
        .apexcharts-menu-icon svg {
            fill: #6E8192;
        }

        .apexcharts-selection-icon svg {
            fill: #444;
            transform: scale(0.76)
        }

        .apexcharts-theme-dark .apexcharts-zoom-icon svg,
        .apexcharts-theme-dark .apexcharts-zoomin-icon svg,
        .apexcharts-theme-dark .apexcharts-zoomout-icon svg,
        .apexcharts-theme-dark .apexcharts-reset-icon svg,
        .apexcharts-theme-dark .apexcharts-pan-icon svg,
        .apexcharts-theme-dark .apexcharts-selection-icon svg,
        .apexcharts-theme-dark .apexcharts-menu-icon svg,
        .apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg {
            fill: #f3f4f5;
        }

        .apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
        .apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
        .apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
            fill: #008FFB;
        }

        .apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
        .apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
        .apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
        .apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
        .apexcharts-theme-light .apexcharts-reset-icon:hover svg,
        .apexcharts-theme-light .apexcharts-menu-icon:hover svg {
            fill: #333;
        }

        .apexcharts-selection-icon,
        .apexcharts-menu-icon {
            position: relative;
        }

        .apexcharts-reset-icon {
            margin-left: 5px;
        }

        .apexcharts-zoom-icon,
        .apexcharts-reset-icon,
        .apexcharts-menu-icon {
            transform: scale(0.85);
        }

        .apexcharts-zoomin-icon,
        .apexcharts-zoomout-icon {
            transform: scale(0.7)
        }

        .apexcharts-zoomout-icon {
            margin-right: 3px;
        }

        .apexcharts-pan-icon {
            transform: scale(0.62);
            position: relative;
            left: 1px;
            top: 0px;
        }

        .apexcharts-pan-icon svg {
            fill: #fff;
            stroke: #6E8192;
            stroke-width: 2;
        }

        .apexcharts-pan-icon.apexcharts-selected svg {
            stroke: #008FFB;
        }

        .apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
            stroke: #333;
        }

        .apexcharts-toolbar {
            position: absolute;
            z-index: 11;
            top: 0px;
            right: 3px;
            max-width: 176px;
            text-align: right;
            border-radius: 3px;
            padding: 0px 6px 2px 6px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .apexcharts-toolbar svg {
            pointer-events: none;
        }

        .apexcharts-menu {
            background: #fff;
            position: absolute;
            top: 100%;
            border: 1px solid #ddd;
            border-radius: 3px;
            padding: 3px;
            right: 10px;
            opacity: 0;
            min-width: 110px;
            transition: 0.15s ease all;
            pointer-events: none;
        }

        .apexcharts-menu.apexcharts-menu-open {
            opacity: 1;
            pointer-events: all;
            transition: 0.15s ease all;
        }

        .apexcharts-menu-item {
            padding: 6px 7px;
            font-size: 12px;
            cursor: pointer;
        }

        .apexcharts-theme-light .apexcharts-menu-item:hover {
            background: #eee;
        }

        .apexcharts-theme-dark .apexcharts-menu {
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
        }

        @media screen and (min-width: 768px) {

            .apexcharts-canvas:hover .apexcharts-toolbar {
                opacity: 1;
            }
        }

        .apexcharts-datalabel.apexcharts-element-hidden {
            opacity: 0;
        }

        .apexcharts-pie-label,
        .apexcharts-datalabels,
        .apexcharts-datalabel,
        .apexcharts-datalabel-label,
        .apexcharts-datalabel-value {
            cursor: default;
            pointer-events: none;
        }

        .apexcharts-pie-label-delay {
            opacity: 0;
            animation-name: opaque;
            animation-duration: 0.3s;
            animation-fill-mode: forwards;
            animation-timing-function: ease;
        }

        .apexcharts-canvas .apexcharts-element-hidden {
            opacity: 0;
        }

        .apexcharts-hide .apexcharts-series-points {
            opacity: 0;
        }

        .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
        .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
        .apexcharts-radar-series path,
        .apexcharts-radar-series polygon {
            pointer-events: none;
        }

        /* markers */

        .apexcharts-marker {
            transition: 0.15s ease all;
        }

        @keyframes opaque {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        /* Resize generated styles */
        @keyframes resizeanim {
            from {
                opacity: 0;
            }

            to {
                opacity: 0;
            }
        }

        .resize-triggers {
            animation: 1ms resizeanim;
            visibility: hidden;
            opacity: 0;
        }

        .resize-triggers,
        .resize-triggers>div,
        .contract-trigger:before {
            content: " ";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            overflow: hidden;
        }

        .resize-triggers>div {
            background: #eee;
            overflow: auto;
        }

        .contract-trigger:before {
            width: 200%;
            height: 200%;
        }
    </style>
    <link type="text/css" rel="stylesheet" charset="UTF-8"
        href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.qhDXWpKopYk.L.W.O/am=wA/d=0/rs=AN8SPfq5gedF4FIOWZgYyMCNZA5tU966ig/m=el_main_css">
    <script type="text/javascript" charset="UTF-8"
        src="https://translate.googleapis.com/_/translate_http/_/js/k=translate_http.tr.en_GB.fBJ3ykjzuHQ.O/am=AAQ/d=1/exm=el_conf/ed=1/rs=AN8SPfqHlX9xSzIx7TGypPV6FRAoMTbXdA/m=el_main">
    </script>

</head>

<body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0" data-new-gr-c-s-check-loaded="14.1190.0"
    data-gr-ext-installed="">
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
            font-size: 18px;
        }

        @media only screen and (min-device-width: 768px) and (max-device-width: 1605px) {
            .wallet-area {
                margin: auto;
                width: 60%;
            }

            .tranx-area {
                margin: auto;
                width: 80%;
            }
        }

        @media screen and (max-height: 480px) {
            .sidenav {
                padding-top: 9px;
            }

            .sidenav a {
                font-size: 13px;
            }

            .wallet-area {
                width: 100%;
            }

            .tranx-area {
                width: 100%;
            }

            .wallettext {
                font-size: 12px;
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

                <div class="col-md-6 mt-8 py-4">
                    <button
                        style="font-size:15px;cursor:pointer;right:0;float:right;font-weight:bold;background-color:#ffffff;margin-right:50px;padding:4px 12px;border-width:0;border-radius:15px;color:#3d5acb;;"
                        onclick="openNav()">&#9776; MENU</button>

                    <div id="mySidenav" class="sidenav text-center">
                        <a href="javascript:void(0)" class="closebtn"
                            style="background-color:#3d5acb; border-radius:15px; border-width:0;padding:4px 8px; color:#fff;"
                            onclick="closeNav()">&times; CLOSE</a>
                        <h2 class="mt-4" style="color: #111010; font-size: 30px;">Menu</h2>
                        <p>{{ user()->email }}</p>
                        <a href="{{ route('user.dashboard') }}" class="mt-4"><i class="fa fa-home"
                                aria-hidden="true"></i> GO BACK TO WALLET</a>
                        <hr
                            style="width: 80%; background-color:#dbdbdb; height:0.2px;  border-width:0; margin: auto; text-align:center;" />
                        <a href="{{ route('user.bots.index') }}" class="mt-2"><i class="fa fa-exchange"
                                aria-hidden="true"></i> EXCHANGE</a>
                        <hr
                            style="width: 80%; background-color:#dbdbdb; height:0.2px;  border-width:0; margin: auto; text-align:center;" />
                        <a href="{{ route('user.referrals') }}" class="mt-2"><i class="fa fa-user-plus"></i>
                            REFERRALS</a>
                        <hr
                            style="width: 80%; background-color:#dbdbdb; height:0.2px; border-width:0; margin: auto; text-align:center;" />
                        <a href="{{ route('user.bots.history') }}" class="mt-2"><i class="fa fa-history"
                                aria-hidden="true"></i> EXCHANGE HISTORY</a>
                        <hr
                            style="width: 80%; background-color:#dbdbdb; height:0.2px; border-width:0; margin: auto; text-align:center;" />
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

            $(function() {
                $('[data-toggle="tooltip"]').tooltip()
            })

            function resizeHeaderOnScroll() {
                const distanceY = window.pageYOffset || document.documentElement.scrollTop,
                    shrinkOn = 100,
                    headerEl = document.getElementById('js-header');

                if (headerEl) {
                    if (distanceY > shrinkOn) {
                        headerEl.classList.add("smaller-header");
                        $("#logo_container").attr('src', SITE_URL +
                            '/demo.paymoney.techvill.net/public/frontend/images/logo_sm.png');
                    } else {
                        headerEl.classList.remove("smaller-header");
                        $("#logo_container").attr('src', SITE_URL +
                            '/demo.paymoney.techvill.net/public/frontend/images/logo.png');
                    }
                }
            }
            window.addEventListener('scroll', resizeHeaderOnScroll);

            //Language script
            $('#lang').on('change', function(e) {
                e.preventDefault();
                lang = $(this).val();
                url = '/demo.paymoney.techvill.net/change-lang';

                $.ajax({
                    type: 'get',
                    url: url,
                    data: {
                        lang: lang
                    },
                    success: function(msg) {
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
                        $(this).after('<div class="dropdown ' + ($(this).attr('class') || '') +
                            '" tabindex="0"><span class="current"></span><div class="list"><ul></ul></div></div>');
                        var dropdown = $(this).next();
                        var options = $(select).find('option');
                        var selected = $(this).find('option:selected');
                        dropdown.find('.current').html(selected.data('display-text') || selected.text());
                        options.each(function(j, o) {
                            var display = $(o).data('display-text') || '';
                            dropdown.find('ul').append('<li class="option ' + ($(o).is(':selected') ?
                                    'selected' : '') + '" data-value="' + $(o).val() +
                                '" data-display-text="' + display + '">' + $(o).text() + '</li>');
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
                var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[
                    0]);
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
                        var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find(
                            '.list .option.selected')[0]);
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
        <script src="/demo.paymoney.techvill.net/public/dist/plugins/debounce-1.1/jquery.ba-throttle-debounce.min.js"
            type="text/javascript"></script>
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
        </script>
        <script>
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
        <script src="/code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha384-ZvpUoO/+PpLXR1lu4jmpXWu80pZlYUAfxl5NsBMWOEPSjUn/6Z/hRTt8+pR6L4N2" crossorigin="anonymous">
        </script>



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
            $(document).on('click', '.logout', function(e) {
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
