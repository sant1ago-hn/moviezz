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
                    <h2>Update movie ID: #<?php if (isset($user)) { echo $user['id']; } ?></h2>
                </div>
            </div>
            <!-- end main title -->

            <!-- profile -->
            <div class="col-12">
                <div class="profile__content">
                    <!-- movie user -->
                    <div class="profile__user">
                        <div class="profile__avatar">
                            <?php if (!empty($user['avatar'])): ?>
                                <img src="image-<?php echo $user['avatar'] ?>" alt=""/>
                            <?php else:?>
                                <img src="bg_img-avatar.svg" alt="user's avatar">
                            <?php endif; ?>
                        </div>
                        <!-- or red -->
                        <div class="profile__meta profile__meta--green">
                            <h3><?php echo $user['username'] ?> <span>(<?php echo Helper::getStatusText($user['status']) ?>)</span></h3>
                            <span>Movie's ID: <?php echo $user['id']?></span>
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
                                                <h4 class="sign__title">User's details</h4>
                                            </div>

                                            <!-- Fullname -->
                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label class="sign__label" for="fullname">Fullname</label>
                                                    <input id="fullname" type="text" name="fullname" class="sign__input" value="<?php echo $user['fullname'] ?>" placeholder="Fullname">
                                                </div>
                                            </div>

                                            <!-- Username -->
                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label class="sign__label" for="username">Username</label>
                                                    <input id="username" type="text" name="username" class="sign__input" value="<?php echo $user['username']?>" placeholder="Username">
                                                </div>
                                            </div>

                                            <!-- Email -->
                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label class="sign__label" for="email">Email</label>
                                                    <input id="email" type="text" name="email" class="sign__input" value="<?php echo $user['email']?>" placeholder="Email">
                                                </div>
                                            </div>

                                            <!-- Available balances -->
                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label class="sign__label" for="balances">Available balances (VND)</label>
                                                    <input id="balances" type="text" name="balances" class="sign__input" value="<?php echo $user['balances']?>" placeholder="0 VND">
                                                </div>
                                            </div>

                                            <!-- Subscription -->
                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label class="sign__label" for="subscription">Subscription</label>
                                                    <select class="js-example-basic-single" name="subscription" id="subscription">
                                                        <?php
                                                        $basic = '';
                                                        $premium = '';
                                                        $exclusive = '';
                                                        if (isset($_POST['subscription'])) {
                                                            switch ($_POST['subscription']) {
                                                                case 0:
                                                                    $exclusive = 'selected';
                                                                    break;
                                                                case 1:
                                                                    $premium = 'selected';
                                                                    break;
                                                                case 2:
                                                                    $basic = 'selected';
                                                                    break;
                                                                }
                                                        }
                                                        ?>
                                                        <option value="2" <?php echo $basic; ?>>Basic</option>
                                                        <option value="1" <?php echo $premium; ?>>Premium</option>
                                                        <option value="0" <?php echo $exclusive; ?>>Exclusive</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <!-- Role -->
                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="sign__group">
                                                    <label class="sign__label" for="role">Right</label>
                                                    <input id="role" type="text" name="role" class="sign__input" value="<?php echo $user['role']?>">
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

                                <!-- Avatar & password form -->
                                <div class="col-12 col-lg-6">
                                    <div class="sign__form sign__form--profile">
                                        <div class="row">
                                            <div class="col-12">
                                                <h4 class="sign__title">Avatar & Password</h4>
                                            </div>

                                            <!-- Info -->
                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <!-- Description -->
                                                <div class="sign__group">
                                                    <label for="description" class="sign__label">Description</label>
                                                    <textarea class="sign__textarea" name="description" id="description"><?php echo $user['description'] ?></textarea>
                                                </div>
                                                <!-- Description -->

                                                <!-- Year -->
                                                <div class="sign__group">
                                                    <label for="yeary" class="sign__label">Year</label>
                                                    <input class="sign__input" name="yeary" id="yeary"
                                                           value="<?php echo $user['yeary'] ?>"/>
                                                </div>
                                                <!-- Year -->

                                                <!-- Nation -->
                                                <div class="sign__group">
                                                    <label for="nation" class="sign__label">Nation</label>
                                                    <input class="sign__input" name="nation" id="nation"
                                                           value="<?php echo $user['nation'] ?>"/>
                                                </div>
                                                <!-- Nation -->
                                            </div>
                                            <!-- Info -->

                                            <!-- Image -->
                                            <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                <div class="form__cover sign_group">
                                                    <div class="row">
                                                        <div class="col-12 col-md-12">
                                                            <span class="sign__label">Image</span>
                                                            <div class="form__img">
                                                                <label for="form__img-upload">
                                                                    <?php if (empty($user['image'])) echo 'Upload Poster (324 x 484)' ?>
                                                                </label>
                                                                <input id="form__img-upload" name="image" value="" type="file" accept=".png, .jpg, .jpeg">
                                                                <img id="form__img" src="image-<?php echo $user['image'] ?>" alt=""/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Image -->

                                            <!-- Status -->
                                            <div class="col-12 col-lg-12">
                                                <div class="sign__group col-12 col-md-6">
                                                    <label for="status" class="sign__label">Status</label>
                                                    <?php
                                                    $selected_unpublished = '';
                                                    $selected_published = '';
                                                    if (isset($user['status'])) {
                                                        switch ($user['status']) {
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
                                            <!-- Status -->
                                        </div>
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
        <?php if ($user['status'] == 1): ?>
            <button class="modal__btn modal__btn--apply" type="button" onclick="deactivate()">Apply</button>
        <?php elseif ($user['status'] == 0): ?>
            <button class="modal__btn modal__btn--apply" type="button" onclick="publish()">activate</button>
        <?php endif;?>
        <button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
        <script>
            function activate() {
                document.getElementById("status").value = 1;
                $.magnificPopup.close();
                $('#save').trigger("click");
            }

            function deactivate(){
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