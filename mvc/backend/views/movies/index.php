<?php
require_once 'helpers/Helper.php';
?>
    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                    <div class="card-body">
                        <form action="" method="GET" class="dropdown d-inline-block">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" value="<?php echo isset($_GET['title']) ? $_GET['title'] : '' ?>" id="title" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="title">Choose category</label>
                                <select name="category_id" class="form-control" required>
                                    <?php foreach ($categories as $category):
                                        $selected = '';
                                        if (isset($_GET['category_id']) && $category['id'] == $_GET['category_id']) {
                                            $selected = 'selected';
                                        }
                                    ?>
                                        <option value="<?php echo $category['id'] ?>" <?php echo $selected; ?>>
                                            <?php echo $category['name'] ?>
                                        </option>
                                    <?php endforeach; ?>
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

        <div class="col-lg-9">
            <div class="card">
                <div class="card-body">
                    <div class="float-right ml-2">
                            <a href="#">View all</a>
                        </div>
                    <h5 class="header-title mb-4">Movies List</h5>
                    <div class="float-left ml-2">
                            <a href="index.php?controller=movie&action=create">Add new</a>
                        </div>
                    <div class="table-responsive">
                        <table class="table table-centered table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Avatar</th>
                                        <th scope="col">Length (Minutes)</th>
                                        <th scope="col">Director</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col">Updated At</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <?php if (!empty($movies)): ?>
                                    <?php foreach ($movies as $movie): ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $movie['id'] ?></td>
                                                <td><?php echo $movie['category_name'] ?></td>
                                                <td><?php echo $movie['movie_type'] ?></td>
                                                <td><?php echo $movie['title'] ?></td>
                                                <td><?php echo number_format($movie['length']) ?></td>
                                                <td><?php echo $movie['director'] ?></td>
                                                <td><?php echo Helper::getStatusText($movie['status']) ?></td>
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
                                            <td colspan="10">
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
                                            <td colspan="10">No data found</td>
                                        </tr>
                                    </tbody>
                                <?php endif; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--movies list-->
    </div>