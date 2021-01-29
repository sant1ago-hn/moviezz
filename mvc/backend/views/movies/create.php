<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h2>Add new movie</h2>
            <div class="table-responsive">
                <form method="post" action="" enctype="multipart/form-data">
                    <!--ID-->
                    <div class="form-group">
                        <label for="idcategory" class="badge badge-secondary">Choose category</label>
                        <select name="idcategory" class="form-control" id="idcategory">
                            <?php foreach ($categories as $category):
                                $selected = '';
                                if (isset($_POST['idcategory']) && $category['id'] == $_POST['idcategory']) {
                                    $selected = 'selected';
                                }
                                ?>
                                <option value="<?php echo $category['id'] ?>" <?php echo $selected; ?>>
                                    <?php echo $category['name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!--Type-->
                    <div class="form-group">
                        <label for="movie_type" class="badge badge-secondary">Type</label>
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

                    <!--Title-->
                    <div class="form-group">
                        <label for="title" class="badge badge-secondary">Movie's name</label>
                        <input type="text" name="title" value="<?php echo isset($_POST['title']) ? $_POST['title'] : '' ?>"
                               class="form-control" id="title"/>
                    </div>

                    <!--Image-->
                    <div class="form-group">
                        <label for="image" class="badge badge-secondary">Image</label>
                        <input type="file" name="image" value="" class="form-control" id="image"/>
                        <img src="#" id="img-preview" style="display: none" width="100" height="100" alt=""/>
                    </div>

                    <!--Length-->
                    <div class="form-group">
                        <label for="lengthm" class="badge badge-secondary">Length (Minutes)</label>
                        <input type="number" name="lengthm" value="<?php echo isset($_POST['lengthm']) ? $_POST['lengthm'] : '' ?>"
                               class="form-control" id="lengthm"/>
                    </div>

                    <!--Year-->
                    <div class="form-group">
                        <label for="yeary" class="badge badge-secondary">Year</label>
                        <input type="number" name="yeary" value="<?php echo isset($_POST['yeary']) ? $_POST['yeary'] : '' ?>"
                               class="form-control" id="yeary"/>
                    </div>

                    <!--Director-->
                    <div class="form-group">
                        <label for="director" class="badge badge-secondary">Director</label>
                        <input type="text" name="director" value="<?php echo isset($_POST['director']) ? $_POST['director'] : '' ?>"
                               class="form-control" id="director"/>
                    </div>

                    <!--Nation-->
                    <div class="form-group">
                        <label for="nation" class="badge badge-secondary">Nation</label>
                        <input type="text" name="nation" value="<?php echo isset($_POST['nation']) ? $_POST['nation'] : '' ?>"
                               class="form-control" id="nation"/>
                    </div>

                    <!--Description-->
                    <div class="form-group">
                        <label for="description" class="badge badge-secondary">Description</label>
                        <input type="text" name="description" value="<?php echo isset($_POST['description']) ? $_POST['description'] : '' ?>"
                               class="form-control" id="description"/>
                    </div>

                    <!--Trailer-->
                    <div class="form-group">
                        <label for="trailer" class="badge badge-secondary">Trailer</label>
                        <input type="text" name="trailer" value="<?php echo isset($_POST['trailer']) ? $_POST['trailer'] : '' ?>"
                               class="form-control" id="trailer"/>
                    </div>

                    <!--Link 1080P-->
                    <div class="form-group">
                        <label for="link1080" class="badge badge-secondary">Link 1080P</label>
                        <input type="text" name="link1080" value="<?php echo isset($_POST['link1080']) ? $_POST['link1080'] : '' ?>"
                               class="form-control" id="link1080"/>
                    </div>

                    <!--English Subtitle-->
                    <div class="form-group">
                        <label for="en_sub" class="badge badge-secondary">English Subtitle</label>
                        <input type="text" name="en_sub" value="<?php echo isset($_POST['en_sub']) ? $_POST['en_sub'] : '' ?>"
                               class="form-control" id="en_sub"/>
                    </div>

                    <!--Vietnamese Subtitle-->
                    <div class="form-group">
                        <label for="vie_sub" class="badge badge-secondary">Vietnamese Subtitle</label>
                        <input type="text" name="vie_sub" value="<?php echo isset($_POST['vie_sub']) ? $_POST['vie_sub'] : '' ?>"
                               class="form-control" id="vie_sub"/>
                    </div>

                    <!--Status-->
                    <div class="form-group">
                        <label for="status" class="badge badge-secondary">Status</label>
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

                    <!--Submit-->
                    <div class="form-group">
                        <input type="submit" name="submit" value="Save" class="btn btn-primary"/>
                        <a href="index.php?controller=movie&action=index" class="btn btn-default">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
