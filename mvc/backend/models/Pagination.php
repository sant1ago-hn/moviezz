<?php
class Pagination
{
    public $params = [
        'total' => 0,
        'limit' => 0,
        'controller' => '',
        'action' => '',
        'full_mode' => FALSE
    ];

    public function __construct($params) {
        $this->params = $params;
    }

    public function getTotalPage() {
        $total = $this->params['total'] / $this->params['limit'];
        $total = ceil($total);
        return $total;
    }

    public function getCurrentPage() {
        $page = 1;
        if (isset($_GET['page']) && is_numeric($_GET['page'])) {
            $page = $_GET['page'];
            $total_page = $this->getTotalPage();
            if ($page >= $total_page) {
                $page = $total_page;
            }
        }
        return $page;
    }

    public function getPrevPage() {
        $prev_page = '';
        $current_page = $this->getCurrentPage();
        if ($current_page >= 2) {
            $controller = $this->params['controller'];
            $action = $this->params['action'];
            $page = $current_page - 1;
            $prev_url =
                "index.php?controller=$controller&action=$action&page=$page";
            $prev_page = "<li class='page-item'><a class='page-link' href='$prev_url' aria-label='Previous'><i class='mdi mdi-chevron-left'></i></a></li>";
        }
        return $prev_page;
    }

    public function getNextPage() {
        $next_page = '';
        $current_page = $this->getCurrentPage();
        $total_page = $this->getTotalPage();
        if ($current_page < $total_page) {
            $controller = $this->params['controller'];
            $action = $this->params['action'];
            $page = $current_page + 1;
            $next_url =
                "index.php?controller=$controller&action=$action&page=$page";
            $next_page = "<li class='page-item'><a class='page-link' href='$next_url' aria-label='Next'><i class='mdi mdi-chevron-right'></i></a></li>";
        }
        return $next_page;
    }

    public function getPagination() {
        $data = '';
        $total_page = $this->getTotalPage();
        if ($total_page == 1) {
            return '';
        }

        $data .= "<ul class='pagination'>";
        $prev_link = $this->getPrevPage();
        $data .= $prev_link;

        $controller = $this->params['controller'];
        $action = $this->params['action'];

        $full_mode = $this->params['full_mode'];
        if ($full_mode == FALSE) {
            for ($page = 1; $page <= $total_page; $page++) {
                $current_page = $this->getCurrentPage();
                if ($page == 1 || $page == $total_page || $page  == $current_page - 1 || $page == $current_page + 1) {
                    $page_url = "index.php?controller=$controller&action=$action&page=$page";
                    $data .= "<li class='page-item'><a class='page-link' href='$page_url'>$page</a></li>";
                }
                else if ($page == $current_page) {
                    $data .= "<li class='page-item active'><a class='page-link' href=''>$page</a></li>";
                }
                else if (in_array($page, [$current_page - 2, $current_page - 3, $current_page + 2, $current_page + 3])){
                    $data .= "<li class='page-item'><a class='page-link' href=''>...</a></li>";
                }
            }
        }
        else {
            for ($page = 1; $page <= $total_page; $page++) {
                $current_page = $this->getCurrentPage();
                if ($current_page == $page) {
                    $data .= "<li class='active'><a href='#'>$page</a></li>";
                } else {
                    $page_url
                        = "index.php?controller=$controller&action=$action&page=$page";
                    $data .= "<li class='page-item'><a class='page-link' href='$page_url'>$page</a></li>";
                }
            }
        }
        $next_link = $this->getNextPage();
        $data .= $next_link;
        $data .= "</ul>";
        return $data;
    }
}
