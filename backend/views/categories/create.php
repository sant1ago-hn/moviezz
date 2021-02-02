<!-- main content -->
<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>New Category</h2>
                </div>
            </div>
            <!-- end main title -->

            <!-- form -->
            <div class="col-12">
                <form action="#" method="post" class="form">
                    <div class="row">
                        <div class="col-12 col-md-5 form__cover">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-12">
                                    <div class="form__img">
                                        <label for="form__img-upload" style="color: red">Upload cover (190 x 270)</label>
                                        <input id="form__img-upload" name="form__img-upload" readonly>
                                        <img id="form__img" src="#" alt=" ">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-7 form__content">
                            <div class="row">
                                <!-- Category Name -->
                                <div class="col-12">
                                    <div class="form__group">
                                        <input type="text" class="form__input" id="name" name="name" placeholder="Category Name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>"/>
                                    </div>
                                </div>
                                <!-- Category Name -->

                                <!-- Description -->
                                <div class="col-12">
                                    <div class="form__group">
                                        <textarea id="text" name="description" class="form__textarea" style="color: red" readonly>Description</textarea>
                                    </div>
                                </div>
                                <!-- Description -->

                                <!-- Status -->
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <div class="form__group">
                                        <select class="js-example-basic-single" name="status" id="status">
                                            <option value=""></option>
                                            <option value="0">Inactive</option>
                                            <option value="1">Active</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Status -->

                                <!-- Empty field -->
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <label class="form__group" for="form__input">
                                        <input type="text" class="form__input" value="Empty Field" style="color: red" readonly>
                                    </label>
                                </div>
                                <!-- Empty field -->

                                <!-- Empty field -->
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <label class="form__group" for="form__input">
                                        <input type="text" class="form__input" value="Empty Field" style="color: red" readonly>
                                    </label>
                                </div>
                                <!-- Empty field -->

                                <!-- Empty field -->
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <label class="form__group" for="form__input">
                                        <input type="text" class="form__input" value="Empty Field" style="color: red" readonly>
                                    </label>
                                </div>
                                <!-- Empty field -->

                                <!-- Empty field -->
                                <div class="col-12 col-lg-6">
                                    <label class="form__group" for="form__input">
                                        <input type="text" class="form__input" value="Empty Field" style="color: red" readonly>
                                    </label>
                                </div>
                                <!-- Empty field -->

                                <!-- Empty field -->
                                <div class="col-12 col-lg-6">
                                    <label class="form__group" for="form__input">
                                        <input type="text" class="form__input" value="Empty Field" style="color: red" readonly>
                                    </label>
                                </div>
                                <!-- Empty field -->

                                <!-- Upload photos -->
                                <div class="col-12">
                                    <div class="form__gallery">
                                        <label id="gallery1" for="form__gallery-upload" style="color: red">Upload photos</label>
                                        <input data-name="#gallery1" id="form__gallery-upload" name="gallery" class="form__gallery-upload" readonly>
                                    </div>
                                </div>
                                <!-- Upload photos -->
                            </div>
                        </div>

                        <!-- Link (Embed Links) -->
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form__video">
                                        <label id="movie1" for="form__video-upload" style="color: red">Link (Embed Links)</label>
                                        <input data-name="#movie1" id="form__video-upload" name="movie" class="form__video-upload" type="text" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Link (Embed Links) -->

                        <!-- Buttons -->
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-lg-2">
                                    <button type="submit" name="submit" class="form__btn" value="submit">create</button>
                                </div>

                                <div class="col-12 col-sm-6 col-lg-2">
                                    <button type="reset" name="reset" class="form__btn" value="reset">reset</button>
                                </div>
                            </div>
                        </div>
                        <!-- Buttons -->

                    </div>
                </form>
            </div>
            <!-- end form -->
        </div>
    </div>
</main>
<!-- end main content -->