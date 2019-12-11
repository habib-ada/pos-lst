<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Sade: @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="{{ asset('pages/ico/60.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('pages/ico/76.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('pages/ico/120.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('pages/ico/152.png') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="{{ asset('assets/plugins/pace/pace-theme-flash.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/jquery-scrollbar/jquery.scrollbar.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('assets/plugins/switchery/css/switchery.min.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('assets/plugins/nvd3/nv.d3.min.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('assets/plugins/mapplic/css/mapplic.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/rickshaw/rickshaw.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/datepicker3.css') }}" rel="stylesheet" type="text/css" media="screen">
    <link href="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" media="screen">
    <link href="{{ asset('assets/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/datatables-responsive/css/datatables.responsive.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('assets/css/dashboard.widgets.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{ asset('pages/css/pages-icons.css') }}" rel="stylesheet" type="text/css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- LARAVEL DEFAULT STYLE -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>

    <link class="main-stylesheet" href="{{ asset('pages/css/themes/modern.css') }}" rel="stylesheet" type="text/css" />
    <style>
      input[readonly], textarea[readonly] {
        background: none !important;
        color: #000 !important;
      }
      #jumlahprodukparent input, #hargabeliparent input {
        margin: 0;
        /* -webkit-appearance: none; */
        /* border: none; */
        background-color: none;
      }
      /* #jumlahprodukparent input:focus {
        outline: none;
      } */
    </style>
  </head>
  <body class="fixed-header horizontal-menu horizontal-app-menu dashboard">
    <!-- START PAGE-CONTAINER -->
    <div class="header p-r-0 bg-primary">
      <div class="header-inner header-md-height">
        <a href="#" class="btn-link toggle-sidebar hidden-lg-up pg pg-menu text-white" data-toggle="horizontal-menu"></a>
        <div class="">
          <div class="brand inline no-border hidden-xs-down">
            <a href="{{ url('/') }}">
              <div style="width: 78px; height: ;">
                <span class="bold" style="color: white; font-size: 15px;">POSLST</span>
              </div>
                {{-- <img src="{{ asset('assets/img/logo_white.png') }}" alt="logo" data-src="{{ asset('assets/img/logo_white.png') }}" data-src-retina="{{ asset('assets/img/logo_white_2x.png') }}" width="78" height="22"> --}}
            </a>
          </div>
          <!-- START NOTIFICATION LIST -->
          
          <!-- END NOTIFICATIONS LIST -->
        </div>
        <div>
          {{-- <a href="#" class="ml-0 search-link hidden-md-down" data-toggle="search"><i class="pg-search"></i>Type anywhere to <span class="bold">search</span></a> --}}
        </div>
        <div class="d-flex align-items-center">
          <!-- START User Info-->
          <div class="pull-left p-r-10 fs-14 font-heading hidden-md-down text-white">
            <span class="semi-bold">Adi</span> <span class="">Permana Putra</span>
          </div>
          <div class="dropdown pull-right">
            <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="thumbnail-wrapper d32 circular inline sm-m-r-5">
                <img src="{{ asset('assets/img/profiles/avatar.jpg') }}" alt="" data-src="{{ asset('assets/img/profiles/avatar.jpg') }}" data-src-retina="{{ asset('assets/img/profiles/avatar_small2x.jpg') }}" width="32" height="32">
                </span>
            </button>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
              <a href="#" class="dropdown-item"><i class="pg-settings_small"></i> Settings</a>
              <a href="#" class="dropdown-item"><i class="pg-outdent"></i> Feedback</a>
              <a href="#" class="dropdown-item"><i class="pg-signals"></i> Help</a>
              <a href="#" class="clearfix bg-master-lighter dropdown-item">
                <span class="pull-left">Logout</span>
                <span class="pull-right"><i class="pg-power"></i></span>
              </a>
            </div>
          </div>
          <!-- END User Info-->
          <a href="/logout" class=""><i class="header-icon m-l-10 fa fa-sign-out" style="font-size: 16px;"></i></a>
          {{-- <a href="#" class="header-icon pg pg-alt_menu btn-link m-l-10 sm-no-margin d-inline-block" data-toggle="quickview" data-toggle-element="#quickview"></a> --}}
        </div>
      </div>
      <div class="bg-white">
        <div class="container">
          <div class="menu-bar header-sm-height" data-pages-init='horizontal-menu' data-hide-extra-li="4">
            <a href="#" class="btn-link toggle-sidebar hidden-lg-up pg pg-close" data-toggle="horizontal-menu">
            </a>
            <ul>
              @if (config('global.level') == 1)
                <li class="
                @if (config('global.active_nav') === 'dashboard')
                    {{ 'active' }}
                @endif">
                  <a href="{{ url('#', []) }}">Dashboard</a>
                </li>
                <li class="">
                  <a href="/admin/master"><span class="title">Master Data</span></a>
                </li>
              @else
                <li class="
                    @if (config('global.active_nav') === 'dashboard')
                        {{ 'active' }}
                    @endif">
                    <a href="{{ url('/dashboard', []) }}">Dashboard</a>
                    </li>
                    <li class="
                    @if (config('global.active_nav') === 'laporan')
                        {{ 'active' }}
                    @endif">
                    <a href="/laporan"><span class="title">Laporan</span></a>
                    </li>
                    <li class="
                    @if (config('global.active_nav') === 'produk')
                        {{ 'active' }}
                    @endif">
                    <a href="javascript:;"><span class="title">Produk</span>
                    <span class=" arrow"></span></a>
                    <ul class="">
                        <li class="">
                        <a href="{{ url('/produk', []) }}">Produk</a>
                        </li>
                        <li class="">
                        <a href="{{ url('/produk/kategori', []) }}">Kategori</a>
                        </li>
                    </ul>
                    </li>
                    <li class="">
                    <a href="javascript:;"><span class="title">Inventori</span>
                    <span class=" arrow"></span></a>
                    <ul class="">
                        <li class="">
                        <a href="/inventori/kartustok">Kartu Stok</a>
                        </li>
                        <li class="">
                        <a href="/inventori/stokmasuk">Stok Masuk</a>
                        </li>
                        <li class="">
                        <a href="/inventori/stokkeluar">Stok Keluar</a>
                        </li>
                        <li class="">
                        <a href="/inventori/transferstok">Transfer Stok</a>
                        </li>
                        <li class="">
                        <a href="">Stok Opname</a>
                        </li>
                        <li class="">
                        <a href="">Supplier</a>
                        </li>
                        <li class="">
                        <a href="">Purchase Order</a>
                        </li>
                    </ul>
                    </li>
                    <li class="
                    @if (config('global.active_nav') === 'bisnis')
                        {{ 'active' }}
                    @endif">
                    <a href="javascript:;"><span class="title">Bisnis</span>
                    <span class=" arrow"></span></a>
                    <ul class="">
                        <li class="">
                        <a href="/outlet">Outlet</a>
                        </li>
                        <li class="">
                        <a href="/pelanggan">Pelanggan</a>
                        </li>
                        <li class="">
                        <a href="#">Anggota</a>
                        </li>
                    </ul>
                    </li>
                    <li>
                    <a href="/pos"><span class="title">POS</span></a>
                    </li>
              @endif
            </ul>
            <a href="#" class="search-link d-flex justify-content-between align-items-center hidden-lg-up" data-toggle="search">Tap here to search <i class="pg-search float-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="page-container ">
      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content sm-gutter">
          <!-- START BREADCRUMBS -->
          <div class="bg-white">
            <div class="container">
              <ol class="breadcrumb breadcrumb-alt">
                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
              </ol>
            </div>
          </div>
          <!-- END BREADCRUMBS -->
          <!-- START CONTAINER FLUID -->
          @yield('content')
          <!-- END CONTAINER FLUID -->
        </div>
        <!-- END PAGE CONTENT -->
        <!-- START COPYRIGHT -->
        <!-- START CONTAINER FLUID -->
        <!-- START CONTAINER FLUID -->
        <div class=" container   container-fixed-lg footer">
          <div class="copyright sm-text-center">
            <p class="small no-margin pull-left sm-pull-reset">
              <span class="hint-text">Copyright &copy; 2019 </span>
              <span class="font-montserrat">LST</span>.
              <span class="hint-text">All rights reserved. </span>
              {{-- <span class="sm-block"><a href="#" class="m-l-10 m-r-10">Terms of use</a> <span class="muted">|</span> <a href="#" class="m-l-10">Privacy Policy</a></span> --}}
            </p>
            <p class="small no-margin pull-right sm-pull-reset">
              Hand-crafted <span class="hint-text">&amp; made with Love by AdiPepe</span>
            </p>
            <div class="clearfix"></div>
          </div>
        </div>
        <!-- END COPYRIGHT -->
      </div>
      <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTAINER -->
    <!--START QUICKVIEW -->
    <div id="quickview" class="quickview-wrapper" data-pages="quickview">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs">
        <li class="" data-target="#quickview-notes" data-toggle="tab">
          <a href="#">Notes</a>
        </li>
        <li data-target="#quickview-alerts" data-toggle="tab">
          <a href="#">Alerts</a>
        </li>
        <li class="active" data-target="#quickview-chat" data-toggle="tab">
          <a href="#">Chat</a>
        </li>
      </ul>
      <a class="btn-link quickview-toggle" data-toggle-element="#quickview" data-toggle="quickview"><i class="pg-close"></i></a>
      <!-- Tab panes -->
      <div class="tab-content">
        <!-- BEGIN Notes !-->
        <div class="tab-pane no-padding" id="quickview-notes">
          <div class="view-port clearfix quickview-notes" id="note-views">
            <!-- BEGIN Note List !-->
            <div class="view list" id="quick-note-list">
              <div class="toolbar clearfix">
                <ul class="pull-right ">
                  <li>
                    <a href="#" class="delete-note-link"><i class="fa fa-trash-o"></i></a>
                  </li>
                  <li>
                    <a href="#" class="new-note-link" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="fa fa-plus"></i></a>
                  </li>
                </ul>
                <button class="btn-remove-notes btn btn-xs btn-block hide"><i class="fa fa-times"></i> Delete</button>
              </div>
              <ul>
                <!-- BEGIN Note Item !-->
                <li data-noteid="1">
                  <div class="left">
                    <!-- BEGIN Note Action !-->
                    <div class="checkbox check-warning no-margin">
                      <input id="qncheckbox1" type="checkbox" value="1">
                      <label for="qncheckbox1"></label>
                    </div>
                    <!-- END Note Action !-->
                    <!-- BEGIN Note Preview Text !-->
                    <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <!-- BEGIN Note Preview Text !-->
                  </div>
                  <!-- BEGIN Note Details !-->
                  <div class="right pull-right">
                    <!-- BEGIN Note Date !-->
                    <span class="date">12/12/14</span>
                    <a href="#" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="fa fa-chevron-right"></i></a>
                    <!-- END Note Date !-->
                  </div>
                  <!-- END Note Details !-->
                </li>
                <!-- END Note List !-->
                <!-- BEGIN Note Item !-->
                <li data-noteid="2">
                  <div class="left">
                    <!-- BEGIN Note Action !-->
                    <div class="checkbox check-warning no-margin">
                      <input id="qncheckbox2" type="checkbox" value="1">
                      <label for="qncheckbox2"></label>
                    </div>
                    <!-- END Note Action !-->
                    <!-- BEGIN Note Preview Text !-->
                    <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <!-- BEGIN Note Preview Text !-->
                  </div>
                  <!-- BEGIN Note Details !-->
                  <div class="right pull-right">
                    <!-- BEGIN Note Date !-->
                    <span class="date">12/12/14</span>
                    <a href="#"><i class="fa fa-chevron-right"></i></a>
                    <!-- END Note Date !-->
                  </div>
                  <!-- END Note Details !-->
                </li>
                <!-- END Note List !-->
                <!-- BEGIN Note Item !-->
                <li data-noteid="2">
                  <div class="left">
                    <!-- BEGIN Note Action !-->
                    <div class="checkbox check-warning no-margin">
                      <input id="qncheckbox3" type="checkbox" value="1">
                      <label for="qncheckbox3"></label>
                    </div>
                    <!-- END Note Action !-->
                    <!-- BEGIN Note Preview Text !-->
                    <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <!-- BEGIN Note Preview Text !-->
                  </div>
                  <!-- BEGIN Note Details !-->
                  <div class="right pull-right">
                    <!-- BEGIN Note Date !-->
                    <span class="date">12/12/14</span>
                    <a href="#"><i class="fa fa-chevron-right"></i></a>
                    <!-- END Note Date !-->
                  </div>
                  <!-- END Note Details !-->
                </li>
                <!-- END Note List !-->
                <!-- BEGIN Note Item !-->
                <li data-noteid="3">
                  <div class="left">
                    <!-- BEGIN Note Action !-->
                    <div class="checkbox check-warning no-margin">
                      <input id="qncheckbox4" type="checkbox" value="1">
                      <label for="qncheckbox4"></label>
                    </div>
                    <!-- END Note Action !-->
                    <!-- BEGIN Note Preview Text !-->
                    <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <!-- BEGIN Note Preview Text !-->
                  </div>
                  <!-- BEGIN Note Details !-->
                  <div class="right pull-right">
                    <!-- BEGIN Note Date !-->
                    <span class="date">12/12/14</span>
                    <a href="#"><i class="fa fa-chevron-right"></i></a>
                    <!-- END Note Date !-->
                  </div>
                  <!-- END Note Details !-->
                </li>
                <!-- END Note List !-->
                <!-- BEGIN Note Item !-->
                <li data-noteid="4">
                  <div class="left">
                    <!-- BEGIN Note Action !-->
                    <div class="checkbox check-warning no-margin">
                      <input id="qncheckbox5" type="checkbox" value="1">
                      <label for="qncheckbox5"></label>
                    </div>
                    <!-- END Note Action !-->
                    <!-- BEGIN Note Preview Text !-->
                    <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <!-- BEGIN Note Preview Text !-->
                  </div>
                  <!-- BEGIN Note Details !-->
                  <div class="right pull-right">
                    <!-- BEGIN Note Date !-->
                    <span class="date">12/12/14</span>
                    <a href="#"><i class="fa fa-chevron-right"></i></a>
                    <!-- END Note Date !-->
                  </div>
                  <!-- END Note Details !-->
                </li>
                <!-- END Note List !-->
              </ul>
            </div>
            <!-- END Note List !-->
            <div class="view note" id="quick-note">
              <div>
                <ul class="toolbar">
                  <li><a href="#" class="close-note-link"><i class="pg-arrow_left"></i></a>
                  </li>
                  <li><a href="#" data-action="Bold" class="fs-12"><i class="fa fa-bold"></i></a>
                  </li>
                  <li><a href="#" data-action="Italic" class="fs-12"><i class="fa fa-italic"></i></a>
                  </li>
                  <li><a href="#" class="fs-12"><i class="fa fa-link"></i></a>
                  </li>
                </ul>
                <div class="body">
                  <div>
                    <div class="top">
                      <span>21st april 2014 2:13am</span>
                    </div>
                    <div class="content">
                      <div class="quick-note-editor full-width full-height js-input" contenteditable="true"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END Notes !-->
        <!-- BEGIN Alerts !-->
        <div class="tab-pane no-padding" id="quickview-alerts">
          <div class="view-port clearfix" id="alerts">
            <!-- BEGIN Alerts View !-->
            <div class="view bg-white">
              <!-- BEGIN View Header !-->
              <div class="navbar navbar-default navbar-sm">
                <div class="navbar-inner">
                  <!-- BEGIN Header Controler !-->
                  <a href="javascript:;" class="inline action p-l-10 link text-master" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                    <i class="pg-more"></i>
                  </a>
                  <!-- END Header Controler !-->
                  <div class="view-heading">
                    Notications
                  </div>
                  <!-- BEGIN Header Controler !-->
                  <a href="#" class="inline action p-r-10 pull-right link text-master">
                    <i class="pg-search"></i>
                  </a>
                  <!-- END Header Controler !-->
                </div>
              </div>
              <!-- END View Header !-->
              <!-- BEGIN Alert List !-->
              <div data-init-list-view="ioslist" class="list-view boreded no-top-border">
                <!-- BEGIN List Group !-->
                <div class="list-view-group-container">
                  <!-- BEGIN List Group Header!-->
                  <div class="list-view-group-header text-uppercase">
                    Calendar
                  </div>
                  <!-- END List Group Header!-->
                  <ul>
                    <!-- BEGIN List Group Item!-->
                    <li class="alert-list">
                      <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                      <a href="javascript:;" class="align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                        <p class="">
                          <span class="text-warning fs-10"><i class="fa fa-circle"></i></span>
                        </p>
                        <p class="p-l-10 overflow-ellipsis fs-12">
                          <span class="text-master">David Nester Birthday</span>
                        </p>
                        <p class="p-r-10 ml-auto fs-12 text-right">
                          <span class="text-warning">Today <br></span>
                          <span class="text-master">All Day</span>
                        </p>
                      </a>
                      <!-- END Alert Item!-->
                      <!-- BEGIN List Group Item!-->
                    </li>
                    <!-- END List Group Item!-->
                    <!-- BEGIN List Group Item!-->
                    <li class="alert-list">
                      <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                      <a href="#" class="align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                        <p class="">
                          <span class="text-warning fs-10"><i class="fa fa-circle"></i></span>
                        </p>
                        <p class="p-l-10 overflow-ellipsis fs-12">
                          <span class="text-master">Meeting at 2:30</span>
                        </p>
                        <p class="p-r-10 ml-auto fs-12 text-right">
                          <span class="text-warning">Today</span>
                        </p>
                      </a>
                      <!-- END Alert Item!-->
                    </li>
                    <!-- END List Group Item!-->
                  </ul>
                </div>
                <!-- END List Group !-->
                <div class="list-view-group-container">
                  <!-- BEGIN List Group Header!-->
                  <div class="list-view-group-header text-uppercase">
                    Social
                  </div>
                  <!-- END List Group Header!-->
                  <ul>
                    <!-- BEGIN List Group Item!-->
                    <li class="alert-list">
                      <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                      <a href="javascript:;" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                        <p class="">
                          <span class="text-complete fs-10"><i class="fa fa-circle"></i></span>
                        </p>
                        <p class="col overflow-ellipsis fs-12 p-l-10">
                          <span class="text-master link">Jame Smith commented on your status<br></span>
                          <span class="text-master">“Perfection Simplified - Company Revox"</span>
                        </p>
                      </a>
                      <!-- END Alert Item!-->
                    </li>
                    <!-- END List Group Item!-->
                    <!-- BEGIN List Group Item!-->
                    <li class="alert-list">
                      <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                      <a href="javascript:;" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                        <p class="">
                          <span class="text-complete fs-10"><i class="fa fa-circle"></i></span>
                        </p>
                        <p class="col overflow-ellipsis fs-12 p-l-10">
                          <span class="text-master link">Jame Smith commented on your status<br></span>
                          <span class="text-master">“Perfection Simplified - Company Revox"</span>
                        </p>
                      </a>
                      <!-- END Alert Item!-->
                    </li>
                    <!-- END List Group Item!-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <!-- BEGIN List Group Header!-->
                  <div class="list-view-group-header text-uppercase">
                    Sever Status
                  </div>
                  <!-- END List Group Header!-->
                  <ul>
                    <!-- BEGIN List Group Item!-->
                    <li class="alert-list">
                      <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                      <a href="#" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                        <p class="">
                          <span class="text-danger fs-10"><i class="fa fa-circle"></i></span>
                        </p>
                        <p class="col overflow-ellipsis fs-12 p-l-10">
                          <span class="text-master link">12:13AM GTM, 10230, ID:WR174s<br></span>
                          <span class="text-master">Server Load Exceeted. Take action</span>
                        </p>
                      </a>
                      <!-- END Alert Item!-->
                    </li>
                    <!-- END List Group Item!-->
                  </ul>
                </div>
              </div>
              <!-- END Alert List !-->
            </div>
            <!-- EEND Alerts View !-->
          </div>
        </div>
        <!-- END Alerts !-->
        <div class="tab-pane active no-padding" id="quickview-chat">
          <div class="view-port clearfix" id="chat">
            <div class="view bg-white">
              <!-- BEGIN View Header !-->
              <div class="navbar navbar-default">
                <div class="navbar-inner">
                  <!-- BEGIN Header Controler !-->
                  <a href="javascript:;" class="inline action p-l-10 link text-master" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                    <i class="pg-plus"></i>
                  </a>
                  <!-- END Header Controler !-->
                  <div class="view-heading">
                    Chat List
                    <div class="fs-11">Show All</div>
                  </div>
                  <!-- BEGIN Header Controler !-->
                  <a href="#" class="inline action p-r-10 pull-right link text-master">
                    <i class="pg-more"></i>
                  </a>
                  <!-- END Header Controler !-->
                </div>
              </div>
              <!-- END View Header !-->
              <div data-init-list-view="ioslist" class="list-view boreded no-top-border">
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">
                    a</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/1x.jpg') }}" data-src="{{ asset('assets/img/profiles/1.jpg') }}" src="{{ asset('assets/img/profiles/1x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">ava flores</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">b</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/2x.jpg') }}" data-src="{{ asset('assets/img/profiles/2.jpg') }}" src="{{ asset('assets/img/profiles/2x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">bella mccoy</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/3x.jpg') }}" data-src="{{ asset('assets/img/profiles/3.jpg') }}" src="{{ asset('assets/img/profiles/3x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">bob stephens</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">c</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/4x.jpg') }}" data-src="{{ asset('assets/img/profiles/4.jpg') }}" src="{{ asset('assets/img/profiles/4x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">carole roberts</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/5x.jpg') }}" data-src="{{ asset('assets/img/profiles/5.jpg') }}" src="{{ asset('assets/img/profiles/5x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">christopher perez</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">d</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/6x.jpg') }}" data-src="{{ asset('assets/img/profiles/6.jpg') }}" src="{{ asset('assets/img/profiles/6x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">danielle fletcher</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/7x.jpg') }}" data-src="{{ asset('assets/img/profiles/7.jpg') }}" src="{{ asset('assets/img/profiles/7x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">david sutton</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">e</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/8x.jpg') }}" data-src="{{ asset('assets/img/profiles/8.jpg') }}" src="{{ asset('assets/img/profiles/8x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">earl hamilton</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/9x.jpg') }}" data-src="{{ asset('assets/img/profiles/9.jpg') }}" src="{{ asset('assets/img/profiles/9x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">elaine lawrence</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/1x.jpg') }}" data-src="{{ asset('assets/img/profiles/1.jpg') }}" src="{{ asset('assets/img/profiles/1x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">ellen grant</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/2x.jpg') }}" data-src="{{ asset('assets/img/profiles/2.jpg') }}" src="{{ asset('assets/img/profiles/2x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">erik taylor</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/3x.jpg') }}" data-src="{{ asset('assets/img/profiles/3.jpg') }}" src="{{ asset('assets/img/profiles/3x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">everett wagner</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">f</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/4x.jpg') }}" data-src="{{ asset('assets/img/profiles/4.jpg') }}" src="{{ asset('assets/img/profiles/4x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">freddie gomez</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">g</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/5x.jpg') }}" data-src="{{ asset('assets/img/profiles/5.jpg') }}" src="{{ asset('assets/img/profiles/5x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">glen jensen</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/6x.jpg') }}" data-src="{{ asset('assets/img/profiles/6.jpg') }}" src="{{ asset('assets/img/profiles/6x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">gwendolyn walker</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">j</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/7x.jpg') }}" data-src="{{ asset('assets/img/profiles/7.jpg') }}" src="{{ asset('assets/img/profiles/7x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">janet romero</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">k</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/8x.jpg') }}" data-src="{{ asset('assets/img/profiles/8.jpg') }}" src="{{ asset('assets/img/profiles/8x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">kim martinez</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">l</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/9x.jpg') }}" data-src="{{ asset('assets/img/profiles/9.jpg') }}" src="{{ asset('assets/img/profiles/9x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">lawrence white</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/1x.jpg') }}" data-src="{{ asset('assets/img/profiles/1.jpg') }}" src="{{ asset('assets/img/profiles/1x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">leroy bell</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/2x.jpg') }}" data-src="{{ asset('assets/img/profiles/2.jpg') }}" src="{{ asset('assets/img/profiles/2x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">letitia carr</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/3x.jpg') }}" data-src="{{ asset('assets/img/profiles/3.jpg') }}" src="{{ asset('assets/img/profiles/3x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">lucy castro</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">m</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/4x.jpg') }}" data-src="{{ asset('assets/img/profiles/4.jpg') }}" src="{{ asset('assets/img/profiles/4x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">mae hayes</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/5x.jpg') }}" data-src="{{ asset('assets/img/profiles/5.jpg') }}" src="{{ asset('assets/img/profiles/5x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">marilyn owens</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/6x.jpg') }}" data-src="{{ asset('assets/img/profiles/6.jpg') }}" src="{{ asset('assets/img/profiles/6x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">marlene cole</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/7x.jpg') }}" data-src="{{ asset('assets/img/profiles/7.jpg') }}" src="{{ asset('assets/img/profiles/7x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">marsha warren</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/8x.jpg') }}" data-src="{{ asset('assets/img/profiles/8.jpg') }}" src="{{ asset('assets/img/profiles/8x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">marsha dean</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/9x.jpg') }}" data-src="{{ asset('assets/img/profiles/9.jpg') }}" src="{{ asset('assets/img/profiles/9x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">mia diaz</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">n</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/1x.jpg') }}" data-src="{{ asset('assets/img/profiles/1.jpg') }}" src="{{ asset('assets/img/profiles/1x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">noah elliott</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">p</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/2x.jpg') }}" data-src="{{ asset('assets/img/profiles/2.jpg') }}" src="{{ asset('assets/img/profiles/2x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">phyllis hamilton</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">r</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/3x.jpg') }}" data-src="{{ asset('assets/img/profiles/3.jpg') }}" src="{{ asset('assets/img/profiles/3x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">raul rodriquez</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/4x.jpg') }}" data-src="{{ asset('assets/img/profiles/4.jpg') }}" src="{{ asset('assets/img/profiles/4x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">rhonda barnett</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/5x.jpg') }}" data-src="{{ asset('assets/img/profiles/5.jpg') }}" src="{{ asset('assets/img/profiles/5x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">roberta king</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">s</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/6x.jpg') }}" data-src="{{ asset('assets/img/profiles/6.jpg') }}" src="{{ asset('assets/img/profiles/6x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">scott armstrong</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/7x.jpg') }}" data-src="{{ asset('assets/img/profiles/7.jpg') }}" src="{{ asset('assets/img/profiles/7x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">sebastian austin</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/8x.jpg') }}" data-src="{{ asset('assets/img/profiles/8.jpg') }}" src="{{ asset('assets/img/profiles/8x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">sofia davis</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">t</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/9x.jpg') }}" data-src="{{ asset('assets/img/profiles/9.jpg') }}" src="{{ asset('assets/img/profiles/9x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">terrance young</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/1x.jpg') }}" data-src="{{ asset('assets/img/profiles/1.jpg') }}" src="{{ asset('assets/img/profiles/1x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">theodore woods</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/2x.jpg') }}" data-src="{{ asset('assets/img/profiles/2.jpg') }}" src="{{ asset('assets/img/profiles/2x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">todd wood</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/3x.jpg') }}" data-src="{{ asset('assets/img/profiles/3.jpg') }}" src="{{ asset('assets/img/profiles/3x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">tommy jenkins</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">w</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="{{ asset('assets/img/profiles/4x.jpg') }}" data-src="{{ asset('assets/img/profiles/4.jpg') }}" src="{{ asset('assets/img/profiles/4x.jpg') }}" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-master">wilma hicks</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
              </div>
            </div>
            <!-- BEGIN Conversation View  !-->
            <div class="view chat-view bg-white clearfix">
              <!-- BEGIN Header  !-->
              <div class="navbar navbar-default">
                <div class="navbar-inner">
                  <a href="javascript:;" class="link text-master inline action p-l-10 p-r-10" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                    <i class="pg-arrow_left"></i>
                  </a>
                  <div class="view-heading">
                    John Smith
                    <div class="fs-11 hint-text">Online</div>
                  </div>
                  <a href="#" class="link text-master inline action p-r-10 pull-right ">
                    <i class="pg-more"></i>
                  </a>
                </div>
              </div>
              <!-- END Header  !-->
              <!-- BEGIN Conversation  !-->
              <div class="chat-inner" id="my-conversation">
                <!-- BEGIN From Me Message  !-->
                <div class="message clearfix">
                  <div class="chat-bubble from-me">
                    Hello there
                  </div>
                </div>
                <!-- END From Me Message  !-->
                <!-- BEGIN From Them Message  !-->
                <div class="message clearfix">
                  <div class="profile-img-wrapper m-t-5 inline">
                    <img class="col-top" width="30" height="30" src="{{ asset('assets/img/profiles/avatar_small.jpg') }}" alt="" data-src="{{ asset('assets/img/profiles/avatar_small.jpg') }}" data-src-retina="{{ asset('assets/img/profiles/avatar_small2x.jpg') }}">
                  </div>
                  <div class="chat-bubble from-them">
                    Hey
                  </div>
                </div>
                <!-- END From Them Message  !-->
                <!-- BEGIN From Me Message  !-->
                <div class="message clearfix">
                  <div class="chat-bubble from-me">
                    Did you check out Pages framework ?
                  </div>
                </div>
                <!-- END From Me Message  !-->
                <!-- BEGIN From Me Message  !-->
                <div class="message clearfix">
                  <div class="chat-bubble from-me">
                    Its an awesome chat
                  </div>
                </div>
                <!-- END From Me Message  !-->
                <!-- BEGIN From Them Message  !-->
                <div class="message clearfix">
                  <div class="profile-img-wrapper m-t-5 inline">
                    <img class="col-top" width="30" height="30" src="{{ asset('assets/img/profiles/avatar_small.jpg') }}" alt="" data-src="{{ asset('assets/img/profiles/avatar_small.jpg') }}" data-src-retina="{{ asset('assets/img/profiles/avatar_small2x.jpg') }}">
                  </div>
                  <div class="chat-bubble from-them">
                    Yea
                  </div>
                </div>
                <!-- END From Them Message  !-->
              </div>
              <!-- BEGIN Conversation  !-->
              <!-- BEGIN Chat Input  !-->
              <div class="b-t b-grey bg-white clearfix p-l-10 p-r-10">
                <div class="row">
                  <div class="col-1 p-t-15">
                    <a href="#" class="link text-master"><i class="fa fa-plus-circle"></i></a>
                  </div>
                  <div class="col-8 no-padding">
                    <input type="text" class="form-control chat-input" data-chat-input="" data-chat-conversation="#my-conversation" placeholder="Say something">
                  </div>
                  <div class="col-2 link text-master m-l-10 m-t-15 p-l-10 b-l b-grey col-top">
                    <a href="#" class="link text-master"><i class="pg-camera"></i></a>
                  </div>
                </div>
              </div>
              <!-- END Chat Input  !-->
            </div>
            <!-- END Conversation View  !-->
          </div>
        </div>
      </div>
    </div>
    <!-- END QUICKVIEW-->
    <!-- START OVERLAY -->
    {{-- <div class="overlay hide" data-pages="search">
      <!-- BEGIN Overlay Content !-->
      <div class="overlay-content has-results m-t-20">
        <!-- BEGIN Overlay Header !-->
        <div class="container-fluid">
          <!-- BEGIN Overlay Logo !-->
          <img class="overlay-brand" src="{{ asset('assets/img/logo.png') }}" alt="logo" data-src="{{ asset('assets/img/logo.png') }}" data-src-retina="{{ asset('assets/img/logo_2x.png') }}" width="78" height="22">
          <!-- END Overlay Logo !-->
          <!-- BEGIN Overlay Close !-->
          <a href="#" class="close-icon-light overlay-close text-black fs-16">
            <i class="pg-close"></i>
          </a>
          <!-- END Overlay Close !-->
        </div>
        <!-- END Overlay Header !-->
        <div class="container-fluid">
          <!-- BEGIN Overlay Controls !-->
          <input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
          <br>
          <div class="inline-block">
            <div class="checkbox right">
              <input id="checkboxn" type="checkbox" value="1" checked="checked">
              <label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
            </div>
          </div>
          <div class="inline-block m-l-10">
            <p class="fs-13">Press enter to search</p>
          </div>
          <!-- END Overlay Controls !-->
        </div>
        <!-- BEGIN Overlay Search Results, This part is for demo purpose, you can add anything you like !-->
        <div class="container-fluid">
          <span>
                <strong>suggestions :</strong>
            </span>
          <span id="overlay-suggestions"></span>
          <br>
          <div class="search-results m-t-40">
            <p class="bold">Pages Search Results</p>
            <div class="row">
              <div class="col-md-6">
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                    <div>
                      <img width="50" height="50" src="{{ asset('assets/img/profiles/avatar.jpg') }}" data-src="{{ asset('assets/img/profiles/avatar.jpg') }}" data-src-retina="{{ asset('assets/img/profiles/avatar2x.jpg') }}" alt="">
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on pages</h5>
                    <p class="hint-text">via john smith</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                    <div>T</div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> related topics</h5>
                    <p class="hint-text">via pages</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                    <div><i class="fa fa-headphones large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> music</h5>
                    <p class="hint-text">via pagesmix</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
              </div>
              <div class="col-md-6">
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-info text-white inline m-t-10">
                    <div><i class="fa fa-facebook large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on facebook</h5>
                    <p class="hint-text">via facebook</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-complete text-white inline m-t-10">
                    <div><i class="fa fa-twitter large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
                    <p class="hint-text">via twitter</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular text-white bg-danger inline m-t-10">
                    <div><i class="fa fa-google-plus large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
                    <p class="hint-text">via google plus</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
              </div>
            </div>
          </div>
        </div>
        <!-- END Overlay Search Results !-->
      </div>
      <!-- END Overlay Content !-->
    </div> --}}
    <!-- END OVERLAY -->
    {{-- <script>
      $(document).ready(function(){
        refreshData();
      });

      function refreshData()
      {
          x = 1;  // 5 Seconds

          alert('halo');

          setTimeout(refreshData, x*1000);
      }
    </script> --}}

    @yield('inpagejs')
    <!-- BEGIN VENDOR JS -->
    <script src=" {{ asset('assets/plugins/pace/pace.min.js') }} " type="text/javascript"></script>
    <script src=" {{ asset('assets/plugins/jquery/jquery-1.11.1.min.js') }} " type="text/javascript"></script>
    <script src=" {{ asset('assets/plugins/modernizr.custom.js') }} " type="text/javascript"></script>
    <script src=" {{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }} " type="text/javascript"></script>
    <script src=" {{ asset('assets/plugins/tether/js/tether.min.js') }} " type="text/javascript"></script>
    <script src=" {{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }} " type="text/javascript"></script>
    <script src=" {{ asset('assets/plugins/jquery/jquery-easy.js') }} " type="text/javascript"></script>
    <script src=" {{ asset('assets/plugins/jquery-unveil/jquery.unveil.min.js') }} " type="text/javascript"></script>
    <script src=" {{ asset('assets/plugins/jquery-ios-list/jquery.ioslist.min.js') }} " type="text/javascript"></script>
    <script src=" {{ asset('assets/plugins/jquery-actual/jquery.actual.min.js') }} "></script>
    <script src=" {{ asset('assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js') }} "></script>
    <script type="text/javascript" src=" {{ asset('assets/plugins/select2/js/select2.full.min.js') }} "></script>
    <script type="text/javascript" src=" {{ asset('assets/plugins/classie/classie.js') }} "></script>
    <script src=" {{ asset('assets/plugins/switchery/js/switchery.min.js') }} " type="text/javascript"></script>
    {{-- DATATABLES JS --}}
    <script src=" {{ asset('assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js') }} " type="text/javascript"></script>
    <script src=" {{ asset('assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js') }} " type="text/javascript"></script>
    <script src=" {{ asset('assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js') }} " type="text/javascript"></script>
    <script src=" {{ asset('assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js') }} " type="text/javascript"></script>
    <script type="text/javascript" src=" {{ asset('assets/plugins/datatables-responsive/js/datatables.responsive.js') }} "></script>
    <script type="text/javascript" src=" {{ asset('assets/plugins/datatables-responsive/js/lodash.min.js') }} "></script>
    {{-- FORM JS --}}
    <script src=" {{ asset('assets/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.all.min.js') }} "></script>
    <script type="text/javascript" src=" {{ asset('assets/plugins/jquery-autonumeric/autoNumeric.js') }} "></script>
    <script type="text/javascript" src=" {{ asset('assets/plugins/dropzone/dropzone.min.js') }} "></script>
    <script type="text/javascript" src=" {{ asset('assets/plugins/bootstrap-tag/bootstrap-tagsinput.min.js') }} "></script>
    <script type="text/javascript" src=" {{ asset('assets/plugins/jquery-inputmask/jquery.inputmask.min.js') }} "></script>
    <script src=" {{ asset('assets/plugins/bootstrap-form-wizard/js/jquery.bootstrap.wizard.min.js') }} " type="text/javascript"></script>
    <script src=" {{ asset('assets/plugins/jquery-validation/js/jquery.validate.min.js') }} " type="text/javascript"></script>
    <script src=" {{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }} " type="text/javascript"></script>
    <script src=" {{ asset('assets/plugins/summernote/js/summernote.min.js') }} " type="text/javascript"></script>
    <script src=" {{ asset('assets/plugins/moment/moment.min.js') }} "></script>
    <script src=" {{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }} "></script>
    <script src=" {{ asset('assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js') }} "></script>
    <script src=" {{ asset('assets/plugins/bootstrap-typehead/typeahead.bundle.min.js') }} "></script>
    <script src=" {{ asset('assets/plugins/bootstrap-typehead/typeahead.jquery.min.js') }} "></script>
    <script src=" {{ asset('assets/plugins/handlebars/handlebars-v4.0.5.js') }} "></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src=" {{ asset('pages/js/pages.min.js') }} "></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    @yield('myjsfile')
    <!-- END PAGE LEVEL JS -->
  </body>
</html>