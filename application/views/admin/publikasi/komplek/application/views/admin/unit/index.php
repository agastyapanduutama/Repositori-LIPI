<div class="card">
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>No</td>
                <td>Total Unit</td>
                <td>Total Unit Terjual</td>
                <td>Total Unit Tersisa</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($data as $key) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $key->u_total ?></td>
                    <td><?= $key->u_terjual ?></td>
                    <td><?= $key->u_sisa ?></td>
                    <td>
                        <a href="<?= base_url('admin/unit/edit/' . $key->id) ?>" class="btn btn-warning" title="Edit Data"><i class="fas fa-edit"></i></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>

    </table>
</div>