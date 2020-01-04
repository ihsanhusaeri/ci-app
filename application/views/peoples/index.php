<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h3>List of peoples</h3>
            <table class="table">
                <thead>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php $index = 1; ?>
                    <?php foreach( $peoples as $p ) : ?>
                        <tr>
                            <th><?= $index++; ?></th>
                            <td><?= $p['name']; ?></td>
                            <td><?= $p['email']; ?></td>
                            <td>
                                <a href="" class="badge badge-warning">detail</a>
                                <a href="" class="badge badge-success">ubah</a>
                                <a href="" class="badge badge-danger">hapus</a>
                            </td>
                        </tr> 
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>