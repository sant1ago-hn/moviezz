<!-- main content -->
<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>New Movie</h2>
                </div>
            </div>
            <!-- end main title -->

            <!-- form -->
            <div class="col-12">
                <form method="post" class="form" enctype="multipart/form-data">
                    <div class="row">
                        <!-- Image -->
                        <div class="col-12 col-md-5 form__cover">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-12">
                                    <!-- Image -->
                                    <div class="form__img">
                                        <label for="form__img-upload">Upload Poster (324 x 484)</label>
                                        <input id="form__img-upload" name="image" value="" type="file" accept=".png, .jpg, .jpeg">
                                        <img id="form__img" src="#" alt=" ">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-7 form__content">
                            <div class="row">
                                <!-- Title -->
                                <div class="col-12 col-lg-6">
                                    <div class="form__group">
                                        <input type="text" name="title" placeholder="Title" class="form__input" id="title"/>
                                    </div>
                                </div>

                                <!-- Director -->
                                <div class="col-12 col-lg-6">
                                    <div class="form__group">
                                        <input type="text" name="director" placeholder="Director" class="form__input" id="director"/>
                                    </div>
                                </div>

                                <!-- Description -->
                                <div class="col-12">
                                    <div class="form__group">
                                        <textarea id="description" name="description" class="form__textarea" placeholder="Description"></textarea>
                                    </div>
                                </div>

                                <!-- Category's name -->
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <div class="form__group">
                                        <select name="movie_type" class="form__input" id="movie_type">
                                            <option value="0">Movies</option>
                                            <option value="1">TV Series</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Release Year -->
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <div class="form__group">
                                        <input type="number" name="yeary" class="form__input" placeholder="Release year">
                                    </div>
                                </div>

                                <!-- Length -->
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <div class="form__group">
                                        <input type="number" name="lengthm" class="form__input" placeholder="Running timed in minutes">
                                    </div>
                                </div>

                                <!-- Nation -->
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <div class="form__group">
                                        <input type="text" name="nation" class="form__input" placeholder="Nation">
                                    </div>
                                </div>

                                <!-- English subtitle -->
                                <div class="col-12 col-lg-6">
                                    <div class="form__group">
                                        <input type="text" name="en_sub" class="form__input" placeholder="English subtitle (Y/N)">
                                    </div>
                                </div>

                                <!-- Vietnamese subtitle -->
                                <div class="col-12 col-lg-6">
                                    <div class="form__group">
                                        <input type="text" name="vie_sub" class="form__input" placeholder="Vietnamese subtitle (Y/N)">
                                    </div>
                                </div>

                                <!-- Background photos -->
                                <div class="col-12 col-lg-6">
                                    <div class="form__group">
                                        <input type="text" name="trailer" class="form__input" placeholder="Trailer">
                                    </div>
                                </div>

                                <!-- Status -->
                                <div class="col-12 col-lg-6">
                                    <div class="form__group">
                                        <select class="form__input" name="status">
                                            <option value="1">Visible</option>
                                            <option value="0">Invisible</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Movies Type -->
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form__group">
                                        <select class="js-example-basic-multiple" name="idcategory[]" multiple="multiple" id="genre">
                                            <?php foreach ($categories as $category): ?>
                                                <option value="<?php echo $category['id'] ?>">
                                                    <?php echo $category['name'] ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Link embed & button -->
                        <div class="col-12">
                            <div class="row">
                                <!-- Link embed -->
                                <div class="col-12">
                                    <div class="form__group">
                                        <input type="text" data-name="#movie1" id="form__video-upload" name="link1080" class="form__input" placeholder="Embed Link">
                                        <img src="assets/img/video.svg" style="position:absolute; width:24px; height:24px; top: 10px; right: 15px" alt="">
                                    </div>
                                </div>

                                <!-- Submit -->
                                <div class="col-12">
                                    <button type="submit" name="submit" value="publish" class="form__btn">publish</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- end form -->
        </div>
    </div>
</main>
<!-- end main content -->
