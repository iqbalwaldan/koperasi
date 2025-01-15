<footer class="footer">
    <div class="media__container">
        <div class="footer__about">
            <figure class="footer__figure">
                <img src="{{ asset('assets/img/Logo-Kabupaten-Sumenep.png') }}" alt="" height="50px"
                    width="50px">
            </figure>
            <section class="footer__contact">
                <h2 class="footer__h2">DINAS KOPERASI, USAHA KECIL DAN MENENGAH, PERINDUSTRIAN DAN PERDAGANGAN KABUPATEN
                    SUMENEP</h2>
                <div class="footer__div">
                    <i class="footer__icon fa-solid fa-location-dot"></i>
                    <p>
                        {{-- Jl. Urip Sumoharjo No. 6 Sumenep --}}
                        @foreach ($datas as $data)
                            @if ($data['slug'] == 'alamat' && $data['category_slug'] == 'footer-contact')
                                {{ $data['value'] }}
                            @endif
                        @endforeach
                    </p>
                </div>
                <div class="footer__div">
                    <i class="footer__icon fa-solid fa-phone"></i>
                    <p>
                        @foreach ($datas as $data)
                            @if ($data['slug'] == 'telepon' && $data['category_slug'] == 'footer-contact')
                                {{ $data['value'] }}
                            @endif
                        @endforeach
                    </p>
                </div>
                {{-- <div class="footer__div">
                    <i class="footer__icon fa-brands fa-whatsapp"></i>
                    <p>(0328) 662016</p>
                </div>
                <div class="footer__div">
                    <i class="footer__icon fa-solid fa-envelope"></i>
                    <p>kantor@gmail.com</p>
                </div> --}}
            </section>
            <section class="footer__social">
                {{-- <h2 class="footer__h2">SOSIAL MEDIA</h2>
                <a href="">
                    <div class="footer__div">
                        <i class="footer__icon fa-brands fa-facebook-f"></i>
                        <p>Facebook</p>
                    </div>
                </a>
                <a href="">
                    <div class="footer__div">
                        <i class="footer__icon fa-brands fa-instagram"></i>
                        <p>Instagram</p>
                    </div>
                </a>
                <a href="">
                    <div class="footer__div">
                        <i class="footer__icon fa-brands fa-tiktok"></i>
                        <p>Tiktok</p>
                    </div>
                </a> --}}
            </section>
        </div>
    </div>
</footer>
<div class="footer__copyright">
    <div class="media__container">
        <div class="footer__copyright-container">
            <p>Copyright @2025</p>
        </div>
    </div>
</div>
