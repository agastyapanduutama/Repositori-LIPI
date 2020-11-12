<div class="card">
    <div class="modal-header">
        <h5 class="modal-title">Tambah Karya</h5>
    </div>
    <!-- <form action="<?=base_url('admin/karya/insert')?>" enctype="multipart" method="POST"> -->
    <?php echo form_open_multipart('admin/karya/update/karya/'.$karya->id_karya);?>
        <div class="modal-body">
            <div class="form-group">
                <label>Judul Karya</label>
                <input type="text" value="<?= $karya->judul_karya?>" name="judul_karya" id="judul_karya" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Penulis</label>
                <input type="text" value="<?= $karya->penulis ?>" name="penulis" id="penulis" class="form-control">
                Gunakan Pemisah Koma (,)
            </div>

            <div class="form-group">
                <label>Abstrak</label>
                <textarea class="summernote" name="abstrak" id="abstrak"><?= $karya->abstrak ?></textarea>
            </div>

            <div class="form-group">
                <label>tag</label>
                <input type="text" value="<?= $karya->tag ?>" name="tag" id="tag" class="form-control">
                Gunakan Pemisah Koma (,)
            </div>

            <div class="form-group">
                <label>no arsip</label>
                <input value="<?= $karya->no_arsip ?>" readonly type="text" name="no_arsip" id="no_arsip" class="form-control">
            </div>

            <div class="form-group">
                <label>tanggal post</label>
                <input type="date" name="tanggal" value="<?= $karya->tanggal ?>" id="tanggal" class="form-control">
            </div>

            <div class="form-group">
                <label>tahun</label>
                <input type="text" value="<?= $karya->tahun?>" name="tahun" id="tahun" class="form-control">
            </div>

            <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="status" id="status">
                    <option value="3">Publikasikan</option>
                    <option value="2">Simpan Ke draf</option>
                </select>
            </div>
        </div>
        <div class="modal-footer bg-whitesmoke br">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    <?php echo form_close(); ?>
    <!-- </form> -->
</div>