<?php
require_once 'helpers/Helper.php';
?>

<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="float-right ml-2">
                <a class="btn btn-danger" href="index.php?controller=movie&action=delete&id=<?php echo $movie['id'] ?>" onclick="return confirm('Confirm Deletion?')">Delete</a>
            </div>
            <div class="float-right ml-2">
                <a class="btn btn-secondary" href="index.php?controller=movie&action=update&id=<?php echo $movie['id'] ?>">Edit</a>
            </div>
            <div class="float-right ml-2">
                <a class="btn btn-primary" href="index.php?controller=movie">Back</a>
            </div>
            <h5 class="header-title mb-4">Movie Detail</h5>
            <div class="table-responsive">
                <table class="table table-centered table-hover mb-0">
                    <thead>
                    <!--ID-->
                    <tr>
                        <th scope="row"  class="text-primary">#</th>
                        <td><?php echo $movie['id']?></td>
                    </tr>

                    <!--Category name-->
                    <tr>
                        <th scope="row">Category name</th>
                        <td><?php echo $movie['category_name']?></td>
                    </tr>

                    <!--Title-->
                    <tr>
                        <th scope="row">Title</th>
                        <td><?php echo $movie['title'] ?></td>
                    </tr>

                    <!--Image-->
                    <tr>
                        <th scope="row">Image</th>
                        <td>
                            <?php if (!empty($movie['image'])): ?>
                                <img height="80" src="assets/posters/<?php echo $movie['image'] ?>" alt=""/>
                            <?php endif; ?>
                        </td>
                    </tr>

                    <!--Length-->
                    <tr>
                        <th scope="row">Length (Minutes)</th>
                        <td><?php echo number_format($movie['lengthm']) ?></td>
                    </tr>

                    <!--Director-->
                    <tr>
                        <th scope="row">Director</th>
                        <td><?php echo $movie['director'] ?></td>
                    </tr>

                    <!--Description-->
                    <tr>
                        <th scope="row">Description</th>
                        <td><?php echo $movie['description'] ?></td>
                    </tr>

                    <!--Trailer-->
                    <tr>
                        <th scope="row">Trailer</th>
                        <td>
                            <?php if (!empty($movie['trailer'])): ?>
                                <a rel="stylesheet" href="<?php echo $movie['trailer'] ?>" target="_blank"><?php echo $movie['trailer'] ?>
                            <?php else:?>
                                <p class="badge badge-soft-danger">Unavailable</p>
                            <?php endif; ?>
                        </td>
                    </tr>

                    <!--Link 1080P-->
                    <tr>
                        <th scope="row">Link 1080P</th>
                        <td>
                            <?php if (!empty($movie['link1080'])): ?>
                            <a rel="stylesheet" href="<?php echo $movie['link1080'] ?>" target="_blank"><?php echo $movie['link1080'] ?>
                            <?php else:?>
                                <p class="badge badge-soft-danger">Unavailable</p>
                            <?php endif; ?>
                        </td>
                    </tr>

                    <!--English Subtitle-->
                    <tr>
                        <th scope="row">English Subtitle</th>
                        <td>
                            <?php if (!empty($movie['en_sub'])): ?>
                                <p class="badge badge-soft-primary">Available</p>
                            <?php else:?>
                                <p class="badge badge-soft-danger">Unavailable</p>
                            <?php endif; ?>
                        </td>
                    </tr>

                    <!--Vietnamese Subtitle-->
                    <tr>
                        <th scope="row">Vietnamese Subtitle</th>
                        <td>
                            <?php if (!empty($movie['vie_sub'])): ?>
                                <p class="badge badge-soft-primary">Available</p>
                            <?php else:?>
                                <p class="badge badge-soft-danger">Unavailable</p>
                            <?php endif; ?>
                        </td>
                    </tr>

                    <!--Status-->
                    <tr>
                        <th scope="row">Status</th>
                        <td><?php echo Helper::getStatusText($movie['status']) ?></td>
                    </tr>

                    <!--Created at-->
                    <tr>
                        <th scope="row">Created at</th>
                        <td><?php echo date('d-m-Y H:i:s', strtotime($movie['created_at'])) ?></td>
                    </tr>

                    <!--Updated at-->
                    <tr>
                        <th scope="row">Updated at</th>
                        <td><?php echo !empty($movie['updated_at']) ? date('d-m-Y H:i:s', strtotime($movie['updated_at'])) : '--' ?></td>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>