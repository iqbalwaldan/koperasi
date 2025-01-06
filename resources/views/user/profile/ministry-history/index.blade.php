@extends('user.layout.index')

@section('main')
    <main class="main">
        <section class="media__container card p-4 my-3">
            {{-- <div id="editor">
                <p>Hello from CKEditor 5!</p>
            </div>
            <button id="submit" class="btn btn-primary">Submit</button> --}}
            <article class="profile">
                @if ($history)
                    {!! $history->description !!}
                @endif
                {{-- <p><strong> PERIODE SEBELUM KEMERDEKAAN </strong></p>
                <p>Koperasi adalah institusi (lembaga) yang tumbuh atas dasar solidaritas tradisional dan kerjasama antar
                    individu, yang pernah berkembang sejak awal sejarah manusia sampai pada awal Revolusi Industrial di
                    Eropa pada akhir abad 18 dan selama abad 19, sering disebut sebagai Koperasi Historis atau Koperasi
                    Pra-Industri. Koperasi Modern didirikan pada akhir abad 18, terutama sebagai jawaban atas
                    masalah-masalah sosial yang timbul selama tahap awal Revolusi Industri.</p>
                <p>Di Indonesia, ide-ide perkoperasian diperkenalkan pertama kali oleh Patih di Purwokerto, Jawa Tengah, R.
                    Aria Wiraatmadja yang pada tahun 1896 mendirikan sebuah Bank untuk Pegawai Negeri. Cita-cita semangat
                    tersebut selanjutnya diteruskan oleh De Wolffvan Westerrode.</p>
                <p>Pada tahun 1908, Budi Utomo yang didirikan oleh Dr. Sutomo memberikan peranan bagi gerakan koperasi untuk
                    memperbaiki kehidupan rakyat. Pada tahun 1915 dibuat peraturan Verordening op de Cooperatieve
                    Vereeniging, dan pada tahun 1927 Regeling Inlandschhe Cooperatiev.</p>
                <p>Pada tahun 1927 dibentuk Serikat Dagang Islam, yang bertujuan untuk memperjuangkan kedudukan ekonomi
                    pengusah-pengusaha pribumi. Kemudian pada tahun 1929, berdiri Partai Nasional Indonesia yang
                    memperjuangkan penyebarluasan semangat koperasi. Hingga saat ini kepedulian pemerintah terhadap
                    keberadaan koperasi nampak jelas dengan membentuk lembaga yang secara khusus menangani pembinaan dan
                    pengembangan koperasi.</p>
                <p><strong>Kronologis lembaga yang menangani pembinaan koperasi pada saat itu adalah sebagai
                        berikut:</strong></p>
                <p><strong>Tahun 1930</strong></p>
                <p>Pemerintah Hindia Belanda membentuk Jawatan Koperasi yang keberadaannya dibawah Departemen Dalam Negeri,
                    dan diberi tugas untuk melakukan pendaftaran dan pengesahan koperasi, tugas ini sebelumnya dilakukan
                    oleh Notaris.</p>
                <p><strong>Tahun 1935</strong></p>
                <p>Jawatan Koperasi dipindahkan ke Departemen Economische Zaken, dimasukkan dalam usaha hukum (Bafdeeling
                    Algemeene Economische Aanglegenheden). Pimpinan Jawatan Koperasi diangkat menjadi Penasehat.</p>
                <p><strong>Tahun 1939</strong></p>
                <p>Jawatan Koperasi dipisahkan dari Afdeeling Algemeene Aanglegenheden ke Departemen Perdagangan Dalam
                    Negeri menjadi Afdeeling Coperatie en Binnenlandsche Handel. Tugasnya tidak hanya memberi bimbingan dan
                    penerangan tentang koperasi tetapi meliputi perdagangan untuk Bumi Putra.</p>
                <p><strong>Tahun 1942</strong></p>
                <p>Pendudukan Jepang berpengaruh pula terhadap keberadaan jawatan koperasi. Saat ini jawatan koperasi
                    dirubah menjadi SYOMIN KUMIAI TYUO DJIMUSYO dan Kantor di daerah diberi nama SYOMIN KUMIAI DJIMUSYO.</p>
                <p><strong>Tahun 1944</strong></p>
                <p>Didirikan JUMIN KEIZAIKYO (Kantor Perekonomian Rakyat) Urusan Koperasi menjadi bagiannya dengan nama
                    KUMAIKA, tugasnya adalah mengurus segala aspek yang bersangkutan dengan Koperasi.</p>
                <p><strong>PERIODE SETELAH KEMERDEKAAN</strong></p>
                <p><strong>Tahun 1945</strong></p>
                <p>Koperasi masuk dalam tugas Jawatan Koperasi serta Perdagangan Dalam Negeri dibawah Kementerian
                    Kemakmuran.</p>
                <p><strong>Tahun 1946</strong></p>
                <p>Urusan Perdagangan Dalam Negeri dimasukkan pada Jawatan Perdagangan, sedangkan Jawatan Koperasi berdiri
                    sendiri mengurus soal koperasi.</p>
                <p><strong>Tahun 1947 - 1948</strong></p>
                <p>Jawatan Koperasi dibawah pimpinan R. Suria Atmadja, pada masa ini ada suatu peristiwa yang cukup penting
                    yaitu tanggal 12 Juli 1947, Gerakan Koperasi mengadakan Kongres di Tasikmalaya dan hasil Kongres
                    menetapkan bahwa tanggal 12 Juli dinyatakan sebagai Hari Koperasi.</p>
                <p><strong>Tahun 1949</strong></p>
                <p>Pusat Jawatan Koperasi RIS berada di Yogyakarta, tugasnya adalah mengadakan kontak dengan jawatan
                    koperasi di beberapa daerah lainnya. Tugas pokok yang dihasilkan telah melebur Bank dan Lumbung Desa
                    dialihkan kepada Koperasi. Pada tahun yang sama yang diundangkan dengan Regeling Cooperatieve 1949
                    Ordinasi 7 Juli 1949 (SBT. No. 179).</p>
                <p><strong>Tahun 1950</strong></p>
                <p>Jawatan Koperasi RI yang berkedudukan di Yogyakarta digabungkan dengan Jawatan Koperasi RIS, bekedudukan
                    di Jakarta.</p>
                <p><strong>Tahun 1954</strong></p>
                <p>Pembina Koperasi masih tetap diperlukan oleh Jawatan Koperasi dibawah pimpinan oleh Rusli Rahim.</p>
                <p><strong>Tahun 1958</strong></p>
                <p>Jawatan Koperasi menjadi bagian dari Kementerian Kemakmuran.</p>
                <p><strong>Tahun 1960</strong></p>
                <p>Perkoperasian dikelola oleh Menteri Transmigrasi Koperasi dan Pembangunan Masyarakat Desa
                    (TRANSKOPEMADA), dibawah pimpinan seorang Menteri yang dijabat oleh Achmadi.</p>
                <p><strong>Tahun 1963</strong></p>
                <p>Transkopemada diubah menjadi Departemen Koperasi dan tetap dibawah pimpinan Menteri Achmadi.</p>
                <p><strong>Tahun 1964</strong></p>
                <p>Departemen Koperasi diubah menjadi Departemen Transmigrasi dan Koperasi dibawah pimpinan Menteri ACHMADI
                    kemudian diganti oleh Drs. Achadi, dan Direktur Koperasi dibawah pimpinan seorang Direktur Jenderal yang
                    bernama Chodewi Amin.</p>
                <p><strong>PERIODE TAHUN 1966 - 2004</strong></p>
                <p><strong>Tahun 1966</strong></p>
                <p>Dalam tahun 1966 Departemen Koperasi kembali berdiri sendiri, dan dipimpin oleh Pang Suparto. Pada tahun
                    yang sama, Departemen Koperasi dirubah menjadi Kementerian Perdagangan dan Koperasi dibawah pimpinan
                    Prof. Dr. Sumitro Djojohadikusumo, sedangkan Direktur Jenderal Koperasi dijabat oleh Ir. Ibnoe Soedjono
                    (dari tahun 1960 s/d 1966).</p>
                <p><strong>Tahun 1967</strong></p>
                <p>Pada tahun 1967 diberlakukan Undang-undang Nomor 12 Tahun 1967 tentang Pokok-pokok Perkoperasian tanggal
                    18 Desember 1967. Koperasi masuk dalam jajaran Departemen Dalam Negeri dengan status Direktorat
                    Jenderal. Mendagri dijabat oleh Basuki Rachmad, dan menjabat sebagai Dirjen Koperasi adalah Ir. Ibnoe
                    Soedjono.</p>
                <p><strong>Tahun 1968</strong></p>
                <p>Kedudukan Direktorat Jenderal Koperasi dilepas dari Departemen Dalam Negeri, digabungkan kedalam jajaran
                    Departemen Transmigrasi dan Koperasi, ditetapkan berdasarkan :</p>
                <p>Keputusan Presiden Nomor 183 Tahun 1968 tentang Susunan Organisasi Departemen.</p>
                <p>Keputusan Menteri Transmigrasi dan Koperasi Nomor 120/KTS/ Mentranskop/1969 tentang Kedudukan Tugas Pokok
                    dan Fungsi Susunan Organisasi berserta Tata Kerja Direktorat Jenderal Koperasi.</p>
                <p>Menjabat sebagai Menteri Transkop adalah M. Sarbini, sedangkan Dirjen Koperasi tetap Ir. Ibnoe Soedjono.
                </p>
                <p><strong>Tahun 1974</strong></p>
                <p>Direktorat Jenderal Koperasi kembali mengalami perubahan yaitu digabung kedalam jajaran Departemen Tenaga
                    Kerja, Transmigrasi dan Koperasi, yang ditetapkan berdasarkan :</p>
                <p>Keputusan Presiden Nomor 45 Tahun 1974 tentang Susunan Organisasi Departemen Tenaga Kerja, Transmigrasi
                    dan Koperasi.</p>
                <p>Instruksi Menteri Tenaga Kerja, Transmigrasi dan Koperasi Nomor : INS-19/MEN/1974, tentang Susunan
                    Organisasi Direktorat Jenderal Koperasi tidak ada perubahan (tetap memberlakukan Keputusan Menteri
                    Transmigrasi Nomor : 120/KPTS/Mentranskop/1969) yang berisi penetapan tentang Susunan Organisasi
                    Direktorat Jenderal Koperasi. Menjabat sebagai Menteri adalah Prof. DR. Subroto, adapun Dirjen Koperasi
                    tetap Ir. Ibnoe Soedjono.</p>
                <p><strong>Tahun 1978</strong></p>
                <p>Direktorat Jenderal Koperasi masuk dalam Departemen Perdagangan dan Koperasi, dengan Drs. Radius Prawiro
                    sebagai Menterinya. Untuk memperkuat kedudukan koperasi dibentuk puia Menteri Muda Urusan Koperasi, yang
                    dipimpin oleh Bustanil Arifin, SH. Sedangkan Dirjen Koperasi dijabat oleh Prof. DR. Ir. Soedjanadi
                    Ronodiwiryo.</p>
                <p><strong>Tahun 1983</strong></p>
                <p>Dengan berkembangnya usaha koperasi dan kompleksnya masalah yang dihadapi dan ditanggulangi, koperasi
                    melangkah maju di berbagai bidang dengan memperkuat kedudukan dalam pembangunan, maka pada Kabinet
                    Pembangunan IV Direktorat Jenderal Koperasi ditetapkan menjadi Departemen Koperasi, melalui Keputusan
                    Presiden Nomor 20 Tahun 1983, tanggal 23 April 1983.</p>
                <p><strong>Tahun 1991</strong></p>
                <p>Melalui Keputusan Presiden Nomor 42 Tahun 1991, tanggal 10 September 1991 terjadi perubahan susunan
                    organisasi Departemen Koperasi yang disesuaikan keadaan dan kebutuhan.</p>
                <p>Tahun 1992</p>
                <p>Diberlakukan Undang-undang Nomor : 25 Tahun 1992 tentang Perkoperasian, selanjutnya mancabut dan tidak
                    berlakunya lagi Undang-undang Nomor: 12 Tahun 1967 tentang Pokok-pokok Perkoperasian.</p>
                <p>Tahun 1993</p>
                <p>Berdasarkan Keputusan Presiden Nomor : 96 Tahun 1993, tentang Kabinet Pembangunan VI dan Keppres Nomor 58
                    Tahun 1993, telah terjadi perubahan nama Departemen Koperasi menjadi Departemen Koperasi dan Pembinaan
                    Pengusaha Kecil. Tugas Departemen Koperasi menjadi bertambah dengan membina Pengusaha Kecil. Hal ini
                    merupakan perubahan yang strategis dan mendasar, karena secara fundamental golongan ekonomi kecil
                    sebagai suatu kesatuan dan keseluruhan dan harus ditangani secara mendasar mengingat yang perekonomian
                    tidak terbatas hanya pada pembinaan perkoperasian saja.</p>
                <p>Tahun 1996</p>
                <p>Dengan adanya perkembangan dan tuntutan di lapangan, maka diadakan peninjauan kembali susunan organisasi
                    Departemen Koperasi dan Pembinaan Pengusaha Kecil, khususnya pada unit operasional, yaitu Ditjen
                    Pembinaan Koperasi Perkotaan, Ditjen Pembinaan Koperasi Pedesaan, Ditjen Pembinaan Pengusaha Kecil.
                    Untuk mengantisipasi hal tersebut telah diadakan perubahan dan penyempurnaan susunan organisasi serta
                    menomenklaturkannya, agar secara optimal dapat menampung seluruh kegiatan dan tugas yang belum
                    tertampung.</p>
                <p>Tahun 1998</p>
                <p>Dengan terbentuknya Kabinet Pembangunan VII berdasarkan Keputusan Presiden Republik Indonesia Nomor : 62
                    Tahun 1998, tanggal 14 Maret 1998, dan Keppres Nomor 102 Thun 1998 telah terjadi penyempurnaan nama
                    Departemen Koperasi dan Pembinaan Pengusaha Kecil menjadi Departemen Koperasi dan Pengusaha Kecil, hal
                    ini merupakan penyempurnaan yang kritis dan strategis karena kesiapan untuk melaksanakan reformasi
                    ekonomi dan keuangan dalam mengatasi masa krisis saat itu serta menyiapkan landasan yang kokoh, kuat
                    bagi Koperasi dan Pengusaha Kecil dalam memasuki persaingan bebas/era globalisasi yang penuh tantangan.
                </p>
                <p>Tahun 1999</p>
                <p>Melalui Keppres Nomor 134 Tahun 1999 tanggal 10 November 1999 tentang Kedudukan, Tugas, Fungsi, Susunan
                    Organisasi dan Tata Kerja Menteri Negara, maka Departemen Koperasi dan PK diubah menjadi Menteri Negara
                    Koperasi dan Pengusaha Kecil dan Menengah.</p>
                <p>Tahun 2000</p>
                <p>Berdasarkan Keppres Nomor 51 Tahun 2000 tanggal 7 April 2000, maka ditetapkan Badan Pengembangan Sumber
                    Daya Koperasi dan Pengusaha Kecil Menengah.</p>
                <p>Melalui Keppres Nomor 166 Tahun 2000 tanggal 23 November 2000 tentang Kedudukan, Tugas, Fungsi,
                    Kewenangan, Susunan Organisasi dan Tata Kerja Lembaga Pemerintah Non Departemen. maka dibentuk Badan
                    Pengembangan Sumber Daya Koperasi dan Pegusaha Kecil dan Menengah (BPS-KPKM).</p>
                <p>Berdasarkan Keppres Nomor 163 Tahun 2000 tanggal 23 November 2000 tentang Kedudukan, Tugas, Fungsi,
                    Kewenangan, Susunan Organisasi dan Tata Kerja Menteri Negara, maka Menteri Negara Koperasi dan PKM
                    diubah menjadi Menteri Negara Urusan Koperasi dan Usaha Kecil dan Menengah.</p>
                <p>Melalui Keppres Nomor 175 Tahun 2000 tanggal 15 Desember 2000 tentang Susunan Organisasi dan Tugas
                    Menteri Negara, maka Menteri Negara Urusan Koperasi dan UKM diubah menjadi Menteri Negara Koperasi dan
                    Usaha Kecil dan Menengah.</p>
                <p>Tahun 2001</p>
                <p>Melalui Keppres Nomor 101 Tahun 2001 tanggal 13 September 2001 tentang Kedudukan, Tugas, Fungsi,
                    Kewenangan, Susunan Organisasi dan Tata Kerja Menteri Negara, maka dikukuhkan kembali Menteri Negara
                    Koperasi dan Usaha Kecil dan Menengah.</p>
                <p>Berdasarkan Keppres Nomor 103 Tahun 2001 tanggal 13 September 2001 tentang Kedudukan, Tugas, Fungsi,
                    Kewenangan, usunan Organisasi dan Tata Kerja Lembaga Non Pemerintah, maka Badan Pengembangan Sumber Daya
                    Koperasi dan Pengusaha Kecil Menengah dibubarkan.</p>
                <p>Melalui Keppres Nomor 108 Tahun 2001 tanggal 10 Oktober 2001 tentang Unit Organisasi dan Tugas Eselon I
                    Menteri Negara, maka Menteri Negara Koperasi dan UKM ditetapkan membawahi Setmeneg, Tujuh Deputi, dan
                    Lima Staf Ahli. Susunan ini berlaku hingga tahun 2004 sekarang ini.</p>
                <p>Tahun 2015</p>
                <p>Melalui Perpres Nomor 62 Tahun 2015 tanggal 18 Mei 2015 tentang Kementerian Koperasi dan Usaha Kecil dan
                    Menengah.</p>
                <p>Tahun 2020</p>
                <p>Melalui Perpres Nomor 96 Tahun 2020 tanggal 23 September 2020 tentang Kementerian Koperasi dan Usaha
                    Kecil dan Menengah.</p> --}}
            </article>
        </section>
    </main>
@endsection
