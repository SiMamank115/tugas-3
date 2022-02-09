<?php
$data = $this->Partner_model->GetAllPartner();
?>
<div class="p-5 mb-4 mt-4 jumbotron-container rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold hero-text">Tentang Saya</h1>
        <p class="col-md-8 fs-5">Nama saya <span class="fw-bold">Faiz Ramadhan</span>. Lahir pada xx-xx-xxxx Indonesia. Sekarang sedang menempuh pendidikan di SMK xxxxx. Hal yang saya sukai antara lain adalah game, menonton film, coding. Berkelamin laki-laki dan belum menikah maupun mempunyai anak.</p>
        <p class="col-md-8 fs-5">Saya mempelajari tentang web development sejak kelas 3 SMP secara mandiri, yang mana sudah 3 tahun lalu. Menguasai bahasa seperti HTML, CSS, Javascript, PHP, dan C++</p>
        <p class="col-md-8 fs-5 fst-italic">Hidup kadang diatas kadang dibawah. Tapi saya diatas terus, kamu aja yang dibawah.</p>
    </div>
</div>
<div class="p-5 mb-4 mt-4 jumbotron-container-2 rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold hero-text">Partner Saya!</h1>
        <div class="row">
            <?php foreach ($data as $e) : ?>
                <div class="col-sm-6 p-2">
                    <div class="card bg-light border-0 bg-cream">
                        <div class="card-body">
                            <h5 class="card-title"><?=$e["nama"]?></h5>
                            <p class="card-text">Nama saya <span class="fw-bold"><?=$e["nama"]?></span>. Lahir pada <span class="fw-bold"><?=$e["tanggal_lahir"]?></span>. Bekerja sebagai <span class="fw-bold"><?=$e["pekerjaan"]?></span>. Saya menyukai hal seperti <span class="fw-bold"><?=$e["hobi"]?></span>.</p>
                            <p class="fst-italic"><?=$e["moto"]?>.</p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<style>
    .jumbotron-container {
        background-color: #912028;
        /* background-color: #640b11; */
        color: #fcf0c8;
    }

    .jumbotron-container-2 {
        background-color: #face7f;
        /* background-color: #640b11; */
        color: #912028;
    }

    .custom-btn-outline {
        color: #face7f;
        border-color: #face7f;
    }

    .custom-btn-outline:hover {
        color: #640b11;
        background-color: #face7f;
        border-color: #face7f;
    }

    .bg-cream {
        background-color: #fcf0c8 !important;
    }
</style>