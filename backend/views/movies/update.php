<?php
require_once 'helpers/Helper.php';
?>

<!-- main content -->
<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Update movie ID: #<?php if (isset($movie)) { echo $movie['id']; } ?></h2>
                </div>
            </div>
            <!-- end main title -->

            <!-- profile -->
            <div class="col-12">
                <div class="profile__content">
                    <!-- movie user -->
                    <div class="profile__user">
                        <div class="profile__avatar">
                            <img src="bg_img-video.svg" alt="">
                        </div>
                        <!-- or red -->
                        <div class="profile__meta profile__meta--green">
                            <h3>
                                <?php
                                if (!empty($movie['season'])) {
                                    echo $movie['title'] . ' (Season ' . $movie['season'] . ')';
                                } else {
                                    echo $movie['title'];
                                }
                                ?>
                                <span>(<?php echo Helper::getStatusText($movie['status']) ?>)</span>
                            </h3>
                            <span>Movie's ID: <?php echo $movie['id']?></span>
                        </div>
                    </div>
                    <!-- end movie user -->

                    <!-- movie tabs nav -->
                    <ul class="nav nav-tabs profile__tabs" id="profile__tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Information</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Configs</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Reviews</a>
                        </li>
                    </ul>
                    <!-- end movie tabs nav -->

                    <!-- profile mobile tabs nav -->
                    <div class="profile__mobile-tabs" id="profile__mobile-tabs">
                        <div class="profile__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <input type="button" value="Profile">
                            <span></span>
                        </div>

                        <div class="profile__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item"><a class="nav-link active" id="1-tab" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Information</a></li>

                                <li class="nav-item"><a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Configs</a></li>

                                <li class="nav-item"><a class="nav-link" id="3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Reviews</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end profile mobile tabs nav -->

                    <!-- profile btns -->
                    <div class="profile__actions">
                        <a href="#modal-status3" class="profile__action profile__action--banned open-modal"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,13a1.49,1.49,0,0,0-1,2.61V17a1,1,0,0,0,2,0V15.61A1.49,1.49,0,0,0,12,13Zm5-4V7A5,5,0,0,0,7,7V9a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V12A3,3,0,0,0,17,9ZM9,7a3,3,0,0,1,6,0V9H9Zm9,12a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H17a1,1,0,0,1,1,1Z"/></svg></a>
                        <a href="#modal-delete3" class="profile__action profile__action--delete open-modal"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,10,18ZM20,6H16V5a3,3,0,0,0-3-3H11A3,3,0,0,0,8,5V6H4A1,1,0,0,0,4,8H5V19a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V8h1a1,1,0,0,0,0-2ZM10,5a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1V6H10Zm7,14a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V8H17Zm-3-1a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,14,18Z"/></svg></a>
                    </div>
                    <!-- end profile btns -->
                </div>
            </div>
            <!-- end profile -->

            <!-- content tabs -->
            <div class="tab-content" id="myTabContent">
                <!-- Information -->
                <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
                    <div class="col-12">
                        <form action="" method="post" class="sign__wrap" enctype="multipart/form-data">
                            <div class="row">
                                <!-- details form -->
                                <div class="col-12 col-lg-6">
                                    <div class="sign__form sign__form--profile sign__form--first">
                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="sign__title">Movie's details</h4>
                                            </div>

                                            <!-- Title -->
                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label class="sign__label" for="title">Title</label>
                                                    <input id="title" type="text" name="title" class="sign__input" value="<?php echo $movie['title'] ?>">
                                                </div>
                                            </div>

                                            <!-- Category -->
                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label class="sign__label" for="idcategory">Category</label>
                                                    <select name="idcategory[]" class="sign__input" id="idcategory" multiple="multiple">
                                                        <?php if (isset($categories)): ?>
                                                        <?php foreach ($categories as $category):
                                                            $selected = '';
                                                            for ($categories_item = 0; $categories_item < count(explode(',', $movie['idcategory'])); $categories_item++) {
                                                                if (explode(',', $movie['idcategory'])[$categories_item] == $category['id']) {
                                                                    $selected = 'selected';
                                                                }
                                                            }
                                                        ?>
                                                            <option value="<?php echo $category['id'] ?>" <?php echo $selected; ?>>
                                                                <?php echo $category['name'] ?>
                                                            </option>
                                                        <?php endforeach; ?>
                                                        <?php endif;?>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Director -->
                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label class="sign__label" for="director">Director</label>
                                                    <input id="director" type="text" name="director" class="sign__input" value="<?php echo $movie['director'] ?>">
                                                </div>
                                            </div>

                                            <!-- Length -->
                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label class="sign__label" for="lengthm">Length (Minutes)</label>
                                                    <input id="lengthm" type="text" name="lengthm[]" class="sign__input" value="<?php echo $movie['lengthm']?>" <?php if ($movie['episode'] > 1) {echo 'readonly';} else {echo '';}?>>
                                                </div>
                                            </div>

                                            <!-- Vietsub -->
                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label class="sign__label" for="en_sub">Vietnamese subtitle (Y/N)</label>
                                                    <select class="form__input" name="vie_sub" id="vie_sub">
                                                        <option value="Y">Available</option>
                                                        <option value="N">Unavailable</option>
                                                    </select>                                                </div>
                                            </div>

                                            <!-- Engsub -->
                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label class="sign__label" for="vie_sub">English subtitle (Y/N)</label>
                                                    <select class="form__input" name="en_sub" id="en_sub">
                                                        <option value="Y">Available</option>
                                                        <option value="N">Unavailable</option>
                                                    </select>                                                </div>
                                            </div>

                                            <!-- Trailer -->
                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label class="sign__label" for="trailer">Trailer</label>
                                                    <input id="trailer" type="text" name="trailer" class="sign__input" value="<?php echo $movie['trailer']?>">
                                                </div>
                                            </div>

                                            <!-- Movie type -->
                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label for="movie_type" class="sign__label">Movie Type</label>
                                                    <select name="movie_type" class="sign__input" id="movie_type">
                                                        <?php
                                                        $selected_movie = '';
                                                        $selected_tvseries = '';
                                                        if (isset($movie['movie_type'])) {
                                                            switch ($movie['movie_type']) {
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
                                            </div>

                                            <!-- Episodes -->
                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label class="sign__label" for="episode">Num of episode: </label>
                                                    <input id="episode" type="number" name="episode" class="sign__input" value="<?php echo $movie['episode']?>" <?php if ($movie['episode'] <= 1) {echo 'readonly';} else {echo '';}?>>
                                                </div>
                                            </div>

                                            <!-- Status -->
                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label for="status" class="sign__label">Status</label>
                                                    <?php
                                                    $selected_unpublished = '';
                                                    $selected_published = '';
                                                    if (isset($movie['status'])) {
                                                        switch ($movie['status']) {
                                                            case 0:
                                                                $selected_unpublished = 'selected';
                                                                break;
                                                            case 1:
                                                                $selected_published = 'selected';
                                                                break;
                                                        }
                                                    }
                                                    ?>
                                                    <select name="status" id="status">
                                                        <option value="0" <?php echo $selected_unpublished?>>Unpublished</option>
                                                        <option value="1" <?php echo $selected_published?>>Published</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Back -->
                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <button onclick="history.back()" class="sign__btn" type="button">Back</button>
                                            </div>

                                            <!-- Save -->
                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <button class="sign__btn" type="submit" name="submit" id="save">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end details form -->

                                <!-- Image & Description form -->
                                <div class="col-12 col-lg-6">
                                    <div class="sign__form sign__form--profile">
                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="sign__title">Image & Description</h4>
                                            </div>

                                            <!-- Info -->
                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <!-- Description -->
                                                <div class="sign__group">
                                                    <label for="description" class="sign__label">Description</label>
                                                    <textarea class="sign__textarea" name="description" id="description"><?php echo $movie['description'] ?></textarea>
                                                </div>
                                                <!-- Description -->

                                                <!-- Year -->
                                                <div class="sign__group">
                                                    <label for="yeary" class="sign__label">Year</label>
                                                    <input class="sign__input" name="yeary" id="yeary"
                                                           value="<?php echo $movie['yeary'] ?>"/>
                                                </div>
                                                <!-- Year -->

                                                <!-- Nation -->
                                                <div class="sign__group">
                                                    <label for="nation" class="sign__label">Nation</label>
                                                    <input class="sign__input" name="nation" id="nation"
                                                           value="<?php echo $movie['nation'] ?>"/>
                                                </div>
                                                <!-- Nation -->
                                            </div>
                                            <!-- Info -->

                                            <!-- Image -->
                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="form__cover sign_group">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6 col-md-12">
                                                            <span class="sign__label">Image</span>
                                                            <div class="form__img">
                                                                <label for="form__img-upload">
                                                                    <?php if (empty($movie['image'])) {echo 'Upload Poster (324 x 484)';} ?>
                                                                </label>
                                                                <input id="form__img-upload" name="image" value="" type="file" accept=".png, .jpg, .jpeg">
                                                                <img id="form__img" src="image-<?php echo $movie['image'] ?>" alt=""/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Image -->

                                            <div class="col-12">
                                                <div class="sign__group">
                                                    <input type="text" class="sign__input" style="background: url() no-repeat center center;" readonly placeholder="<?php if ($movie['episode'] > 1) {echo 'Episode source:';} else { echo 'Source:';}?>">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Source -->
                                        <?php if ($movie['movie_type'] == 1):?>
                                            <?php for ($eps = 0; $eps < $movie['episode']; $eps++): ?>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h6 class="sign__title" style="color: gold"><?php echo 'Episode ' . ($eps + 1)?></h6>
                                                    </div>
                                                    <!-- Title -->
                                                    <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                        <div class="sign__group">
                                                            <input type="text" class="sign__input" name="ep_name[]" value="<?php if (!empty($movie['ep_name'])) {echo explode(';', $movie['ep_name'])[$eps];}?>" placeholder="<?php echo 'Episode ' . ($eps + 1) . '\'s title:'?>">
                                                        </div>
                                                    </div>
                                                    <!-- Length -->
                                                    <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                        <div class="sign__group">
                                                            <input type="number" class="sign__input" name="lengthm[]" value="<?php if (!empty($movie['lengthm'])) {echo explode(',', $movie['lengthm'])[$eps];}?>" placeholder="<?php echo 'Episode ' . ($eps + 1) . '\'s length:'?>">
                                                        </div>
                                                    </div>
                                                    <!-- Basic Link -->
                                                    <div class="col-12 col-md-6 col-lg-12 col-xl-4">
                                                        <div class="sign__group">
                                                            <input type="text" name="link_basic[]" class="sign__input" value="<?php echo explode(',', $movie['link_basic'])[$eps] ?>" placeholder="Basic Link">
                                                        </div>
                                                    </div>
                                                    <!-- Basic Link -->

                                                    <!-- Premium Link -->
                                                    <div class="col-12 col-md-6 col-lg-12 col-xl-4">
                                                        <div class="sign__group">
                                                            <input type="text" name="link_premium[]" class="sign__input" value="<?php echo explode(',', $movie['link_premium'])[$eps]?>" placeholder="Premium Link">
                                                        </div>
                                                    </div>
                                                    <!-- Premium Link -->

                                                    <!-- Exclusive Link -->
                                                    <div class="col-12 col-md-6 col-lg-12 col-xl-4">
                                                        <div class="sign__group">
                                                            <input type="text" name="link_exclusive[]" class="sign__input" value="<?php echo explode(',', $movie['link_exclusive'])[$eps]?>" placeholder="Exclusive Link">
                                                        </div>
                                                    </div>
                                                    <!-- Exclusive Link -->
                                                </div>
                                            <?php endfor;?>
                                        <?php else:?>
                                            <div class="row">
                                                <!-- Basic Link -->
                                                <div class="col-12 col-md-6 col-lg-12 col-xl-4">
                                                    <div class="sign__group">
                                                        <input id="link_basic" type="text" name="link_basic[]" class="sign__input" value="<?php echo $movie['link_basic']?>" placeholder="Basic Link">
                                                    </div>
                                                </div>
                                                <!-- Basic Link -->

                                                <!-- Premium Link -->
                                                <div class="col-12 col-md-6 col-lg-12 col-xl-4">
                                                    <div class="sign__group">
                                                        <input id="link_premium" type="text" name="link_premium[]" class="sign__input" value="<?php echo $movie['link_premium']?>" placeholder="Premium Link">
                                                    </div>
                                                </div>
                                                <!-- Premium Link -->

                                                <!-- Exclusive Link -->
                                                <div class="col-12 col-md-6 col-lg-12 col-xl-4">
                                                    <div class="sign__group">
                                                        <input id="link_exclusive" type="text" name="link_exclusive[]" class="sign__input" value="<?php echo $movie['link_exclusive']?>" placeholder="Exclusive Link">
                                                    </div>
                                                </div>
                                                <!-- Exclusive Link -->
                                            </div>
                                        <?php endif;?>
                                        <!-- Source -->

                                    </div>
                                </div>
                                <!-- end Image & Description form -->
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Information -->
            </div>
            <!-- end content tabs -->
        </div>
    </div>
</main>
<!-- end main content -->

<!-- modal view -->
<div id="modal-view" class="zoom-anim-dialog mfp-hide modal modal--view">
    <div class="comments__autor">
        <img class="comments__avatar" src="img/user.svg" alt="">
        <span class="comments__name">John Doe</span>
        <span class="comments__time">30.08.2018, 17:53</span>
    </div>
    <p class="comments__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
    <div class="comments__actions">
        <div class="comments__rate">
            <span><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11 7.3273V14.6537" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M14.6667 10.9905H7.33333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path fill-rule="evenodd" clip-rule="evenodd" d="M15.6857 1H6.31429C3.04762 1 1 3.31208 1 6.58516V15.4148C1 18.6879 3.0381 21 6.31429 21H15.6857C18.9619 21 21 18.6879 21 15.4148V6.58516C21 3.31208 18.9619 1 15.6857 1Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg> 12</span>

            <span>7<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.6667 10.9905H7.33333" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path fill-rule="evenodd" clip-rule="evenodd" d="M15.6857 1H6.31429C3.04762 1 1 3.31208 1 6.58516V15.4148C1 18.6879 3.0381 21 6.31429 21H15.6857C18.9619 21 21 18.6879 21 15.4148V6.58516C21 3.31208 18.9619 1 15.6857 1Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></span>
        </div>
    </div>
</div>
<!-- end modal view -->

<!-- modal delete -->
<div id="modal-delete" class="zoom-anim-dialog mfp-hide modal">
    <h6 class="modal__title">Comment delete</h6>

    <p class="modal__text">Are you sure to permanently delete this comment?</p>

    <div class="modal__btns">
        <button class="modal__btn modal__btn--apply" type="button">Delete</button>
        <button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
    </div>
</div>
<!-- end modal delete -->

<!-- modal view -->
<div id="modal-view2" class="zoom-anim-dialog mfp-hide modal modal--view">
    <div class="reviews__autor">
        <img class="reviews__avatar" src="img/user.svg" alt="">
        <span class="reviews__name">Best Marvel movie in my opinion</span>
        <span class="reviews__time">24.08.2018, 17:53 by John Doe</span>

        <span class="reviews__rating"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z"/></svg> 8.4</span>
    </div>
    <p class="reviews__text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
</div>
<!-- end modal view -->

<!-- modal delete -->
<div id="modal-delete2" class="zoom-anim-dialog mfp-hide modal">
    <h6 class="modal__title">Review delete</h6>

    <p class="modal__text">Are you sure to permanently delete this review?</p>

    <div class="modal__btns">
        <button class="modal__btn modal__btn--apply" type="button">Delete</button>
        <button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
    </div>
</div>
<!-- end modal delete -->

<!-- modal status -->
<div id="modal-status3" class="zoom-anim-dialog mfp-hide modal">
    <h6 class="modal__title">Status change</h6>

    <p class="modal__text">Are you sure about immediately change status?</p>

    <div class="modal__btns">
        <?php if ($movie['status'] == 1): ?>
            <button class="modal__btn modal__btn--apply" type="button" onclick="suppress()">Apply</button>
        <?php elseif ($movie['status'] == 0): ?>
            <button class="modal__btn modal__btn--apply" type="button" onclick="publish()">Apply</button>
        <?php endif;?>
        <button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
        <script>
            function publish() {
                document.getElementById("status").value = 1;
                $.magnificPopup.close();
                $('#save').trigger("click");
            }

            function suppress(){
                document.getElementById("status").value = 0;
                $.magnificPopup.close();
                $('#save').trigger("click");
            }
        </script>
    </div>
</div>
<!-- end modal status -->

<!-- modal delete -->
<div id="modal-delete3" class="zoom-anim-dialog mfp-hide modal">
    <h6 class="modal__title">User delete</h6>

    <p class="modal__text">Are you sure to permanently delete this user?</p>

    <div class="modal__btns">
        <button class="modal__btn modal__btn--apply" type="button">Delete</button>
        <button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
    </div>
</div>
<!-- end modal delete -->