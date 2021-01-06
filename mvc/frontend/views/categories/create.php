<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h2>Add new category</h2>
            <div class="table-responsive">
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Category name</label>
                        <input type="text" id="name" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>" class="form-control" required/>
                    </div>

                    <div class="form-group">
                        <label for="category-avatar" class="form-group">Avatar</label>
                        <input type="file" class="form-control" name="avatar" id="category-avatar" required/>
                        <img src="#" id="img-preview" style="display: none" width="100" height="100"/>
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="description"><?php echo isset($_POST['description']) ? $_POST['description'] : ''; ?></textarea>
                    </div>

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
                        <select name="status" class="form-control form-group-custom mb-4" required>
                            <option value="0" <?php echo $selected_disabled ?> >Active</option>
                            <option value="1" <?php echo $selected_active ?> >Disabled</option>
                        </select>
                    </div>

                    <input type="submit" class="btn btn-primary" name="submit" value="Save"/>
                    <input type="reset" class="btn btn-secondary" name="submit" value="Reset"/>
                </form>
            </div>
        </div>
    </div>
</div>