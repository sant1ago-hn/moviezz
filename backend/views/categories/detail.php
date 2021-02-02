<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="float-right ml-2">
                <a class="btn btn-primary" href="index.php?controller=category">Back</a>
            </div>
            <h5 class="header-title mb-4">Categories Detail</h5>
            <div class="table-responsive">
                <table class="table table-centered table-hover mb-0">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category's name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Updated At</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?php echo $category['id']; ?></td>
                        <td><?php echo $category['name']; ?></td>
                        <td>
                            <?php
                            $status_text = 'Active';
                            if ($category['status'] == 0) {
                                $status_text = 'Disabled';
                            }
                            echo $status_text;
                            ?>
                        </td>
                        <td>
                            <?php echo date('d-m-Y H:i:s', strtotime($category['created_at'])); ?>
                        </td>
                        <td>
                            <?php echo date('d-m-Y H:i:s', strtotime($category['updated_at'])); ?>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
