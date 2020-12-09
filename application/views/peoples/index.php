<div class="container">
    <h3 class="mt-3">List of Peoples</h3>
    <div class="row">
        <div class="col-md-4">
            <form action="<?= base_url('peoples'); ?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search keyword.." name="keyword"
                        autocomplete="off" autofocus>
                    <div class="input-group-append">
                        <input type="submit" name="submit" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <h5>Results : <?= $total_rows; ?></h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(empty($peoples)) : ?>
                    <div class="alert alert-danger" role="alert">
                        data not found!
                    </div>
                    <?php endif;?>
                    <?php foreach($peoples as $people) : ?>
                    <tr>
                        <td><?= ++$start;?></td>
                        <td><?= $people['name']; ?></td>
                        <td><?= $people['email']; ?></td>
                        <td>
                            <a href="#" class="btn btn-warning">detail</a>
                            <a href="#" class="btn btn-success">edit</a>
                            <a href="#" class="btn btn-danger">delete</a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
            <?= $this->pagination->create_links();?>
        </div>
    </div>
</div>