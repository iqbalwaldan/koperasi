{{-- <a href="https://wa.me/+6289518436207" target="__blank" class="contact">
    <img src="../assets/img/phone-call-dark.png" alt="">
</a> --}}
<button class="contact" onclick="toggleContactList()">
    <img src="../assets/img/phone-call-dark.png" alt="">
    <div class="contact__list hidden">
        <a href="https://wa.me/+6289518436207" class="card">
            <p class="m-0">Bindang Perizinan, Kelembagaan, Pengawasan, dan Pemeriksaan</p>
        </a>
        <a href="https://wa.me/+6289518436207" class="card">
            <p class="m-0">Bindang Pemberdayaan Koperasi dan Usaha Mikro</p>
        </a>
        <a href="https://wa.me/+6289518436207" class="card">
            <p class="m-0">Bindang Perindustrian</p>
        </a>
        <a href="https://wa.me/+6289518436207" class="card">
            <p class="m-0">Bindang Perdagangan</p>
        </a>
        <a href="https://wa.me/+6289518436207" class="card">
            <p class="m-0">UPTD Metrologi Legal</p>
        </a>
        <a href="https://wa.me/+6289518436207" class="card">
            <p class="m-0">UPTD Pasar</p>
        </a>
    </div>
</button>
<script>
    function toggleContactList() {
        const contactList = document.querySelector('.contact__list');
        contactList.classList.toggle('hidden');
    }
</script>
