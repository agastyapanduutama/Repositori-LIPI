<div class="card">
    <div class="card-header">
        Edit Unit
    </div>


    <div class="card-body">
        <form action="<?= base_url('admin/unit/aksi/edit/'.$data->id) ?>" method="POST">
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Total Unit</label>
                <div class="col-sm-1">
                    <input type="text" value="<?=$data->u_total?>" name="totalUnit" class="form-control" onkeyup="sum();" id="totalUnit">
                </div>
            </div>

            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Total Unit Terjual</label>
                <div class="col-sm-1">
                    <input type="text" value="<?=$data->u_terjual?>" name="totalTerjual" class="form-control" onkeyup="sum();" id="totalTerjual">
                </div>
            </div>

            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Total Unit Tersisa</label>
                <div class="col-sm-1">
                    <input type="text" value="<?=$data->u_sisa?>" readonly name="totalTersisa" class="form-control" id="totalTersisa">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

    </div>
</div>


<script>
    function sum() {
        var totalUnitNa = document.getElementById('totalUnit').value;
        var totalTerjualNa = document.getElementById('totalTerjual').value;
        var result = parseInt(totalUnitNa) - parseInt(totalTerjualNa);
        if (!isNaN(result)) {
            document.getElementById('totalTersisa').value = result;
        }
    }
</script>