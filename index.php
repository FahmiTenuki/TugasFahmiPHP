<?php include('template/header.php') ?>

<?php $students = [
    [
        "nama" => "Agung",
        "kelas" => "XI",
        "jurusan" => "PPLG",
        "umur" => 18,
        "kehadiran" => "Hadir"
    ],
    [
        "nama" => "Agus",
        "kelas" => "XI",
        "jurusan" => "PPLG",
        "umur" => 17,
        "kehadiran" => "Hadir"
    ],
    [
        "nama" => "Asep",
        "kelas" => "XI",
        "jurusan" => "PPLG",
        "umur" => 16,
        "kehadiran" => "Hadir"
    ],
]?>

<div class="main-content">
    <div class="dashboard-breadcrumb mb-25">
        <h2>ABSENSI SISWA</h2>
        <div class="input-group dashboard-filter">
            <button class="btn btn-primary">tambah <i class="fa-solid fa-plus"></i> </button>
        </div>
    </div>

    <div class="row">
        <div class="col-xxl-15">
            <div class="panel">
                <div class="panel-header">
                    <h5>Recent Orders</h5>
                    <div id="tableSearch"></div>
                </div>
                <div class="panel-body">
                    <table class="table table-dashed recent-order-table" id="myTable">
                        <thead>
                            <tr>
                                <th></th>
                                <th>NAMA</th>
                                <th>KELAS</th>
                                <th>JURUSAN</th>
                                <th>UMUR</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($students as $index => $student) { ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= $student["nama"] ?></td>
                                <td><?= $student["kelas"] ?></td>
                                <td><?= $student["jurusan"] ?></td>
                                <td><?= $student["umur"] ?></td>
                                <td><span class="badge bg-success p-3"><?= $student["kehadiran"] ?></span></td>
                                <td>
                                    <div class="btn-box">
                                        <button><i class="fa-light fa-eye"></i></button>
                                        <button><i class="fa-light fa-pen"></i></button>
                                        <button><i class="fa-light fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                    <div class="table-bottom-control"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('template/footer.php')?>
