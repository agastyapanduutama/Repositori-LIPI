<div class="card">
    <div class="card-body">
        <form action="<?= base_url('admin/kategori/aksi/edit/'.$kategori->id) ?>" method="POST">
            <div class="form-group">
                <label for="" class="label-control">Nama Kategori</label>
            </div>
            <input type="text" name="nama_kategori" value="<?= $kategori->nama_kategori?>" class="form-control">
            <div class="form-group">
                <label for="" class="label-control">Keterangan</label>
                <textarea name="" id="" name="keterangan" class="form-control" cols="30" rows="4"><?= $kategori->keterangan?></textarea>
            </div>
            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>