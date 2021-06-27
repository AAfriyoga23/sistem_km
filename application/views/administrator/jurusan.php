<div class="container-fluid">
    <div class="alert alert-primary" role="alert">
        <i class="fas fa-university"></i> Jurusan
    </div>

    <?php echo anchor('administrator/jurusan/input', '<button class="btn btn-sm btn-success mb-3">
    <i class="fas fa-plus fa-sm"></i> Tambah Jurusan</button>') ?>

    <div class="dropdown">
        <button class="btn btn-info dropdown-toggle btn-sm mb-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-ellipsis-v"></i> Kategori
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">INCIDENT REPORT</a>
            <a class="dropdown-item" href="#">KONFIGURASI</a>
            <a class="dropdown-item" href="#">EMAIL REGISRATION</a>
        </div>
    </div>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th><strong>NO</strong></th>
            <th><strong>Kode Jurusan</strong></th>
            <th><strong>Nama Jurusan</strong></th>
            <th colspan="2"><strong>Aksi</strong></th>
        </tr>

        <?php
        $no = 1;
        foreach ($jurusan as $jrs) : ?>
            <tr>
                <td width="20px"><?php echo $no++ ?></td>
                <td width="250px"><?php echo $jrs->kode_jurusan ?></td>
                <td><?php echo $jrs->nama_jurusan ?></td>
                <td width="20px">
                    <div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>
                </td>
                <td width="20px">
                    <div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>