@extends('admin.layout.app')
@section('title', 'Dashboard')
@section('content')
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar" data-background-color="dark">
            <div class="sidebar-logo">
                <!-- Logo Header -->
                <div class="logo-header" data-background-color="dark">
                    <a href="index.html" class="logo" style="color: #FFF">
                        LOTOFÁCIL
                    </a>
                    <div class="nav-toggle">
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="gg-menu-right"></i>
                        </button>
                        <button class="btn btn-toggle sidenav-toggler">
                            <i class="gg-menu-left"></i>
                        </button>
                    </div>
                    <button class="topbar-toggler more">
                        <i class="gg-more-vertical-alt"></i>
                    </button>
                </div>
                <!-- End Logo Header -->
            </div>
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    @include('admin.layout.nav')
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="main-header">
                <div class="main-header-logo">
                    <!-- Logo Header -->
                    <div class="logo-header" data-background-color="dark">
                        <a href="index.html" class="logo">
                            <img src="{{ asset('admin/img/kaiadmin/logo_light.svg') }}" alt="navbar brand"
                                class="navbar-brand" height="20" />
                        </a>
                        <div class="nav-toggle">
                            <button class="btn btn-toggle toggle-sidebar">
                                <i class="gg-menu-right"></i>
                            </button>
                            <button class="btn btn-toggle sidenav-toggler">
                                <i class="gg-menu-left"></i>
                            </button>
                        </div>
                        <button class="topbar-toggler more">
                            <i class="gg-more-vertical-alt"></i>
                        </button>
                    </div>
                    <!-- End Logo Header -->
                </div>
                <!-- Navbar Header -->
                <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
                    <div class="container-fluid">
                        <nav class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="submit" class="btn btn-search pe-1">
                                        <i class="fa fa-search search-icon"></i>
                                    </button>
                                </div>
                                <input type="text" placeholder="Buscar ..." class="form-control" />
                            </div>
                        </nav>

                        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                            <li class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                    aria-expanded="false" aria-haspopup="true">
                                    <i class="fa fa-search"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-search animated fadeIn">
                                    <form class="navbar-left navbar-form nav-search">
                                        <div class="input-group">
                                            <input type="text" placeholder="Buscar ..." class="form-control" />
                                        </div>
                                    </form>
                                </ul>
                            </li>



                            <li class="nav-item topbar-user dropdown hidden-caret">
                                <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#"
                                    aria-expanded="false">
                                    <div class="avatar-sm">
                                        <img src="{{ asset('admin/img/profile.jpg') }}" alt="..."
                                            class="avatar-img rounded-circle" />
                                    </div>
                                    <span class="profile-username">
                                        <span class="fw-bold">{{ Auth::user()->name }}</span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-user animated fadeIn">
                                    <div class="dropdown-user-scroll scrollbar-outer">
                                        <li>
                                            <div class="user-box">
                                                <div class="avatar-lg">
                                                    <img src="{{ asset('admin/img/profile.jpg') }}" alt="image profile"
                                                        class="avatar-img rounded" />
                                                </div>
                                                <div class="u-text">
                                                    <h4>{{ Auth::user()->name }}</h4>
                                                    <p class="text-muted">{{ Auth::user()->email }}</p>

                                                </div>
                                            </div>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>

            <div class="container">
                <div class="page-inner">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                        <div>
                            <h3 class="fw-bold mb-3">LOTOFÁCIL</h3>
                            <h6 class="op-7 mb-2">Registro de jogos lotofácil</h6>
                        </div>
                        <div class="ms-md-auto py-2 py-md-0">
                            <button type="button" class="btn btn-primary btn-round" data-toggle="modal"
                                data-target="#gerar">Gerador</button>
                            <button type="button" class="btn btn-primary btn-round" data-toggle="modal"
                                data-target="#exampleModal">Novo jogo</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            @if ($errors->any())
                                                <div class="alert alert-danger text-center" style="margin: 10px;">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li style="text-align: center">{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            @if (session('msg'))
                                                <div class="row text-center">
                                                    <div class="col-md-12">
                                                        <div class="alert alert-success text-center"
                                                            style="margin: 10px;">
                                                            {{ session('msg') }}
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table table-striped mt-3">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 40px;">cod</th>
                                                        <th scope="col">Lotofácil</th>
                                                        <th>Acertos</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach ($data as $item)
                                                        <tr>
                                                            <td
                                                                style="color: tomato; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;"Ï>
                                                                {{ $item->cod }}
                                                            </td>
                                                            <td
                                                                style="color: tomato; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">
                                                                {{ $item->n01 }}
                                                                {{ $item->n02 }}
                                                                {{ $item->n03 }}
                                                                {{ $item->n04 }}
                                                                {{ $item->n05 }}
                                                                {{ $item->n06 }}
                                                                {{ $item->n07 }}
                                                                {{ $item->n08 }}
                                                                {{ $item->n09 }}
                                                                {{ $item->n10 }}
                                                                {{ $item->n11 }}
                                                                {{ $item->n12 }}
                                                                {{ $item->n13 }}
                                                                {{ $item->n14 }}
                                                                {{ $item->n15 }}
                                                                {{ $item->n16 }}
                                                                {{ $item->n17 }}
                                                                {{ $item->n18 }}
                                                                {{ $item->n19 }}
                                                                {{ $item->n20 }}
                                                                {{ $item->n21 }}
                                                                {{ $item->n22 }}
                                                                {{ $item->n23 }}
                                                                {{ $item->n24 }}
                                                                {{ $item->n25 }}
                                                            </td>
                                                            <td
                                                                style="color: teal; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">
                                                                @if ($item->n01 == $result->n01)
                                                                    {{ $item->n01 }}
                                                                @endif
                                                                @if ($item->n02 == $result->n02)
                                                                    {{ $item->n02 }}
                                                                @endif
                                                                @if ($item->n03 == $result->n03)
                                                                    {{ $item->n03 }}
                                                                @endif
                                                                @if ($item->n04 == $result->n04)
                                                                    {{ $item->n04 }}
                                                                @endif
                                                                @if ($item->n05 == $result->n05)
                                                                    {{ $item->n05 }}
                                                                @endif
                                                                @if ($item->n06 == $result->n06)
                                                                    {{ $item->n06 }}
                                                                @endif
                                                                @if ($item->n07 == $result->n07)
                                                                    {{ $item->n07 }}
                                                                @endif
                                                                @if ($item->n08 == $result->n08)
                                                                    {{ $item->n08 }}
                                                                @endif
                                                                @if ($item->n09 == $result->n09)
                                                                    {{ $item->n09 }}
                                                                @endif
                                                                @if ($item->n10 == $result->n10)
                                                                    {{ $item->n10 }}
                                                                @endif
                                                                @if ($item->n11 == $result->n11)
                                                                    {{ $item->n11 }}
                                                                @endif
                                                                @if ($item->n12 == $result->n12)
                                                                    {{ $item->n12 }}
                                                                @endif
                                                                @if ($item->n13 == $result->n13)
                                                                    {{ $item->n13 }}
                                                                @endif
                                                                @if ($item->n14 == $result->n14)
                                                                    {{ $item->n14 }}
                                                                @endif
                                                                @if ($item->n15 == $result->n15)
                                                                    {{ $item->n15 }}
                                                                @endif
                                                                @if ($item->n16 == $result->n16)
                                                                    {{ $item->n16 }}
                                                                @endif
                                                                @if ($item->n17 == $result->n17)
                                                                    {{ $item->n17 }}
                                                                @endif
                                                                @if ($item->n18 == $result->n18)
                                                                    {{ $item->n18 }}
                                                                @endif
                                                                @if ($item->n19 == $result->n19)
                                                                    {{ $item->n19 }}
                                                                @endif
                                                                @if ($item->n20 == $result->n20)
                                                                    {{ $item->n20 }}
                                                                @endif
                                                                @if ($item->n21 == $result->n21)
                                                                    {{ $item->n21 }}
                                                                @endif
                                                                @if ($item->n22 == $result->n22)
                                                                    {{ $item->n22 }}
                                                                @endif
                                                                @if ($item->n23 == $result->n23)
                                                                    {{ $item->n23 }}
                                                                @endif
                                                                @if ($item->n24 == $result->n24)
                                                                    {{ $item->n24 }}
                                                                @endif
                                                                @if ($item->n25 == $result->n25)
                                                                    {{ $item->n25 }}
                                                                @endif

                                                            </td>
                                                            <td>
                                                                <?php
                                                                $total = 0;
                                                                if ($item->n01 == $result->n01) {
                                                                    $total++;
                                                                }
                                                                if ($item->n02 == $result->n02) {
                                                                    $total++;
                                                                }
                                                                if ($item->n03 == $result->n03) {
                                                                    $total++;
                                                                }
                                                                if ($item->n04 == $result->n04) {
                                                                    $total++;
                                                                }
                                                                if ($item->n05 == $result->n05) {
                                                                    $total++;
                                                                }
                                                                if ($item->n06 == $result->n06) {
                                                                    $total++;
                                                                }
                                                                if ($item->n07 == $result->n07) {
                                                                    $total++;
                                                                }
                                                                if ($item->n08 == $result->n08) {
                                                                    $total++;
                                                                }
                                                                if ($item->n09 == $result->n09) {
                                                                    $total++;
                                                                }
                                                                if ($item->n10 == $result->n10) {
                                                                    $total++;
                                                                }
                                                                if ($item->n11 == $result->n11) {
                                                                    $total++;
                                                                }
                                                                if ($item->n12 == $result->n12) {
                                                                    $total++;
                                                                }
                                                                if ($item->n13 == $result->n13) {
                                                                    $total++;
                                                                }
                                                                if ($item->n14 == $result->n14) {
                                                                    $total++;
                                                                }
                                                                if ($item->n15 == $result->n15) {
                                                                    $total++;
                                                                }
                                                                if ($item->n16 == $result->n16) {
                                                                    $total++;
                                                                }
                                                                if ($item->n17 == $result->n17) {
                                                                    $total++;
                                                                }
                                                                if ($item->n18 == $result->n18) {
                                                                    $total++;
                                                                }
                                                                if ($item->n19 == $result->n19) {
                                                                    $total++;
                                                                }
                                                                if ($item->n20 == $result->n20) {
                                                                    $total++;
                                                                }
                                                                if ($item->n21 == $result->n21) {
                                                                    $total++;
                                                                }
                                                                if ($item->n22 == $result->n22) {
                                                                    $total++;
                                                                }
                                                                if ($item->n23 == $result->n23) {
                                                                    $total++;
                                                                }
                                                                if ($item->n24 == $result->n24) {
                                                                    $total++;
                                                                }
                                                                if ($item->n25 == $result->n25) {
                                                                    $total++;
                                                                }
                                                               

                                                                echo $total;
                                                                ?>
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('lotofacil.destroy', [$item->id]) }}">
                                                                    <span class="badge badge-danger">Deletar</span> </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
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

            @include('admin.layout.footer')
        </div>


    </div>
@endsection
