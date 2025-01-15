<div id="sidebar" class="active">
    <div class="sidebar-wrapper active d-flex flex-column justify-content-between">
        <div>
            <div class="sidebar-header">
                <div class="d-flex justify-content-between">
                    <div class="logo">
                        <a href="index.html"><img src="{{ asset('assets/img/Logo DISKOPUKMPERINDAG Kab. Sumenep.png') }}" alt="Logo" srcset=""
                                style="width: 250px; height: auto;"></a>
                    </div>
                    <div class="toggler">
                        <a href="#" class="sidebar-hide d-xl-none d-block text-white"><i
                                class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title">Profil</li>
                    <li class="sidebar-item {{ $active == 'struktur-organisasi' ? 'active' : '' }}">
                        <a href="{{ route('admin.manage-profile.edit', ['slug' => 'struktur-organisasi']) }}"
                            class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Struktur Organisasi</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{ $active == 'struktur-keanggotaan' ? 'active' : '' }}">
                        <a href="{{ route('admin.manage-member-structure.index')}}"
                            class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Struktur Keanggotaan</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{ $active == 'visi-dan-misi' ? 'active' : '' }}">
                        <a href="{{ route('admin.manage-profile.edit', ['slug' => 'visi-dan-misi']) }}"
                            class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Visi dan Misi</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{ $active == 'regulasi-tugas-dan-fungsi' ? 'active' : '' }}">
                        <a href="{{ route('admin.manage-profile.edit', ['slug' => 'regulasi-tugas-dan-fungsi']) }}"
                            class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Regulasi, Tugas dan Fungsi</span>
                        </a>
                    </li>
                    <li class="sidebar-title">Berita</li>
                    <li class="sidebar-item {{ $active == 'press-release' ? 'active' : '' }}">
                        <a href="{{ route('admin.manage-press-release.index') }}" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Siaran Pers</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{ $active == 'activity' ? 'active' : '' }}">
                        <a href="{{ route('admin.manage-activity.index') }}" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Kegiatan</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{ $active == 'gallery' ? 'active' : '' }}">
                        <a href="{{ route('admin.manage-gallery.index') }}" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Galeri</span>
                        </a>
                    </li>
                    <li class="sidebar-title">File</li>
                    <li class="sidebar-item {{ $active == 'regulasi' ? 'active' : '' }}" has-sub>
                        <a href="{{ route('admin.manage-data.index', ['slug' => 'regulasi']) }}" class="sidebar-link">
                            <i class="bi bi-grid-fill"></i>
                            <span>Regulasi</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{ $active == 'layanan' ? 'active' : '' }}" has-sub>
                        <a href="{{ route('admin.manage-service.index') }}" class="sidebar-link">
                            <i class="bi bi-grid-fill"></i>
                            <span>Layanan</span>
                        </a>
                    </li>
                    <li class="sidebar-item {{ $active == 'informasi' ? 'active' : '' }}" has-sub>
                        <a href="{{ route('admin.manage-data.index', ['slug' => 'informasi']) }}" class="sidebar-link">
                            <i class="bi bi-grid-fill"></i>
                            <span>Informasi</span>
                        </a>
                    </li>
                    <li class="sidebar-title">Pengaturan</li>
                    <li class="sidebar-item {{ $active == 'pengaturan' ? 'active' : '' }}" has-sub>
                        <a href="{{ route('admin.manage-setting.edit') }}" class="sidebar-link">
                            <i class="bi bi-grid-fill"></i>
                            <span>Pengaturan</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        {{-- <button class="sidebar-toggler btn x"><i data-feather="x"></i></button> --}}
        <ul class="menu">
            <li class="sidebar-item">
                <a href="{{ route('admin.logout') }}" class="sidebar-link danger">
                    {{-- <i class="bi bi-grid-fill"></i> --}}
                    <i class="bi bi-box-arrow-left"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
</div>
