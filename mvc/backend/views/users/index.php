<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <form method="GET" action="">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username"
                           value="<?php echo isset($_GET['username']) ? $_GET['username'] : '' ?>" class="form-control"/>
                    <input type="hidden" name="controller" value="user"/>
                    <input type="hidden" name="action" value="index"/>
                </div>
                <div class="form-group">
                    <input type="submit" value="Tìm kiếm" name="search" class="btn btn-primary"/>
                    <a href="index.php?controller=user" class="btn btn-default">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="float-right ml-2">
                <a href="#">View all</a>
            </div>
            <h2 class="header-title mb-4">Users List</h2>
            <div class="float-left ml-2">
                <a href="index.php?controller=user&action=create">Add new</a>
            </div>
            <div class="table-responsive">
                <table class="table table-centered table-hover mb-0">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Avatar</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Created at</th>
                        <th></th>
                    </tr>
                    </thead>
                    <?php if (!empty($users)): ?>
                        <?php foreach ($users as $user): ?>
                            <tbody>
                            <tr>
                                <th scope="row">
                                    <?php echo $user['id']; ?>
                                </th>
                                <td scope="row">
                                    <?php echo $user['username']; ?>
                                </td>
                                <td scope="row">
                                    <?php if (!empty($user['avatar'])): ?>
                                        <img src="assets/uploads/<?php echo $user['avatar'] ?>" width="60"/>
                                    <?php endif; ?>
                                </td>
                                <td scope="row">
                                    <?php echo $user['first_name']; ?>
                                </td>
                                <td scope="row">
                                    <?php echo $user['last_name']; ?>
                                </td>
                                <td scope="row">
                                    <?php echo $user['phone'] ?>
                                </td>
                                <td scope="row">
                                    <?php echo $user['address'] ?>
                                </td>
                                <td scope="row">
                                    <?php echo $user['email'] ?>
                                </td>
                                <td scope="row">
                                    <?php echo date('d-m-Y H:i:s', strtotime($user['created_at'])); ?>
                                </td>
                                <td scope="row">
                                    <?php
                                    if (!empty($user['updated_at'])) {
                                        echo date('d-m-Y H:i:s', strtotime($user['updated_at']));
                                    }
                                    ?>
                                </td>
                                <td scope="row">
                                    <div class="btn-group" role="group">
                                        <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="View">
                                            <a href="index.php?controller=user&action=detail&id=<?php echo $user['id'] ?>">
                                                <i class="mdi mdi-eye"></i>
                                            </a>
                                        </button>
                                        <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <a href="index.php?controller=user&action=update&id=<?php echo $user['id'] ?>">
                                                <i class="mdi mdi-pencil"></i>
                                            </a>
                                        </button>
                                        <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Delete">
                                            <a href="index.php?controller=user&action=delete&id=<?php echo $user['id'] ?>" onclick="return confirm('Confirm Deletion?')">
                                                <i class="mdi mdi-trash-can"></i>
                                            </a>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        <?php endforeach ?>
                        <tr>
                            <td colspan="7"><?php echo $pages; ?></td>
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
<?php echo $pages; ?>