<?php
require_once 'helpers/Helper.php';
?>

<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="float-right ml-2">
                <a class="btn btn-primary" href="index.php?controller=movie">Back</a>
            </div>
            <h5 class="header-title mb-4">Movie Detail</h5>
            <div class="table-responsive">
                <table class="table table-centered table-hover mb-0">
                    <thead>
                    <!--ID-->
                    <tr>
                        <th scope="row">#</th>
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
                        <th>Image</th>
                        <td>
                            <?php if (!empty($movie['image'])): ?>
                                <img height="80" src="assets/posters/<?php echo $movie['image'] ?>" alt=""/>
                            <?php endif; ?>
                        </td>
                    </tr>

                    <!--Length-->
                    <tr>
                        <th>Length (Minutes)</th>
                        <td><?php echo number_format($movie['lengthm']) ?></td>
                    </tr>

                    <!--Director-->
                    <tr>
                        <th>Director</th>
                        <td><?php echo $movie['director'] ?></td>
                    </tr>

                    <!--Link 480P-->
                    <tr>
                        <th>Link 480P</th>
                        <td>
                            <a rel="stylesheet" href="<?php echo $movie['link480'] ?>" target="_blank"><?php echo $movie['link480'] ?>
                        </td>
                    </tr>

                    <!--Link 720P-->
                    <tr>
                        <th>Link 720P</th>
                        <td>
                            <a rel="stylesheet" href="<?php echo $movie['link720'] ?>" target="_blank"><?php echo $movie['link720'] ?>
                        </td>
                    </tr>

                    <!--Link 1080P-->
                    <tr>
                        <th>Link 1080P</th>
                        <td>
                            <a rel="stylesheet" href="<?php echo $movie['link1080'] ?>" target="_blank"><?php echo $movie['link1080'] ?>
                        </td>
                    </tr>

                    <!--English Subtitle-->
                    <tr>
                        <th>English Subtitle</th>
                        <td>
                            <?php if (!empty($movie['en_sub'])): ?>
                                <p>Available</p>
                            <?php else:?>
                                <p>Unavailable</p>
                            <?php endif; ?>
                        </td>
                    </tr>

                    <!--Vietnamese Subtitle-->
                    <tr>
                        <th>Vietnamese Subtitle</th>
                        <td>
                            <?php if (!empty($movie['vie_sub'])): ?>
                                <p>Available</p>
                            <?php else:?>
                                <p>Unavailable</p>
                            <?php endif; ?>
                        </td>
                    </tr>

                    <!--Status-->
                    <tr>
                        <th>Status</th>
                        <td><?php echo Helper::getStatusText($movie['status']) ?></td>
                    </tr>

                    <!--Created at-->
                    <tr>
                        <th>Created at</th>
                        <td><?php echo date('d-m-Y H:i:s', strtotime($movie['created_at'])) ?></td>
                    </tr>

                    <!--Updated at-->
                    <tr>
                        <th>Updated at</th>
                        <td><?php echo !empty($movie['updated_at']) ? date('d-m-Y H:i:s', strtotime($movie['updated_at'])) : '--' ?></td>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>