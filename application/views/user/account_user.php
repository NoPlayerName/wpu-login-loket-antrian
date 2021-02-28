<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($account as $acc) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $acc['name']; ?></td>
                            <td><?= $acc['email']; ?></td>
                            <td><?= $acc['role']; ?></td>

                            <td>
                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#editmenu">edit</a>
                                <a href="#" class="badge badge-danger">delete</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>



        </div>

    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->