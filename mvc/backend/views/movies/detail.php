<?php
require_once 'helpers/Helper.php';
?>

<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <div class="float-right ml-2">
                <a class="btn btn-primary" href="index.php?controller=movie">Back</a>
            </div>
            <h5 class="header-title mb-4">Categories Detail</h5>
            <div class="table-responsive">
                <table class="table table-centered table-hover mb-0">
                    <thead>
                    <tr>
                        <th scope="row">#</th>
                        <td><?php echo $movies['id']?></td>
                    </tr>
                    <tr>
                        <th scope="row">Category name</th>
                        <td><?php echo $movie['category_name']?></td>
                    </tr>
                    <tr>
                        <th scope="row">Title</th>
                        <td><?php echo $movie['title'] ?></td>
                    </tr>
                    <tr>
                        <th>Avatar</th>
                        <td>
                            <?php if (!empty($movie['avatar'])): ?>
                                <img height="80" src="assets/uploads/<?php echo $movie['avatar'] ?>"/>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td><?php echo number_format($movie['price']) ?></td>
                    </tr>
                    <tr>
                        <th>SEO Title</th>
                        <td><?php echo $movie['seo_title'] ?></td>
                    </tr>
                    <tr>
                        <th>SEO description</th>
                        <td><?php echo $movie['seo_description'] ?></td>
                    </tr>
                    <tr>
                        <th>SEO keywords</th>
                        <td><?php echo $movie['seo_keywords'] ?></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td><?php echo Helper::getStatusText($movie['status']) ?></td>
                    </tr>
                    <tr>
                        <th>Created at</th>
                        <td><?php echo date('d-m-Y H:i:s', strtotime($movie['created_at'])) ?></td>
                    </tr>
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