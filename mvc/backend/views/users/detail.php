<?php
require_once 'helpers/Helper.php';
?>

<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="float-right ml-2">
                <a class="btn btn-primary" href="index.php?controller=user">Back</a>
            </div>
            <h5 class="header-title mb-4">Categories Detail</h5>
            <div class="table-responsive">
                <table class="table table-centered table-hover mb-0">
                    <tr>
                        <th>ID</th>
                        <td><?php echo $user['id'] ?></td>
                    </tr>
                    <tr>
                        <th>Username</th>
                        <td><?php echo $user['username'] ?></td>
                    </tr>
                    <tr>
                        <th>First name</th>
                        <td><?php echo $user['first_name'] ?></td>
                    </tr>
                    <tr>
                        <th>Last name</th>
                        <td><?php echo $user['last_name'] ?></td>
                    </tr>
                    <tr>
                        <th>phone</th>
                        <td><?php echo $user['phone'] ?></td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td><?php echo $user['address'] ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?php echo $user['email'] ?></td>
                    </tr>
                    <tr>
                        <th>Evatar</th>
                        <td>
                            <?php if (!empty($user['avatar'])): ?>
                                <img height="80" src="assets/uploads/<?php echo $user['avatar'] ?>"/>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Last login</th>
                        <td><?php echo !empty($user['last_login']) ? date('d-m-Y H:i:s', strtotime($user['last_login'])) : '' ?></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td><?php echo Helper::getStatusText($user['status']); ?></td>
                    </tr>
                    <tr>
                        <th>Created at</th>
                        <td><?php echo date('d-m-Y H:i:s', strtotime($user['created_at'])) ?></td>
                    </tr>
                    <tr>
                        <th>Updated at</th>
                        <td><?php echo date('d-m-Y H:i:s', strtotime($user['updated_at'])) ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
