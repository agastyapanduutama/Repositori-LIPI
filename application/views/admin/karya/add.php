<div class="card">
    <div class="modal-header">
        <h5 class="modal-title">Tambah Karya</h5>
    </div>
    <?php echo form_open_multipart('admin/karya/insert');?>
        <div class="modal-body">
            <div class="form-group">
                <label>Judul Karya</label>
                <input type="text" name="judul_karya" id="judul_karya" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Penulis</label>
                <input type="text" value="<?php isset($_POST['penulis']) ?>" name="penulis" id="penulis" class="form-control">
                Gunakan Pemisah Koma (,)
            </div>

            <div class="form-group">
                <label>Abstrak</label>
                <textarea class="summernote" name="abstrak" id="abstrak"></textarea>
            </div>

            <div class="form-group">
                <label>tag</label>
                <input type="text" name="tag" id="tag" class="form-control">
                Gunakan Pemisah Koma (,)
            </div>

            <div class="form-group">
                <label>Jenis Publikasi</label>
                <select class="form-control" name="id_publikasi" id="id_publikasi"></select>
            </div>

            <div class="form-group">
                <label>Satuan kerja</label>
                <select class="form-control" name="id_satker" id="id_satker"></select>
            </div>

            <div class="form-group">
                <label>Subjek</label>
                <select class="form-control" name="id_subjek" id="id_subjek"></select>
            </div>

            <div class="form-group">
                <label>no arsip</label>
                <input value="<?= $arsip?>" readonly type="text" name="no_arsip" id="no_arsip" class="form-control">
            </div>

            <div class="form-group">
                <label>tanggal post</label>
                <input type="date" name="tanggal" value="<?= date('Y/m/d')?>" id="tanggal" class="form-control">
           
            </div>
            

            <div class="form-group">
                <label>tahun</label>
                <input type="text" value="<?= date('Y')?>" name="tahun" id="tahun" class="form-control">
            </div>

            <div class="form-group">
                <label>File</label>
                <input type="file" name="file" id="file" class="form-control">
            </div>

            <input type="hidden" name="user" value="<?= $this->session->userdata('id_user');?>" id="user" class="form-control">


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