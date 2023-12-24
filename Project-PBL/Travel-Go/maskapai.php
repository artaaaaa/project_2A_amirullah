<?php
include "proses/connect.php";
$result = array();
$query = mysqli_query($conn, "SELECT * FROM tb_maskapai 
");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}
?>

<!-- Content -->
<div class="col-lg-9 mt-1">
    <div class="card">
        <div class="card-header">
            Halaman Tiket
        </div>
        <div class="card-body">
            <div class="row">
                <button class="btn btn-sm btn-primary" style="border-radius: 30px;" data-bs-toggle="modal"
                    data-bs-target="#ModalTambahMaskapai"><i class="bi bi-file-earmark-plus-fill"></i>Maskapai</button>
            </div>
            <!-- Modal Tambah Maskapai Baru -->
            <div class="modal fade" id="ModalTambahMaskapai" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Maskapai</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" novalidate action="proses/proses_input_maskapai.php"
                                method="POST">
                                <div class="row">
                                    <div class="col-lg">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="Your Name" name="nama" required>
                                            <label for="floatingPassword">Nama</label>
                                            <div class="invalid-feedback">
                                                Masukkan Nama
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="Your Name" name="namapilot" required>
                                            <label for="floatingPassword">Nama Pilot</label>
                                            <div class="invalid-feedback">
                                                Masukkan Nama Pilot
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="Your Name" name="lokasi" required>
                                            <label for="floatingPassword">Lokasi</label>
                                            <div class="invalid-feedback">
                                                Masukkan Lokasi
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="input_maskapai_validate"
                                        value="1234">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!---Modal Tambah Tiket End-->

            <?php
            foreach ($result as $row) {
                ?>
                <!-- Modal View-->
                <div class="modal fade" id="ModalView<?php echo $row['id_maskapai'] ?>" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Data Maskapai</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-floating mb-3">
                                                <input disabled type="text" class="form-control" id="floatingInput"
                                                    placeholder="Your Name" name="nama" value="<?php echo $row['nama'] ?>">
                                                <label for="floatingPassword">Nama</label>
                                                <div class="invalid-feedback">
                                                    Masukkan Nama
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-floating mb-3">
                                                <input disabled type="text" class="form-control" id="floatingInput"
                                                    placeholder="Your Name" name="namapilot"
                                                    value="<?php echo $row['namapilot'] ?>">
                                                <label for="floatingPassword">Nama Pilot</label>
                                                <div class="invalid-feedback">
                                                    Masukkan Nama Pilot
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg">
                                            <div class="form-floating mb-3">
                                                <input disabled type="text" class="form-control" id="floatingInput"
                                                    placeholder="Your Name" name="lokasi"
                                                    value="<?php echo $row['lokasi'] ?>">
                                                <label for="floatingPassword">Lokasi</label>
                                                <div class="invalid-feedback">
                                                    Masukkan Lokasi
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal View End-->


                <!-- Modal Edit-->
                <div class="modal fade" id="ModalEdit<?php echo $row['id_maskapai'] ?>" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Maskapai</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate action="proses/proses_edit_maskapai.php"
                                    method="POST">
                                    <input type="hidden" value="<?php echo $row['id_maskapai'] ?>" name="id_maskapai">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder="Your Name" name="nama" required
                                                    value="<?php echo $row['nama'] ?>">
                                                <label for="floatingPassword">Nama</label>
                                                <div class="invalid-feedback">
                                                    Masukkan Nama
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder="Your Name" name="namapilot" required
                                                    value="<?php echo $row['namapilot'] ?>">
                                                <label for="floatingPassword">Nama Pilot</label>
                                                <div class="invalid-feedback">
                                                    Masukkan Nama Pilot
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder="Your Name" name="lokasi" required
                                                    value="<?php echo $row['lokasi'] ?>">
                                                <label for="floatingPassword">lokasi</label>
                                                <div class="invalid-feedback">
                                                    Masukkan Lokasi
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="edit_tiket_validate"
                                            value="1234">Save changes</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!---Modal Edit End-->

                <!-- Modal delete-->
                <div class="modal fade" id="ModalDelete<?php echo $row['id_maskapai'] ?>" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Data Tiket</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate action="proses/proses_delete_maskapai.php"
                                    method="POST">
                                    <input type="hidden" value="<?php echo $row['id_maskapai'] ?>" name="id_maskapai">
                                    <div class="col-lg-12">

                                        Apakah Anda Yakin Ingin Menghapus Maskapai <b>
                                            <?php echo $row['nama'] ?>
                                        </b>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger" name="delete_maskapai_validate"
                                            value="12345" <?php echo ($row['nama'] == $_SESSION['username_travelgo']) ? 'disabled' : ''; ?>>Delete</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end modal delete -->

                <?php
            }
            if (empty($result)) {
                echo "Data Tiket tidak ada";
            } else {


                ?>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Nama Pilot</th>
                                <th scope="col">Lokasi</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($result as $row) { ?>
                                <tr>
                                    <th scope="row">
                                        <?php echo $no++ ?>
                                    </th>
                                    <td>
                                        <?php echo $row['nama'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['namapilot'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['lokasi'] ?>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <button class="btn btn-info btn-sm me-1" data-bs-toggle="modal"
                                                data-bs-target="#ModalView<?php echo $row['id_maskapai'] ?>"><i
                                                    class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal"
                                                data-bs-target="#ModalEdit<?php echo $row['id_maskapai'] ?>"><i
                                                    class="bi bi-pencil-square"></i></button>
                                            <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal"
                                                data-bs-target="#ModalDelete<?php echo $row['id_maskapai'] ?>"><i
                                                    class="bi bi-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
<!-- End Content -->
</div>
<div class="fixed-bottom text-center mb-2">Copyright 2023 artha</div>
</div>

<script>
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>