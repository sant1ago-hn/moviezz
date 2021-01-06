<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="float-right ml-2">
                <a href="#">View all</a>
            </div>
            <h5 class="header-title mb-4">Categories List</h5>
            <div class="float-left ml-2">
                <a href="index.php?controller=category&action=create">Add new</a>
            </div>
            <div class="table-responsive">
                <table class="table table-centered table-hover mb-0">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category's name</th>
                        <th scope="col">Avatar</th>
                        <th scope="col">Description</th>
                        <th scope="col">Status</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Updated At</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <?php if (!empty($categories)): ?>
                        <?php foreach ($categories as $category): ?>
                            <tbody>
                            <tr>
                                <th scope="row">
                                    <?php echo $category['id']; ?>
                                </th>
                                <td>
                                    <?php echo $category['name']; ?>
                                </td>
                                <td>
                                    <?php if (!empty($category['avatar'])): ?>
                                        <img src="assets/uploads/<?php echo $category['avatar'] ?>" width="60"/>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php echo $category['description']; ?>
                                </td>
                                <td>
                                    <?php
                                    $status_text = 'Active';
                                    if ($category['status'] == 0) {
                                        $status_text = 'Disabled';
                                    }
                                    ?>
                                    <?php if ($category['status'] == 1): ?>
                                        <div class="badge badge-soft-primary">
                                            <?php echo $status_text; ?>
                                        </div>
                                    <?php elseif ($category['status'] == 0): ?>
                                        <div class="badge badge-soft-danger">
                                            <?php echo $status_text; ?>
                                        </div>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php echo date('d-m-Y H:i:s', strtotime($category['created_at'])); ?>
                                </td>
                                <td>
                                    <?php
                                    if (!empty($category['updated_at'])) {
                                        echo date('d-m-Y H:i:s', strtotime($category['updated_at']));
                                    }
                                    ?>
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="View">
                                            <a href="index.php?controller=category&action=detail&id=<?php echo $category['id'] ?>">
                                                <i class="mdi mdi-eye"></i>
                                            </a>
                                        </button>
                                        <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <a href="index.php?controller=category&action=update&id=<?php echo $category['id'] ?>">
                                                <i class="mdi mdi-pencil"></i>
                                            </a>
                                        </button>
                                        <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <a href="index.php?controller=category&action=delete&id=<?php echo $category['id'] ?>" onclick="return confirm('Confirm Deletion?')">
                                                <i class="mdi mdi-trash-can"></i>
                                            </a>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        <?php endforeach ?>
                        <tr>
                            <td colspan="8">
                                <div class="mt-4">
                                    <ul class="pagination pagination-rounded justify-content-center mb-0">
                                        <li><?php echo $pages; ?></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    <?php else: ?>
                        <tbody>
                        <tr>
                            <td colspan="7">No records</td>
                        </tr>
                        </tbody>
                    <?php endif; ?>
                </table>
            </div>
        </div>
    </div>
</div>