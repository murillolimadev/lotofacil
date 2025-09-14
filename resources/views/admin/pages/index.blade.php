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
                            <h3 class="fw-bold mb-3">Dashboard</h3>
                            <h6 class="op-7 mb-2">Registro de jogos lotofácil</h6>
                        </div>
                        <div class="ms-md-auto py-2 py-md-0">
                            <button type="button" class="btn btn-primary btn-round" data-toggle="modal"
                                data-target="#gerar">Gerador</button>
                            <button type="button" class="btn btn-primary btn-round" data-toggle="modal"
                                data-target="#exampleModal">Novo jogo</button>
                        </div>

                        {{-- modal create --}}
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <form action="{{ route('admin.lotofacil.store') }}" method="post">
                                    @csrf

                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Registrar novo jogo</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="num">
                                                        <input type="checkbox" value="01" name="n01"> 01
                                                    </div>
                                                    <div class="num">
                                                        <input type="checkbox" value="02" name="n02"> 02
                                                    </div>
                                                    <div class="num">
                                                        <input type="checkbox" value="03" name="n03"> 03
                                                    </div>
                                                    <div class="num">

                                                        <input type="checkbox" value="04" name="n04"> 04
                                                    </div>
                                                    <div class="num">

                                                        <input type="checkbox" value="05" name="n05"> 05
                                                    </div>
                                                    <div class="num">

                                                        <input type="checkbox" value="06" name="n06"> 06
                                                    </div>
                                                    <div class="num">
                                                        <input type="checkbox" value="07" name="n07"> 07
                                                    </div>
                                                    <div class="num">
                                                        <input type="checkbox" value="08" name="n08"> 08
                                                    </div>
                                                    <div class="num">
                                                        <input type="checkbox" value="09" name="n09"> 09
                                                    </div>
                                                    <div class="num">
                                                        <input type="checkbox" value="10" name="n10"> 10
                                                    </div>
                                                    <div class="num">
                                                        <input type="checkbox" value="11" name="n11"> 11
                                                    </div>
                                                    <div class="num">
                                                        <input type="checkbox" value="12" name="n12"> 12
                                                    </div>
                                                    <div class="num">
                                                        <input type="checkbox" value="13" name="n13"> 13
                                                    </div>
                                                    <div class="num">
                                                        <input type="checkbox" value="14" name="n14"> 14
                                                    </div>
                                                    <div class="num">
                                                        <input type="checkbox" value="15" name="n15"> 15
                                                    </div>
                                                    <div class="num">
                                                        <input type="checkbox" value="16" name="n16"> 16
                                                    </div>
                                                    <div class="num">
                                                        <input type="checkbox" value="17" name="n17"> 17
                                                    </div>
                                                    <div class="num">
                                                        <input type="checkbox" value="18" name="n18"> 18
                                                    </div>
                                                    <div class="num">
                                                        <input type="checkbox" value="19" name="n19"> 19
                                                    </div>
                                                    <div class="num">
                                                        <input type="checkbox" value="20" name="n20"> 20
                                                    </div>
                                                    <div class="num">
                                                        <input type="checkbox" value="21" name="n21"> 21
                                                    </div>
                                                    <div class="num">
                                                        <input type="checkbox" value="22" name="n22"> 22
                                                    </div>
                                                    <div class="num">
                                                        <input type="checkbox" value="23" name="n23"> 23
                                                    </div>
                                                    <div class="num">
                                                        <input type="checkbox" value="24" name="n24"> 24
                                                    </div>
                                                    <div class="num">
                                                        <input type="checkbox" value="25" name="n25"> 25
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-primary">Registrar</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
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
                                                        <th scope="col" style="width: 50px">#</th>
                                                        <th scope="col">Acertos</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach ($data as $item)
                                                        <tr>
                                                            <td>
                                                                {{ $item->id }}
                                                            </td>

                                                            <td>
                                                                @if ( $item->n01 == $result->n01)
                                                                {{ $item->n01 }}   
                                                                @else
                                                                   null 
                                                                @endif
                                                               
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
