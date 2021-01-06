<?php if (empty($user)): ?>
    <h2>Category is not exist</h2>
<?php else: ?>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h2>Edit user #<?php echo $user['id'] ?></h2>
                <div class="table-responsive">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="username">Username <span class="red">*</span></label>
                            <input type="text" name="username" id="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : $user['username'] ?>" disabled class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="first_name">First name</label>
                            <input type="text" name="first_name" id="first_name" value="<?php echo isset($_POST['first_name']) ? $_POST['first_name'] : $user['first_name']; ?>" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last name</label>
                            <input type="text" name="last_name" id="last_name" value="<?php echo isset($_POST['last_name']) ? $_POST['last_name'] : $user['last_name']; ?>" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : $user['phone']; ?>" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" id="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : $user['email']; ?>" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" value="<?php echo isset($_POST['address']) ? $_POST['address'] : $user['address']; ?>" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Avatar</label>
                            <input type="file" name="avatar" class="form-control"/>
                            <img src="#" id="img-preview" style="display: none" width="100" height="100"/>
                        </div>
                        <?php if (!empty($user['avatar'])): ?>
                            <img src="assets/uploads/<?php echo $user['avatar']; ?>" height="50"/>
                        <?php endif; ?>
                        <div class="form-group">
                            <?php
                            $selected_active = '';
                            $selected_disabled = '';
                            if (isset($_POST['status'])) {
                                switch ($_POST['status']) {
                                    case 0:
                                        $selected_disabled = 'selected';
                                        break;
                                    case 1:
                                        $selected_active = 'selected';
                                        break;
                                }
                            }
                            ?>
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="0" <?php echo $selected_active ?> >Disabled</option>
                                <option value="1" <?php echo $selected_disabled ?> >Active</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary waves-effect waves-light" name="submit">Save</button>
                        <button class="btn btn-secondary waves-effect waves-light">
                            <a href="index.php?controller=user&action=index" style="color: white">Back</a>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>