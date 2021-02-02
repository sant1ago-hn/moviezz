<?php if (empty($category)): ?>
    <h2>Category is not exist</h2>
<?php else: ?>
    <!-- main content -->
    <main class="main">
        <div class="container-fluid">
            <div class="row">
                <!-- main title -->
                <div class="col-12">
                    <div class="main__title">
                        <h2>Edit category ID: #<?php echo $category['id']?></h2>
                    </div>
                </div>
                <!-- end main title -->

                <!-- information -->
                <div class="col-12">
                    <div class="profile__content">
                        <!-- movie user -->
                        <div class="profile__user">
                            <div class="profile__avatar">
                                <img src="backend/assets/img/video.svg" alt="">
                            </div>
                            <!-- or red -->
                            <div class="profile__meta profile__meta--green">
                                <h3><?php echo $category['name'] ?> <span>(<?php if ($category['status'] == 1) echo 'Active'; else {echo 'Inactive';}  ?>)</span></h3>
                                <span>Category's ID: <?php echo $category['id']?></span>
                            </div>
                        </div>
                        <!-- end movie user -->

                        <!-- profile btns -->
                        <div class="profile__actions">
                            <a href="edit-category-<?php echo $category['id'] ?>" class="main__table-btn main__table-btn--edit">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M22,7.24a1,1,0,0,0-.29-.71L17.47,2.29A1,1,0,0,0,16.76,2a1,1,0,0,0-.71.29L13.22,5.12h0L2.29,16.05a1,1,0,0,0-.29.71V21a1,1,0,0,0,1,1H7.24A1,1,0,0,0,8,21.71L18.87,10.78h0L21.71,8a1.19,1.19,0,0,0,.22-.33,1,1,0,0,0,0-.24.7.7,0,0,0,0-.14ZM6.83,20H4V17.17l9.93-9.93,2.83,2.83ZM18.17,8.66,15.34,5.83l1.42-1.41,2.82,2.82Z"/>
                                </svg>
                            </a>
                            <a href="#modal-delete3" class="profile__action profile__action--delete open-modal"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,10,18ZM20,6H16V5a3,3,0,0,0-3-3H11A3,3,0,0,0,8,5V6H4A1,1,0,0,0,4,8H5V19a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V8h1a1,1,0,0,0,0-2ZM10,5a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1V6H10Zm7,14a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V8H17Zm-3-1a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6A1,1,0,0,0,14,18Z"/></svg></a>
                        </div>
                        <!-- end profile btns -->
                    </div>
                </div>
                <!-- end information -->

                <!-- content tabs -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
                        <div class="col-12">
                            <div class="sign__wrap">
                                <div class="row">
                                    <!-- details form -->
                                    <div class="col-12">
                                        <form action="" method="post" class="sign__form sign__form--profile sign__form--first">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h4 class="sign__title">Category's details</h4>
                                                </div>

                                                <!-- Title -->
                                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                    <div class="sign__group">
                                                        <label class="sign__label" for="name">Title</label>
                                                        <input id="name" type="text" name="name" class="sign__input" value="<?php echo isset($_POST['name']) ? $_POST['name'] : $category['name']; ?>">
                                                    </div>
                                                </div>

                                                <!-- Status -->
                                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                    <div class="sign__group">
                                                        <label class="sign__label" for="status">Status</label>
                                                        <?php
                                                        $selected_active = '';
                                                        $selected_disable = '';
                                                        if (isset($category['status'])) {
                                                            if ($category['status'] == 0) {
                                                                $selected_disable = 'selected';
                                                            } else {
                                                                $selected_active = 'selected';
                                                            }
                                                        }
                                                        ?>
                                                        <select name="status" class="form__input js-example-basic-single" id="status">
                                                            <option value="0" <?php echo $selected_disable ?>>Disable</option>
                                                            <option value="1" <?php echo $selected_active ?>>Active</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <!-- Created date -->
                                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                    <div class="sign__group">
                                                        <label class="sign__label" for="created_at">Created date</label>
                                                        <input id="created_at" type="text" name="created_at" class="sign__input" placeholder="<?php echo date('d M Y - h:i:s A', strtotime($category['created_at'])); ?>" readonly>
                                                    </div>
                                                </div>

                                                <!-- Updated date -->
                                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                    <div class="sign__group">
                                                        <label class="sign__label" for="updated_at">Updated date</label>
                                                        <input id="updated_at" type="text" name="updated_at" class="sign__input" placeholder="<?php echo isset($category['updated_at']) ? date('d M Y - h:i:s A', strtotime($category['updated_at'])) : 'N/A'; ?>" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-6 col-lg-12 col-xl-6">
                                                    <button onclick="history.back()" class="sign__btn" type="button">Back</button>
                                                </div>

                                                <div class="col-12 col-md-6 col-lg-12 col-xl-3">
                                                    <a href="#modal-confirm" class="sign__btn profile__action profile__action--banned open-modal" type="button">Save</a>
                                                </div>

                                                <div class="col-12 col-md-6 col-lg-12 col-xl-3">
                                                    <button class="sign__btn" id="save" type="submit" name="submit" style="display: none">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end details form -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end content tabs -->
            </div>
        </div>
    </main>
    <!-- end main content -->
<?php endif; ?>

<!-- modal confirm -->
<div id="modal-confirm" class="zoom-anim-dialog mfp-hide modal">
    <h6 class="modal__title">Confirm save</h6>

    <p class="modal__text">Are you sure to save this category?</p>

    <div class="modal__btns">
        <button class="modal__btn modal__btn--apply" type="button" onclick="save()">Apply</button>
        <button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
        <script>
            function save() {
                $.magnificPopup.close();
                $('#save').trigger("click");
            }
        </script>
    </div>
</div>
<!-- end modal confirm -->

<!-- modal view -->
<div id="modal-view" class="zoom-anim-dialog mfp-hide modal modal--view">
    <div class="comments__autor">
        <img class="comments__avatar" src="assets/img/user.svg" alt="">
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
        <button class="modal__btn modal__btn--apply" type="button">Apply</button>
        <button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
    </div>
</div>
<!-- end modal status -->

<!-- modal delete -->
<div id="modal-delete3" class="zoom-anim-dialog mfp-hide modal">
    <h6 class="modal__title">User delete</h6>

    <p class="modal__text">Are you sure to permanently delete this user?</p>

    <div class="modal__btns">
        <a href="#" class="modal__btn modal__btn--apply" type="button">Delete</a>
        <button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
    </div>
</div>
<!-- end modal delete -->
