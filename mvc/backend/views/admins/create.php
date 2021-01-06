<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="float-right ml-2">
                <a class="btn btn-primary waves-effect waves-light" href="index.php?controller=user">Back</a>
            </div>
            <h2>Add new user</h2>
            <div class="table-responsive">
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Username <span class="red">*</span></label>
                        <input type="text" id="name" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label for="password">Password <span class="red">*</span></label>
                        <input type="password" name="password" id="password"
                               value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ?>" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="password_confirm">Password confirm <span class="red">*</span></label>
                        <input type="password" name="password_confirm" id="password_confirm" value="" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="first_name">First name</label>
                        <input type="text" name="first_name" id="first_name"
                               value="<?php echo isset($_POST['first_name']) ? $_POST['first_name'] : '' ?>" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last name</label>
                        <input type="text" name="last_name" id="last_name" value="<?php echo isset($_POST['last_name']) ? $_POST['last_name'] : '' ?>" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="number" name="phone" id="phone" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : '' ?>" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" value="<?php echo isset($_POST['address']) ? $_POST['address'] : '' ?>" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="avatar">Avatar</label>
                        <input type="file" name="avatar" id="avatar" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="facebook">Facebook</label>
                        <input type="text" name="facebook" id="facebook" value="<?php echo isset($_POST['facebook']) ? $_POST['facebook'] : '' ?>" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control" id="status">
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
                            <option value="0" <?php echo $selected_disabled; ?>>Disable</option>
                            <option value="1" <?php echo $selected_active ?>>Active</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary waves-effect waves-light" name="submit">Create</button>
                    <button type="reset" class="btn btn-secondary waves-effect waves-light" name="reset">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>