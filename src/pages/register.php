<?php include "../components/layouts/top.php" ?>
<!-- Start Code Here -->
<div class="container">
    <div class="my-5">
        <h1 class="">Registrasi</h1>
        <p class="lead">Daftarkan akun untuk login ke E-Monev PPID Kota Samarinda</p>

    </div>
    <form class="container">
        <h4>Data Organisasi Perangkat Daerah</h4>
        <div class="row mt-4">
            <div class="col-12 col-sm-6">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Badan Publik</label>
                    <select class="select2-single w-100 py-3" name="jenis-badan-publik">
                        <option value=""></option>
                        <option value="AL">Alabama</option>
                        <option value="WY">Wyoming</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Badan Publik</label>
                    <select class="select2-single w-100 py-3" name="nama-badan-publik">
                        <option value=""></option>
                        <option value="AL">Alabama</option>
                        <option value="WY">Wyoming</option>
                        <option value="WY">Wyoming</option>
                        <option value="WY">Wyoming</option>
                        <option value="WY">Wyoming</option>
                        <option value="WY">Wyoming</option>
                        <option value="WY">Wyoming</option>
                        <option value="WY">Wyoming</option>
                        <option value="WY">Wyoming</option>
                        <option value="WY">Wyoming</option>
                        <option value="WY">Wyoming</option>
                        <option value="WY">Wyoming</option>
                        <option value="WY">Wyoming</option>
                        <option value="WY">Wyoming</option>
                        <option value="WY">Wyoming</option>
                        <option value="WY">Wyoming</option>
                        <option value="WY">Wyoming</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="mb-3">
                    <label for="" class="form-label">Alamat</label>
                    <textarea type="email" class="form-control" id="" name="alamat" id="" cols="30" rows="5" placeholder="Cth: Jl Balaikota No.12"></textarea>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="mb-3">
                    <label for="" class="form-label">No. Telp/Fax</label>
                    <input type="number" class="form-control" id="" name="telp-fax" placeholder="Cth: 0541-6523800">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Website</label>
                    <input type="text" class="form-control" id="" name="website" placeholder="Cth: https://diskominfo.samarindakota.go.id">
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="mb-3">
                    <label for="" class="form-label">Email Badan Publik</label>
                    <input type="email" class="form-control" id="" name="email-badan-publik" placeholder="Cth: badanpublik@samarindakota.go.id">
                </div>
            </div>
        </div>
        <h4 class="mt-5">Data Responden</h4>
        <div class="row mt-4">
            <div class="col-12 col-sm-6">
                <div class="mb-3">
                    <label for="" class="form-label">Nama Responden</label>
                    <input type="text" class="form-control" id="" name="nama-responden" placeholder="Cth: Fathul Haq">
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jabatan</label>
                    <select class="select2-single w-100 py-3" name="jabatan">
                        <option value=""></option>
                        <option value="AL">Alabama</option>
                        <option value="WY">Wyoming</option>
                    </select>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="mb-3">
                    <label for="" class="form-label">No. Telp/HP</label>
                    <input type="number" class="form-control" id="" name="kontak-responded" placeholder="Cth: 0812xxxxx">
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="mb-3">
                    <label for="" class="form-label">Email Responden</label>
                    <input type="text" class="form-control" id="" name="email-responden" placeholder="Cth: fathulhaq@gmail.com">
                    <div id="" class="form-text text-biru ms-2">Email ini digunakan untuk login.</div>
                </div>
            </div>
        </div>
        <h4 class="mt-5">Data PPID /Pejabat di bidang Informasi, Komunikasi atau Kehumasan</h4>
        <div class="row mt-4">
            <div class="col-12 col-sm-6">
                <div class="mb-3">
                    <label for="" class="form-label">Nama PPID/Pejabat di bidang Informasi, Komunikasi atau Kehumasan</label>
                    <input type="text" class="form-control" id="" name="nama-pejabat" placeholder="Cth: Irvan Vans">
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="mb-3">
                    <label for="" class="form-label">No. Telp/HP</label>
                    <input type="number" class="form-control" id="" name="kontak-pejabat" placeholder="Cth: 0812xxxxx">
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="mb-3">
                    <label for="" class="form-label">Email Responden</label>
                    <input type="text" class="form-control" id="" name="email-responden" placeholder="Cth: pejabat@gmail.com">
                </div>
            </div>
        </div>
        <h4 class="mt-5">Informasi Akun</h4>
        <div class="row mt-4">
            <div class="col-12 col-sm-6">
                <div class="mb-3">
                    <label for="" class="form-label">Password</label>
                    <input type="password" class="form-control" id="" name="password" placeholder="Cth: fathulhaq@gmail.com">
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <div class="mb-3">
                    <label for="" class="form-label">Ulangi Password</label>
                    <input type="password" class="form-control" id="" name="confirm-password" placeholder="Cth: fathulhaq@gmail.com">
                </div>
            </div>
        </div>
        <a href="#" class="btn btn-primary bg-biru px-5 mt-4 mb-5">Simpan</a>
    </form>
</div>
<!-- End Code Here -->
<?php include "../components/layouts/bottom.php" ?>