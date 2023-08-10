<?php include "../components/layouts/top.php" ?>

<div class="container">
  <div class="my-4">
    <h1 class="heading mt-2">Kuisioner E-Monev PPID Kota Samarinda</h1>
    <p class="my-4">
            <ol>
                <li class="lead fs-6">Lengkapi pertanyaan berikut dengan jawaban yang sesuai</li>
                <li class="lead fs-6">Pilih “Ya” atau “Tidak” pada salah satu opsi yang tersedia</li>
                <li class="lead fs-6">Berikan data dukung pada setiap pertanyaan dengan mencantumkan alamat web/situs/portal dan</li>
            </ol>
            <q class="lead fw-normal fst-italic">Penilaian mandiri terhadap semua jawaban adalah objektif/sesuai dengan kondisi sebenarnya dan wajib mencantumkan/melampirkan dengan data dukung.</q>
    </p>
  </div>
  <div class="row">
    <div class="col-12 col-sm-12 mb-4">
      <div class="list-group" id="list-tab" role="tablist">
        <div class="row">
            <div class="col-6 col-sm-4 px-1">
                <a class="rounded py-3 border mb-1 fs-sm list-group-item list-group-item-action active" id="list-group1-list" data-bs-toggle="list" href="#group1" role="tab" aria-controls="list-group1">Kualitas Informasi</a>
            </div>
            <div class="col-6 col-sm-4 px-1">
                <a class="rounded py-3 border mb-1 fs-sm list-group-item list-group-item-action" id="list-group2-list" data-bs-toggle="list" href="#group2" role="tab" aria-controls="list-group2">Jenis Informasi</a>
            </div>
            <div class="col-6 col-sm-4 px-1">
                <a class="rounded py-3 border mb-1 fs-sm list-group-item list-group-item-action" id="list-group3-list" data-bs-toggle="list" href="#group3" role="tab" aria-controls="list-group3">Pelayanan Informasi</a>
            </div>
            <div class="col-6 col-sm-4 px-1">
                <a class="rounded py-3 border mb-1 fs-sm list-group-item list-group-item-action" id="list-group4-list" data-bs-toggle="list" href="#group4" role="tab" aria-controls="list-group4">Komitmen Organisasi</a>
            </div>
            <div class="col-6 col-sm-4 px-1">
                <a class="rounded py-3 border mb-1 fs-sm list-group-item list-group-item-action" id="list-group5-list" data-bs-toggle="list" href="#group5" role="tab" aria-controls="list-group5">Sarana Prasarana</a>
            </div>
            <div class="col-6 col-sm-4 px-1">
                <a class="rounded py-3 border mb-1 fs-sm list-group-item list-group-item-action" id="list-group6-list" data-bs-toggle="list" href="#group6" role="tab" aria-controls="list-group6">Digitalisasi</a>
            </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-12 mb-4">
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="group1" role="tabpanel" aria-labelledby="list-group1-list">
          <h5 class="text-center fw-bold mt-4">Kualitas Informasi</h5>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col" style="width: 4rem" class="text-center fs-sm">No.</th>
                  <th scope="col" class="fs-sm text-capitalize">Informasi Terkait Fungsi Utama Perangkat Daerah</th>
                  <th scope="col" class="fs-sm text-center" style="width: 4rem">Ketersediaan</th>
                  <th scope="col" class="fs-sm text-center" style="width: 20rem">Url Website</th>
                  <th scope="col" class="fs-sm text-center">Bukti Pelaksanaan</th>
                </tr>
              </thead>
              <tbody>
                <tr class="bg-abu">
                  <td scope="row" style="width: 4rem" class="text-center fs-sm fw-bold">A</td>
                  <td class="fs-sm fw-semibold" colspan="4">Informasi tentang profil Perangkat Daerah</td>
                </tr>
                <tr>
                  <td scope="row" style="width: 4rem" class="text-center fs-sm">1</td>
                  <td class="fs-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti, repellat nulla. Odio, beatae numquam voluptas eius exercitationem sint explicabo vel, labore quae atque maxime eum. Veniam ex fuga id reprehenderit.</td>
                  <td style="width: 4rem" class="text-center fs-sm">
                    <div class="d-flex justify-content-center align-items-center mx-4">
                      <small>Tidak</small>
                      <div class="form-check form-switch d-flex justify-content-center mx-2">
                        <input class="form-check-input custom-check-1" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                      </div>
                      <small>Ya</small>
                    </div>
                  </td>
                  <td style="" class="text-center fs-sm px-2 d-flex gap-2 align-items-center border-0">
                    <input type="url" class="form-control inspect-in" placeholder="Masukkan Url">
                    <a href="#" target="_blank" class="cr-pointer bg-abu rounded inspector d-flex align-items-center icon-cs text-secondary" for="file">
                        <i class="fa-solid fa-link"></i>
                    </a>
                  </td>
                  <td style="" class="text-center fs-sm px-2">
                    <span class="px-2 d-flex gap-2 justify-content-center">
                      <label class="file-inc cr-pointer bg-abu rounded icon-cs text-secondary" for="">
                        <i class="fa-solid fa-upload"></i>
                      </label>
                      <input type="file" class="file-inc form-control vs-none d-none inspect-in">
                      <a href="" class="cr-pointer bg-abu rounded inspector icon-cs text-secondary">
                        <i class="fa-solid fa-eye"></i>
                      </a>
                    </span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="d-flex mt-5 gap-2 justify-content-end w-100" style="">
            <button class="btn bg-biru text-light px-4 btn-primary"><i class="fa-regular fa-floppy-disk"></i></button>
            <a href="#" class="btn text-light px-4 btn-success">Submit</a>
          </div>
        </div>
        <div class="tab-pane fade" id="group2" role="tabpanel" aria-labelledby="list-group2-list">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col" style="width: 4rem" class="text-center fs-sm">#</th>
                  <th scope="col" class="fs-sm">Group 2</th>
                  <th scope="col" class="fs-sm text-center" style="width: 4rem">Point</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row" style="width: 4rem" class="text-center fs-sm">1</td>
                  <td class="fs-sm">Mark</td>
                  <td style="width: 4rem" class="text-center fs-sm">12</td>
                </tr>
                <tr>
                  <td scope="row" style="width: 4rem" class="text-center fs-sm">1</td>
                  <td class="fs-sm">Mark</td>
                  <td style="width: 4rem" class="text-center fs-sm">12</td>
                </tr>
                <tr>
                  <td scope="row" style="width: 4rem" class="text-center fs-sm">1</td>
                  <td class="fs-sm">Mark</td>
                  <td style="width: 4rem" class="text-center fs-sm">12</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="tab-pane fade" id="group3" role="tabpanel" aria-labelledby="list-group3-list">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col" style="width: 4rem" class="text-center fs-sm">#</th>
                  <th scope="col" class="fs-sm">Nama Kelurahan</th>
                  <th scope="col" class="fs-sm text-center" style="width: 4rem">Point</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row" style="width: 4rem" class="text-center fs-sm">1</td>
                  <td class="fs-sm">Mark</td>
                  <td style="width: 4rem" class="text-center fs-sm">12</td>
                </tr>
                <tr>
                  <td scope="row" style="width: 4rem" class="text-center fs-sm">1</td>
                  <td class="fs-sm">Mark</td>
                  <td style="width: 4rem" class="text-center fs-sm">12</td>
                </tr>
                <tr>
                  <td scope="row" style="width: 4rem" class="text-center fs-sm">1</td>
                  <td class="fs-sm">Mark</td>
                  <td style="width: 4rem" class="text-center fs-sm">12</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="tab-pane fade" id="group4" role="tabpanel" aria-labelledby="list-group4-list">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col" style="width: 4rem" class="text-center fs-sm">#</th>
                  <th scope="col" class="fs-sm">Nama BUMD</th>
                  <th scope="col" class="fs-sm text-center" style="width: 4rem">Point</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row" style="width: 4rem" class="text-center fs-sm">1</td>
                  <td class="fs-sm">Mark</td>
                  <td style="width: 4rem" class="text-center fs-sm">12</td>
                </tr>
                <tr>
                  <td scope="row" style="width: 4rem" class="text-center fs-sm">1</td>
                  <td class="fs-sm">Mark</td>
                  <td style="width: 4rem" class="text-center fs-sm">12</td>
                </tr>
                <tr>
                  <td scope="row" style="width: 4rem" class="text-center fs-sm">1</td>
                  <td class="fs-sm">Mark</td>
                  <td style="width: 4rem" class="text-center fs-sm">12</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="tab-pane fade" id="group5" role="tabpanel" aria-labelledby="list-group5-list">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col" style="width: 4rem" class="text-center fs-sm">#</th>
                  <th scope="col" class="fs-sm">Nama group5</th>
                  <th scope="col" class="fs-sm text-center" style="width: 4rem">Point</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row" style="width: 4rem" class="text-center fs-sm">1</td>
                  <td class="fs-sm">Mark</td>
                  <td style="width: 4rem" class="text-center fs-sm">12</td>
                </tr>
                <tr>
                  <td scope="row" style="width: 4rem" class="text-center fs-sm">1</td>
                  <td class="fs-sm">Mark</td>
                  <td style="width: 4rem" class="text-center fs-sm">12</td>
                </tr>
                <tr>
                  <td scope="row" style="width: 4rem" class="text-center fs-sm">1</td>
                  <td class="fs-sm">Mark</td>
                  <td style="width: 4rem" class="text-center fs-sm">12</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="tab-pane fade" id="group6" role="tabpanel" aria-labelledby="list-group6-list">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col" style="width: 4rem" class="text-center fs-sm">#</th>
                  <th scope="col" class="fs-sm">Nama group6</th>
                  <th scope="col" class="fs-sm text-center" style="width: 4rem">Point</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row" style="width: 4rem" class="text-center fs-sm">1</td>
                  <td class="fs-sm">Mark</td>
                  <td style="width: 4rem" class="text-center fs-sm">12</td>
                </tr>
                <tr>
                  <td scope="row" style="width: 4rem" class="text-center fs-sm">1</td>
                  <td class="fs-sm">Mark</td>
                  <td style="width: 4rem" class="text-center fs-sm">12</td>
                </tr>
                <tr>
                  <td scope="row" style="width: 4rem" class="text-center fs-sm">1</td>
                  <td class="fs-sm">Mark</td>
                  <td style="width: 4rem" class="text-center fs-sm">12</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php include "../components/layouts/bottom.php" ?>