<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="col-lg-4">
        <?= $this->session->flashdata('message'); ?>
    </div> 

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><a href="<?= site_url('fruits/add'); ?>"><i class="fas fa-plus"></i> Add Data</a></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th class="text-center">Image</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $index = 1; ?>
                        <?php foreach($fruits as $fruit) : ?>
                        <tr>
                            <td><?= $index; ?></td>
                            <td><?= $fruit->name; ?></td>
                            <td><?= $fruit->price; ?></td>
                            <td class="text-center"><img src="<?php echo base_url('assets/img/'.$fruit->image); ?>" width="64" /></td>
                            <td class="text-center action">
                                <a href="#" class="btn btn-info btn-circle m-2" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fas fa-info-circle"></i></a>
                                <a href="<?= site_url('fruits/edit/'.$fruit->id); ?>" class="btn btn-success btn-circle m-2" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
                                <a href="#" class="btn btn-danger btn-circle m-2" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php $index++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<script>
    $('.action').tooltip(options);
</script>