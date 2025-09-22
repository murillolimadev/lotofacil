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
                                                        <th scope="col">Acertos</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
{{-- @if ()
$usuario->cursos()->count(); 
@endif --}}
                                                    @foreach ($data as $item)
                                                        <tr>
                                                            <td>
                                                                {{ $item->cod }}
                                                            </td>
                                                            <td>
                                                                @if ($item->n01 == $result->n01)
                                                                    <button
                                                                        class="btn btn-sm btn-success">{{ $item->n01 ?? $result->n06 }}</button>
                                                                @else
                                                                    <button
                                                                        class="btn btn-sm btn-danger">{{ $result->n01 ?? $result->n06 }}</button>
                                                                @endif

                                                                @if ($item->n02 == $result->n02)
                                                                    <button
                                                                        class="btn btn-sm btn-success">{{ $item->n02 ?? $result->n06 }}</button>
                                                                @else
                                                                    <button
                                                                        class="btn btn-sm btn-danger">{{ $result->n02 ?? $result->n06 }}</button>
                                                                @endif

                                                                @if ($item->n03 == $result->n03)
                                                                    <button
                                                                        class="btn btn-sm btn-success">{{ $item->n03 ?? $result->n06 }}</button>
                                                                @else
                                                                    <button
                                                                        class="btn btn-sm btn-danger">{{ $result->n03 ?? $result->n06 }}</button>
                                                                @endif

                                                                @if ($item->n04 == $result->n04)
                                                                    <button
                                                                        class="btn btn-sm btn-success">{{ $item->n04 ?? $result->n06 }}</button>
                                                                @else
                                                                    <button
                                                                        class="btn btn-sm btn-danger">{{ $result->n04 ?? $result->n06 }}</button>
                                                                @endif

                                                                @if ($item->n05 == $result->n05)
                                                                    <button
                                                                        class="btn btn-sm btn-success">{{ $item->n05 ?? $result->n06 }}</button>
                                                                @else
                                                                    <button
                                                                        class="btn btn-sm btn-danger">{{ $result->n05 ?? $result->n06 }}</button>
                                                                @endif

                                                                @if ($item->n06 == $result->n06)
                                                                    <button
                                                                        class="btn btn-sm btn-success">{{ $item->n06 ?? $result->n06 }}</button>
                                                                @else
                                                                    <button
                                                                        class="btn btn-sm btn-danger">{{ $item->n06 ?? $result->n06 }}</button>
                                                                @endif
                                                            </td>
                                                            <td>

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
