<?php include "../components/layouts/top.php" ?>
<!-- Start Code Here -->
<div class="container mb-5">
    <div class="row justify-content-between align-items-center">
        <div class="col-12 col-sm-6 mb-4">
            <h1 class="heading mt-2"> Login E-MONEV PPID</h1>
            <p class="lead my-4" >Penilaian Keterbukaan Informasi <br> Publik di Tingkat Pemerintahan Kota Samarinda</p>
            <img src="../assets/img/ilustrasi.svg" class="w-75 rounded" >
        </div>
        <div class="col-12 col-sm-5">
            <form class="bg-light px-4 py-5 rounded-4">
                <div class="d-flex justify-content-center mb-5">
                    <img src="../assets/img/logo.png" alt="" class="navbar-brand me-1" style="height:50px">
                    <div class="d-flex flex-column">
                        <small>Pemerintah Kota Samarinda</small>
                        <span class="web-name fw-bold text-biru">E-Monev PPID</span>
                    </div>
                </div>
                <div class="mb-3 px-4">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Email">
                </div>
                <div class="mb-3 px-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Password">
                </div>
                <div class="mb-3 px-4 form-check">
                </div>
                <div class="container">
                    <div class="row justify-content-center px-5">
                        <div class="col-6 text-center">
                            <a href="kuisioner.php" class="btn btn-primary bg-biru w-100">LOGIN</a>
                            <!-- <button type="submit" class="btn btn-primary bg-biru w-100">LOGIN</button> -->
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>





<!-- End Code Here -->
<?php include "../components/layouts/bottom.php" ?>