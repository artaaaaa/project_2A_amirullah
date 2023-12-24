<?php
include "proses/connect.php";
$result = array();
$query = mysqli_query($conn, "SELECT * FROM tb_tiket
LEFT  JOIN tb_maskapai ON tb_maskapai.id_maskapai = tb_tiket.lokasi");
while ($record = mysqli_fetch_array($query)) {
    $result[] = $record;
}
$makapai = mysqli_query($conn, "SELECT id_maskapai,lokasi FROM tb_maskapai");
$nama = mysqli_query($conn, "SELECT id_maskapai,nama FROM tb_maskapai");

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
                    data-bs-target="#ModalTambahTiket"><i class="bi bi-file-earmark-plus-fill"></i>Tiket</button>
            </div>
            <!-- Modal Tambah Tiket Baru -->
            <div class="modal fade" id="ModalTambahTiket" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Tiket</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" novalidate action="proses/proses_input_tiket.php"
                                method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="file" class="form-control" id="uploadfoto"
                                                placeholder="Your Name" name="foto" required>
                                            <label for="floatingInput">Foto</label>
                                            <div class="invalid-feedback">
                                                Masukkan Foto
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <select class="form-select py-3" name="nama" id="">
                                            <option selected hidden value="">Pilih Nama</option>
                                            <?php
                                            foreach ($nama as $value) {
                                                echo "<option value=$value[id_maskapai]>$value[nama]</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3 ">
                                            <select class="form-select" aria-label="Default select example" name="kelas"
                                                required>
                                                <option selected hidden value="">Pilih Kelas</option>
                                                <option value="1">Economy</option>
                                                <option value="2">Bisnis</option>
                                                <option value="3">First class</option>
                                            </select>
                                            <label for="floatingPassword">Kelas</label>
                                            <div class="invalid-feedback">
                                                Pilih kelas.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" name="lokasi" id="">
                                                <option selected hidden value="">Pilih Lokasi</option>
                                                <?php
                                                foreach ($makapai as $value) {
                                                    echo "<option value=$value[id_maskapai]>$value[lokasi]</option>";
                                                }
                                                ?>
                                            </select>
                                            <label for="lokasi">Lokasi</label>
                                            <div class="invalid-feedback">
                                                Pilih lokasi
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="text"
                                        name="jamberangkat" required>
                                    <label for="floatingPassword">Jam Berangkat</label>
                                    <div class="invalid-feedback">
                                        Masukkan jamberangkat
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="input_tiket_validate"
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
                <!-- Modal view-->
                <div class="modal fade" id="ModalView<?php echo $row['id'] ?>" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Data Tiket</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate action="proses/proses_input_tiket.php"
                                    method="POST">
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
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-floating mb-3 ">
                                                <select disabled class="form-select" aria-label="Default select example"
                                                    require name="kelas" id="">
                                                    <?php
                                                    $data = array("Economy", "Bisnis", "First class");
                                                    foreach ($data as $key => $value) {
                                                        if ($row['kelas'] == $key + 1) {
                                                            echo "<option selected value = " . ($key + 1) . ">$value</option>";
                                                        } else {
                                                            echo "<option value = " . ($key + 1) . ">$value</option>";
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                                <label for="floatingPassword">Kelas</label>
                                                <div class="invalid-feedback">
                                                    Pilih kelas.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="form-floating mb-3 ">
                                                <select disabled class="form-select" name="lokasi" id="">
                                                    <?php
                                                    foreach ($makapai as $value) {
                                                        echo "<option value=$value[id_maskapai]>$value[lokasi]</option>";
                                                    }
                                                    ?>
                                                </select>
                                                <label for="floatingPassword">Lokasi</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-floating">
                                        <input disabled type="text" class="form-control" id="floatingInput"
                                            placeholder="text" name="jamberangkat" value="<?php echo $row['jamterbang'] ?>"
                                            required>
                                        <label for="floatingPassword">Jam Berangkat</label>
                                        <div class="invalid-feedback">
                                            Masukkan jamberangkat
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
                <!---Modal View End-->

                <!-- Modal Edit-->
                <div class="modal fade" id="ModalEdit<?php echo $row['id'] ?>" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Tiket</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate action="proses/proses_edit_tiket.php"
                                    method="POST">
                                    <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="file" class="form-control" id="uploadfoto"
                                                    placeholder="Your Name" name="foto" required>
                                                <label for="floatingInput">Foto</label>
                                                <div class="invalid-feedback">
                                                    Masukkan Foto
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-floating mb-3">
                                                <select class="form-select py-3" name="nama" id="">
                                                    <?php
                                                    foreach ($nama as $value) {
                                                        echo "<option value=$value[id_maskapai]>$value[nama]</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-floating mb-3 ">
                                                <select class="form-select" aria-label="Default select example"
                                                    require name="kelas" id="">
                                                    <?php
                                                    $data = array("Economy", "Bisnis", "First class");
                                                    foreach ($data as $key => $value) {
                                                        if ($row['kelas'] == $key + 1) {
                                                            echo "<option selected value = " . ($key + 1) . ">$value</option>";
                                                        } else {
                                                            echo "<option value = " . ($key + 1) . ">$value</option>";
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                                <label for="floatingPassword">Kelas</label>
                                                <div class="invalid-feedback">
                                                    Pilih kelas.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="form-floating mb-3 ">
                                                <select class="form-select" name="lokasi" id="">
                                                    <?php
                                                    foreach ($makapai as $value) {
                                                        echo "<option value=$value[id_maskapai]>$value[lokasi]</option>";
                                                    }
                                                    ?>
                                                </select>
                                                <label for="floatingPassword">Lokasi</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="text"
                                            name="jamberangkat" value="<?php echo $row['jamterbang'] ?>" required>
                                        <label for="floatingPassword">Jam Berangkat</label>
                                        <div class="invalid-feedback">
                                            Masukkan jamberangkat
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
                <div class="modal fade" id="ModalDelete<?php echo $row['id'] ?>" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Data Tiket</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate action="proses/proses_delete_tiket.php"
                                    method="POST">
                                    <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                    <div class="col-lg-12">

                                        Apakah Anda Yakin Ingin Menghapus Tiket <b>
                                            <?php echo $row['nama'] ?>
                                        </b>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger" name="delete_tiket_validate"
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
                                <th scope="col">Foto</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Lokasi</th>
                                <th scope="col">Jam Berangkat</th>
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
                                        <img src="../assets/img/<?php echo $row['foto'] ?>" alt="" style="width: 90px; ">
                                    </td>
                                    <td>
                                        <?php echo $row['nama'] ?>
                                    </td>
                                    <td>
                                        <?php
                                        if ($row['kelas'] == 1) {
                                            echo "Economy";
                                        } elseif ($row['kelas'] == 2) {
                                            echo "Bisnis";
                                        } elseif ($row['kelas'] == 3) {
                                            echo "First class";
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php echo $row['lokasi'] ?>
                                    </td>
                                    <td>
                                        <?php echo $row['jamterbang'] ?>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <button class="btn btn-info btn-sm me-1" data-bs-toggle="modal"
                                                data-bs-target="#ModalView<?php echo $row['id'] ?>"><i class="bi bi-eye"></i>
                                            </button>
                                            <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal"
                                                data-bs-target="#ModalEdit<?php echo $row['id'] ?>"><i
                                                    class="bi bi-pencil-square"></i></button>
                                            <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal"
                                                data-bs-target="#ModalDelete<?php echo $row['id'] ?>"><i
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