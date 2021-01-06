<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h2>Add new movie</h2>
            <div class="table-responsive">
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="category_id">Choose category</label>
                        <select name="category_id" class="form-control" id="category_id">
                            <?php foreach ($categories as $category):
                                $selected = '';
                                if (isset($_POST['category_id']) && $category['id'] == $_POST['category_id']) {
                                    $selected = 'selected';
                                }
                                ?>
                                <option value="<?php echo $category['id'] ?>" <?php echo $selected; ?>>
                                    <?php echo $category['name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="movie_type">Type</label>
                        <select name="movie_type" class="form-control" id="movie_type">
                            <?php
                            $selected_movie = '';
                            $selected_tvseries = '';
                            if (isset($_POST['movie_type'])) {
                                switch ($_POST['movie_type']) {
                                    case 0:
                                        $selected_movie = 'selected';
                                        break;
                                    case 1:
                                        $selected_tvseries = 'selected';
                                        break;
                                }
                            }
                            ?>
                            <option value="0" <?php echo $selected_movie; ?>>Movies</option>
                            <option value="1" <?php echo $selected_tvseries ?>>TV Series</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Movie's name</label>
                        <input type="text" name="title" value="<?php echo isset($_POST['title']) ? $_POST['title'] : '' ?>"
                               class="form-control" id="title"/>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" value="" class="form-control" id="image"/>
                        <img src="#" id="img-preview" style="display: none" width="100" height="100"/>
                    </div>
                    <div class="form-group">
                        <label for="lengthm">Length (Minutes)</label>
                        <input type="number" name="lengthm" value="<?php echo isset($_POST['lengthm']) ? $_POST['lengthm'] : '' ?>"
                               class="form-control" id="lengthm"/>
                    </div>
                    <div class="form-group">
                        <label for="yeary">Year</label>
                        <input type="number" name="yeary" value="<?php echo isset($_POST['yeary']) ? $_POST['yeary'] : '' ?>"
                               class="form-control" id="yeary"/>
                    </div>
                    <div class="form-group">
                        <label for="director">Director</label>
                        <input type="text" name="director" value="<?php echo isset($_POST['director']) ? $_POST['director'] : '' ?>"
                               class="form-control" id="director"/>
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
                            <option value="0" <?php echo $selected_disabled; ?>>Disabled</option>
                            <option value="1" <?php echo $selected_active ?>>Active</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="submit" value="Save" class="btn btn-primary"/>
                        <a href="index.php?controller=movie&action=index" class="btn btn-default">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
