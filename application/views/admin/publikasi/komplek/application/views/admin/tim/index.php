<div class="card">
    <div class="card-header"><?= $title ?>
        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modalTambah">
            Tambah Data
        </button>
    </div>
    <?php
    if ($this->session->flashdata('success')) {
        echo '<div class="alert alert-sm alert-success">';
        echo $this->session->flashdata('success');
        echo '</div>';
    }
    ?>
    <?php
    if ($this->session->flashdata('warning')) {
        echo '<div class="alert alert-sm alert-warning">';
        echo $this->session->flashdata('warning');
        echo '</div>';
    }
    ?>
    <div class="card-body">
        <table id="example2" class="table table-bordered">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama Kategori</td>
                    <td>Keterangan</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($kategori as $kat) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $kat->nama_kategori ?></td>
                        <td><?= $kat->keterangan ?></td>
                        <td>
                            <a href="<?= base_url('admin/kategori/edit/' . $kat->id) ?>" class="btn btn-warning" title="Edit Data"><i class="fas fa-edit"></i></a>
                            <a href="<?= base_url('admin/kategori/aksi/hapus/' . $kat->id) ?>" class="btn btn-danger" onclick="return confirm('Data yang dihapus tidak akan bisa dikembalikan?');" title="Hapus Data"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

</div>


<!-- Modal -->
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/kategori/tambah') ?>" method="POST">
                    <div class="form-group">
                        <label for="" class="label-control">Nama Kategori</label>
                    </div>
                    <input type="text" name="nama_kategori" class="form-control">
                    <div class="form-group">
                        <label for="" class="label-control">Keterangan</label>
                        <textarea name="" id="" name="keterangan" class="form-control" cols="30" rows="4"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>