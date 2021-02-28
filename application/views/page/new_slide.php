<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#SlideModal">Upload Image Slide</a>
    <?= $this->session->flashdata('message'); ?>

    <table class="table table-hover table-responsive-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Image</th>
                <th scope="col">Active</th>
                <th scope="col">Waktu Upload</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($data_slide as $img) : ?>
                <?php if ($img['active'] == 1) {
                    $active = "yes";
                } else {
                    $active = "no";
                }
                ?>
                <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $img['title']; ?></td>
                    <td><?= $img['content']; ?></td>
                    <td><?= $img['img_slide']; ?></td>
                    <td><?= $active; ?></td>
                    <td><?= date('d F Y', $img['date_created']); ?></td>

                    <td>
                        <a href="<?= base_url('page/delete_image/') . $img['id'] . '/' . $img['img_slide']; ?>" class="badge badge-danger">delete</a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal tambah -->
<div class="modal fade" id="SlideModal" tabindex="-1" aria-labelledby="SlideModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="SlideModalLabel">Upload Image Slide</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <?= form_open_multipart('page/upload_slide'); ?>

                <div class="form-group">
                    <div class="form-group ">
                        <label for="inputEmail4">Title</label>
                        <input type="text" class="form-control" id="title" name="title">

                        <label for="inputEmail4">Content</label>
                        <input type="text" class="form-control" id="content" name="content">
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-group ">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image_slide" name="image_slide">
                            <label class="custom-file-label" for="image">Pilih Berkas</label>
                        </div>

                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="is_active" name="is_active">
                        <label class="form-check-label" for="is_active">
                            Active?
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
                </form>
            </div>
        </div>
    </div>
</div>