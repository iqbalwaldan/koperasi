<div class="topbar py-3">
    <div class="media__container">
        <div class="topbar__container">
            <figure class="topbar__logo">
                <a href="/" class="d-flex">
                    {{-- <img src="{{ $logo_utama }}" alt="Logo Koperasi Indonesia"> --}}
                    <img src="{{ asset('assets/img/Logo DISKOPUKMPERINDAG Kab. Sumenep.png') }}" alt="Logo Koperasi Indonesia">
                </a>
            </figure>
            <div class="topbar__menu">
            </div>
        </div>
    </div>
</div>
<header class="header py-3">
    <div class="header__nav-sm-container">
        <div class="media__container media__container-nav-sm">
            <div class="header__nav-sm">
                <ul class="header__nav-sm-ul">
                    <li class="header__nav-sm-dropdown">
                        <a href="/">BERANDA</a>
                    </li>
                    <li class="header__nav-sm-dropdown dropdown">
                        <p class="dropdown-toggle">PROFIL</p>
                        <ul class="header__nav-sm-dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="/profil/struktur-organisasi">Struktur Organisasi</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/profil/visi-dan-misi">Visi dan Misi</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/profil/regulasi-tugas-dan-fungsi">Regulasi, Tugas dan Fungsi</a>
                            </li>
                        </ul>
                    </li>
                    <li class="header__nav-sm-dropdown dropdown">
                        <p class="dropdown-toggle">PUBLIKASI</p>
                        <ul class="header__nav-sm-dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="/publikasi/siaran-pers">Siaran Pers</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/publikasi/informasi">Informasi</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/publikasi/galeri-foto">Galeri Foto</a>
                            </li>
                        </ul>
                    </li>
                    <li class="header__nav-sm-dropdown dropdown">
                        <p class="dropdown-toggle">PENGUMUMAN</p>
                        <ul class="header__nav-sm-dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="/kegiatan">Kegiatan</a>
                            </li>
                        </ul>
                    </li>
                    <li class="header__nav-sm-dropdown dropdown">
                        <p class="dropdown-toggle">REGULASI</p>
                        <ul class="header__nav-sm-dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="/regulasi/undang-undang">Undang Undang (UU)</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/regulasi/peraturan-pengganti-undang-undang">Peraturan
                                    Pengganti Undang Undang (PERPU)</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/regulasi/peraturan-pemerintah">Peraturan Pemerintah
                                    (PP)</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/regulasi/peraturan-presiden">Peraturan Presiden
                                    (PERPRES)</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/regulasi/peraturan-mentri">Peraturan Mentri (PERMEN)</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/regulasi/peraturan-pemerintah-provinsi">⁠Peraturan
                                    Pemerintah Provinsi</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/regulasi/peraturan-gubernur">Peraturan Gubernur
                                    (PERGUB)</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/regulasi/peraturan-daerah">Peraturan Daerah (PERDA)</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/regulasi/peraturan-bupati">Peraturan Bupati (PERBUB)</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/regulasi/surat-kuasa-bupati">Surat Kuasa Bupati</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/regulasi/surat-kuasa-dinas">Surat Kuasa Dinas</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="/regulasi/lain-lain">Lain-lain</a>
                            </li>
                        </ul>
                    </li>
                    <li class="header__nav-sm-dropdown">
                        <a href="/layanan-publik">LAYANAN</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="menu-icon-btn">
        <div class="menu-icon"></div>
    </div>
    <div class="media__container">
        <nav class="header__nav">
            <ul class="header__ul">
                <li class="header__li">
                    <a href="/"><i class="fa-solid fa-house-chimney"></i> BERANDA</a>
                </li>
                <li class="header__li dropdown">
                    <p class=""><i class="fa-solid fa-user"></i> PROFIL</p>
                    <div class="header__dropdown dropdown-menu">
                        <a class="dropdown-item" href="/profil/struktur-organisasi">Struktur Organisasi</a>
                        <a class="dropdown-item" href="/profil/struktur-keanggotaan">Struktur Keanggotaan</a>
                        <a class="dropdown-item" href="/profil/visi-dan-misi">Visi dan Misi</a>
                        <a class="dropdown-item" href="/profil/regulasi-tugas-dan-fungsi">Regulasi, Tugas dan Fungsi</a>
                    </div>
                </li>
                <li class="header__li dropdown">
                    <p class=""><i class="fa-solid fa-newspaper"></i> PUBLIKASI</p>
                    <div class="header__dropdown dropdown-menu">
                        <a class="dropdown-item" href="/publikasi/siaran-pers">Siaran Pers</a>
                        <a class="dropdown-item" href="/publikasi/informasi">Informasi</a>
                        <a class="dropdown-item" href="/publikasi/galeri-foto">Galeri Foto</a>
                    </div>
                </li>
                <li class="header__li dropdown">
                    <p class=""><i class="fa-solid fa-bullhorn"></i> PENGUMUMAN</p>
                    <div class="header__dropdown dropdown-menu">
                        <a class="dropdown-item" href="/kegiatan">Kegiatan</a>
                    </div>
                </li>
                <li class="header__li dropdown">
                    <p class=""><i class="fa-solid fa-book"></i> REGULASI</p>
                    <div class="header__dropdown dropdown-menu">
                        <a class="dropdown-item" href="/regulasi/undang-undang">Undang Undang (UU)</a>
                        <a class="dropdown-item" href="/regulasi/peraturan-pengganti-undang-undang">Peraturan
                            Pengganti Undang Undang (PERPU)</a>
                        <a class="dropdown-item" href="/regulasi/peraturan-pemerintah">Peraturan Pemerintah (PP)</a>
                        <a class="dropdown-item" href="/regulasi/peraturan-presiden">Peraturan Presiden (PERPRES)</a>
                        <a class="dropdown-item" href="/regulasi/peraturan-mentri">Peraturan Mentri (PERMEN)</a>
                        <a class="dropdown-item" href="/regulasi/peraturan-pemerintah-provinsi">⁠Peraturan Pemerintah
                            Provinsi</a>
                        <a class="dropdown-item" href="/regulasi/peraturan-gubernur">Peraturan Gubernur (PERGUB)</a>
                        <a class="dropdown-item" href="/regulasi/peraturan-daerah">Peraturan Daerah (PERDA)</a>
                        <a class="dropdown-item" href="/regulasi/peraturan-bupati">Peraturan Bupati (PERBUB)</a>
                        <a class="dropdown-item" href="/regulasi/surat-kuasa-bupati">Surat Kuasa Bupati</a>
                        <a class="dropdown-item" href="/regulasi/surat-kuasa-dinas">Surat Kuasa Dinas</a>
                        <a class="dropdown-item" href="/regulasi/lain-lain">Lain-lain</a>
                    </div>
                </li>
                <li class="header__li">
                    <a href="/layanan-publik"><i class="fa-solid fa-table"></i> LAYANAN</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<section class="page-title">
    <div class="media__container">
        <h1 class="" style="font-size: 1.5rem">{{ $title }}</h1>
    </div>
