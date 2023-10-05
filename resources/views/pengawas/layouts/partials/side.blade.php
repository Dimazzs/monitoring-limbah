<div class="nk-sidebar">           
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            
            <li>
                <a class="has" href='/' aria-expanded="false">
                    <i class="icon-speedometer "></i><span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li>
                <a class="has" href='/profile' aria-expanded="false">
                    <i class="fa fa-user "></i><span class="nav-text">Data Pengguna</span>
                </a>
            </li>
            <li class="mega-menu mega-menu-sm">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-users"></i><span class="nav-text">Data Pemohon</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="/terima">Data yang sudah di Terima</a></li>
                </ul>
            </li>
            <li class="mega-menu mega-menu-sm">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Laporan Monitoring</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="/laporan/create">Form Laporan</a></li>
                    <li><a href="/laporan">Data Laporan</a></li>
                    {{-- @foreach ($laporan as $item)
                    <li><a href="{{ route('laporan.edit', $laporan->id) }}">Edit</a></li>
                    @endforeach --}}
                </ul>
            </li>
        </ul>
    </div>
</div>