<?php
require_once 'helpers/Helper.php';
?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="float-right ml-2">
                            <a href="#">View all</a>
                    </div>
                    <h5 class="header-title mb-4">Movies List</h5>
                    <div class="float-left ml-2">
                        <button class="btn btn-primary">
                            <a href="index.php?controller=movie&action=create" style="color: white">Add new</a>
                        </button>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-centered table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-info">#</th>
                                        <th scope="col" class="text-info">Title</th>
                                        <th scope="col" class="text-info">Category</th>
                                        <th scope="col" class="text-info">Type</th>
                                        <th scope="col" class="text-info">Image</th>
                                        <th scope="col" class="text-info">Length (Minutes)</th>
                                        <th scope="col" class="text-info">Director</th>
                                        <th scope="col" class="text-info">Status</th>
                                        <th scope="col" class="text-info">Created At</th>
                                        <th scope="col" class="text-info">Updated At</th>
                                        <th scope="col" class="text-info">Action</th>
                                    </tr>
                                </thead>
                                <?php if (!empty($movies)): ?>
                                    <?php foreach ($movies as $movie): ?>
                                        <tbody>
                                            <tr>
                                                <td class="badge badge-info"><?php echo $movie['id'] ?></td>
                                                <td class="text-danger"><?php echo $movie['title'] ?></td>
                                                <td><?php echo $movie['category_name'] ?></td>
                                                <td>
                                                    <?php
                                                        $type = '';
                                                        if ($movie['movie_type'] == 0) {
                                                            $type = 'Movies';
                                                        } elseif ($movie['movie_type'] == 1) {
                                                            $type = 'TV Series';
                                                        }
                                                        echo $type
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php if (!empty($movie['image'])): ?>
                                                        <img height="80" src="assets/posters/<?php echo $movie['image'] ?>" alt=""/>
                                                    <?php endif; ?>
                                                </td>
                                                <td><?php echo number_format($movie['lengthm']) ?></td>
                                                <td><?php echo $movie['director'] ?></td>
                                                <td>
                                                    <?php
                                                    $status_text = 'Active';
                                                    if ($movie['status'] == 0) {
                                                        $status_text = 'Disabled';
                                                    }
                                                    ?>
                                                    <?php if ($movie['status'] == 1): ?>
                                                        <div class="badge badge-soft-primary">
                                                            <?php echo $status_text; ?>
                                                        </div>
                                                    <?php elseif ($movie['status'] == 0): ?>
                                                        <div class="badge badge-soft-danger">
                                                            <?php echo $status_text; ?>
                                                        </div>
                                                    <?php endif; ?>
                                                </td>
                                                <td><?php echo date('d-m-Y H:i:s', strtotime($movie['created_at'])) ?></td>
                                                <td><?php echo !empty($movie['updated_at']) ? date('d-m-Y H:i:s', strtotime($movie['updated_at'])) : '--' ?></td>
                                                <td>
                                                    <div class="btn-group" role="group">
                                                        <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="View">
                                                            <a href="index.php?controller=movie&action=detail&id=<?php echo $movie['id'] ?>">
                                                                <i class="mdi mdi-eye"></i>
                                                            </a>
                                                        </button>
                                                        <button type="button" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <a href="index.php?controller=movie&action=update&id=<?php echo $movie['id'] ?>">
                                                                <i class="mdi mdi-pencil"></i>
                                                            </a>
                                                        </button>
                                                        <button type="button" onclick="return confirm('Confirm Deletion?')" class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <a href="index.php?controller=movie&action=delete&id=<?php echo $movie['id'] ?>" onclick="return confirm('Confirm Deletion?')">
                                                                <i class="mdi mdi-trash-can"></i>
                                                            </a>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    <?php endforeach ?>
                                        <tr>
                                            <td colspan="12">
                                                <div class="mt-4">
                                                    <ul class="pagination pagination-rounded justify-content-center mb-0">
                                                        <li><?php echo $pages; ?></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- pagination-->
                                <?php else: ?>
                                        <tbody>
                                        <tr>
                                            <td colspan="12">No data found</td>
                                        </tr>
                                    </tbody>
                                <?php endif; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--movies list-->

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="" method="GET" class="dropdown d-inline-block">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" value="<?php echo isset($_GET['title']) ? $_GET['title'] : '' ?>" id="title" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label for="idcategory">Choose category</label>
                            <select name="idcategory" class="form-control" required>
                                <?php if (!empty($categories)): ?>
                                    <?php foreach ($categories as $category):
                                        $selected = '';
                                        if (isset($_GET['idcategory']) && $category['id'] == $_GET['idcategory']) {
                                            $selected = 'selected';
                                        }
                                        ?>
                                        <option value="<?php echo $category['id'] ?>" <?php echo $selected; ?>>
                                            <?php echo $category['name'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                <?php endif;?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="controller" value="movie"/>
                            <input type="hidden" name="action" value="index"/>
                            <input type="submit" name="search" value="Search" class="btn btn-primary"/>
                            <a href="index.php?controller=movie" class="btn btn-default">Delete filter</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--form search-->
    </div>