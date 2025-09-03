<ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-home"></i> Home
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('warga.index') }}">
            <i class="fas fa-users"></i> Data Warga
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('pembayaran.index') }}">
            <i class="fas fa-money-bill"></i> Pembayaran
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('kategori.index') }}">
            <i class="fas fa-list"></i> Kategori Iuran
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('officer.index') }}">
            <i class="fas fa-user-shield"></i> Data Officer
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('laporan.index') }}">
            <i class="fas fa-file-alt"></i> Laporan
        </a>
    </li>
</ul>