</section>
@section('script')
    <script>
        $(document).ready(function() {
            function toggleMenu() {
                if ($(window).width() <= 768) {

                    $('.menu-icon').toggleClass('active');
                    $('.header__nav-sm-container').toggleClass('active');
                }
            }

            $('.menu-icon-btn').click(function(event) {
                event.stopPropagation();
                toggleMenu();
            });

            $(document).click(function(event) {
                if (
                    !$(event.target).closest('.menu-icon-btn').length &&
                    !$(event.target).closest('.header__nav-sm-container').length
                ) {
                    $('.menu-icon').removeClass('active');
                    $('.header__nav-sm-container').removeClass('active');
                }
            });

            $(window).resize(function() {
                if ($(window).width() > 768) {
                    $('.menu-icon').removeClass('active');
                    $('.header__nav-sm-container').removeClass('active');
                }
            });

            $('.header__li.dropdown').hover(
                function() {
                    const $dropdown = $(this).find('.header__dropdown');

                    // Cek apakah dropdown sedang slide up
                    if (!$dropdown.data('isAnimating')) {
                        $(this).addClass('active');
                        $dropdown.stop(true, true).slideDown(300);
                    }
                },
                function() {
                    const $dropdown = $(this).find('.header__dropdown');

                    // Tandai bahwa animasi sedang berlangsung
                    $dropdown.data('isAnimating', true);

                    $dropdown.stop(true, true).slideUp(300, function() {
                        $dropdown.data('isAnimating', false); // Reset status animasi setelah selesai
                    });

                    $(this).removeClass('active');
                }
            );


            $('.header__nav-sm-dropdown.dropdown').click(function(event) {
                event.stopPropagation();

                $('.header__nav-sm-dropdown.dropdown').not(this).removeClass('active')
                    .find('.header__nav-sm-dropdown-menu').stop(true, true).slideUp(500);

                $(this).toggleClass('active');

                const dropdownMenu = $(this).find('.header__nav-sm-dropdown-menu');

                if ($(this).hasClass('active')) {
                    dropdownMenu.stop(true, true).slideDown(500);
                } else {
                    dropdownMenu.stop(true, true).slideUp(500);
                }
            });
        });
    </script>
@endsection
