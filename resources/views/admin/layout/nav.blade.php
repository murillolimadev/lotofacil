<ul class="nav nav-secondary">
    <li class="nav-section">
        <span class="sidebar-mini-icon">
            <i class="fa fa-ellipsis-h"></i>
        </span>
        <h4 class="text-section">menu</h4>
    </li>
    <li class="nav-item">
        <a href="{{ route('dashboard.index') }}">
            <i class="fas fa-desktop"></i>
            <p>Home</p>
            {{-- <span class="caret"></span> --}}
        </a>
    </li>
    <li class="nav-item">
        <a data-bs-toggle="collapse" href="" data-toggle="modal" data-target="#exampleModal">
            <i class="fas fa-layer-group"></i>
            <p>Novo jogo</p>
            {{-- <span class="caret"></span> --}}
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('admin.lotofacil.result.index') }}">
            <i class="fas fa-layer-group"></i>
            <p>Resultados</p>
            {{-- <span class="caret"></span> --}}
        </a>
    </li>

    <li class="nav-item">
        <a href="widgets.html">
            <i class="fas fa-desktop"></i>
            <p>Ganhos 15</p>
            <span class="badge badge-success">4</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="widgets.html">
            <i class="fas fa-desktop"></i>
            <p>Ganhos 14</p>
            <span class="badge badge-success">4</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="widgets.html">
            <i class="fas fa-desktop"></i>
            <p>Ganhos 13</p>
            <span class="badge badge-success">4</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="widgets.html">
            <i class="fas fa-desktop"></i>
            <p>Ganhos 12</p>
            <span class="badge badge-success">4</span>
        </a>
    </li>
    <li class="nav-item">
        <a href="">
            <i class="fas fa-desktop"></i>
            <p>Ganhos 11</p>
            <span class="badge badge-success">4</span>
        </a>
    </li>
    <form action="{{ route('logout') }}" method="post" class="text-center">
        @csrf
        <button type="submit" class="btn btn-black">Sair</button>
    </form>
</ul>
