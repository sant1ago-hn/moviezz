<?php if (empty($category)): ?>
    <h2>Category í not exist</h2>
<?php else: ?>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="float-right ml-2">
                    <a class="btn btn-primary" href="index.php?controller=category">Back</a>
                </div>
                <h2>Edit category #<?php echo $category['id'] ?></h2>
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Category's name</label>
                        <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : $category['name']; ?>" class="form-control"/>
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
                        <select name="status" class="form-control">
                            <option value="0" <?php echo $selected_active ?> >Disabled</option>
                            <option value="1" <?php echo $selected_disabled ?> >Active</option>
                        </select>
                    </div>

                    <input type="submit" class="btn btn-primary" name="submit" value="Save"/>
                    <input type="reset" class="btn btn-secondary" name="submit" value="Reset"/>
                </form>
            </div>
        </div>
    </div>
<?php endif; ?>