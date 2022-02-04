<div class="container mt-4 jumbotron-container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <p class="mt-3 fs-1">List of Peoples</p>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($peoples as $e) : ?>
                        <tr>
                            <th><?= $start++; ?></th>
                            <td><?= $e['nama'] ?></td>
                            <td><?= $e['email'] ?></td>
                            <td>
                                <a href="#" class="btn btn-sm btn-primary">detail</a>
                                <a href="#" class="btn btn-sm btn-success">edit</a>
                                <a href="#" class="btn btn-sm btn-danger">hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>
<style>
    .jumbotron-container {
        background-color: #fcf0c8;
        border-radius: .5rem;
    }
    .custom-link-active {
        background-color: #912028 !important;
        border-color: #912028 !important;
    }
    .custom-link {
        color: #912028 !important;
    }
</style>