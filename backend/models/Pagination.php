<?php
class Pagination {
    public array $params = [
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

    public function getPrevPage(): string {
        $prev_page = '';
        $current_page = $this->getCurrentPage();
        if ($current_page >= 2) {
            $controller = $this->params['controller'];
            $action = $this->params['action'];
            $page_before = $current_page - 1;
            if ($controller == 'movie' && $action == 'index') {
                $prev_url = "all-movie-$page_before";
                $prev_page = "<li>
                              <a href='$prev_url'>
                                  <svg width='14' height='11' viewBox='0 0 14 11' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                      <path d='M0.75 5.36475L13.1992 5.36475' stroke-width='1.2' stroke-linecap='round' stroke-linejoin='round'></path>
                                      <path d='M5.771 10.1271L0.749878 5.36496L5.771 0.602051' stroke-width='1.2' stroke-linecap='round' stroke-linejoin='round'></path>
                                  </svg>
                              </a>
                              </li>";
            } elseif ($controller == 'category' && $action == 'index') {
                $prev_url = "all-category-$page_before";
                $prev_page = "<li>
                              <a href='$prev_url'>
                                  <svg width='14' height='11' viewBox='0 0 14 11' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                      <path d='M0.75 5.36475L13.1992 5.36475' stroke-width='1.2' stroke-linecap='round' stroke-linejoin='round'></path>
                                      <path d='M5.771 10.1271L0.749878 5.36496L5.771 0.602051' stroke-width='1.2' stroke-linecap='round' stroke-linejoin='round'></path>
                                  </svg>
                              </a>
                              </li>";
            } elseif ($controller == 'user' && $action == 'index') {
                $prev_url = "all-user-$page_before";
                $prev_page = "<li>
                              <a href='$prev_url'>
                                  <svg width='14' height='11' viewBox='0 0 14 11' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                      <path d='M0.75 5.36475L13.1992 5.36475' stroke-width='1.2' stroke-linecap='round' stroke-linejoin='round'></path>
                                      <path d='M5.771 10.1271L0.749878 5.36496L5.771 0.602051' stroke-width='1.2' stroke-linecap='round' stroke-linejoin='round'></path>
                                  </svg>
                              </a>
                              </li>";
            }
        }
        return $prev_page;
    }

    public function getNextPage(): string {
        $next_page = '';
        $current_page = $this->getCurrentPage();
        $total_page = $this->getTotalPage();
        if ($current_page < $total_page) {
            $controller = $this->params['controller'];
            $action = $this->params['action'];
            $page_after = $current_page + 1;
            if ($controller == 'movie' && $action == 'index') {
                $next_url = "all-movie-$page_after";
                $next_page = "<li>
                              <a href='$next_url'>
                                  <svg width='14' height='11' viewBox='0 0 14 11' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                      <path d='M13.1992 5.3645L0.75 5.3645' stroke-width='1.2' stroke-linecap='round' stroke-linejoin='round'></path><path d='M8.17822 0.602051L13.1993 5.36417L8.17822 10.1271' stroke-width='1.2' stroke-linecap='round' stroke-linejoin='round'></path>
                                  </svg>
                              </a>
                              </li>";
            } elseif ($controller == 'category' && $action == 'index') {
                $next_url = "all-category-$page_after";
                $next_page = "<li>
                              <a href='$next_url'>
                                  <svg width='14' height='11' viewBox='0 0 14 11' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                      <path d='M13.1992 5.3645L0.75 5.3645' stroke-width='1.2' stroke-linecap='round' stroke-linejoin='round'></path><path d='M8.17822 0.602051L13.1993 5.36417L8.17822 10.1271' stroke-width='1.2' stroke-linecap='round' stroke-linejoin='round'></path>
                                  </svg>
                              </a>
                              </li>";
            } elseif ($controller == 'user' && $action == 'index') {
                $next_url = "all-user-$page_after";
                $next_page = "<li>
                              <a href='$next_url'>
                                  <svg width='14' height='11' viewBox='0 0 14 11' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                      <path d='M13.1992 5.3645L0.75 5.3645' stroke-width='1.2' stroke-linecap='round' stroke-linejoin='round'></path><path d='M8.17822 0.602051L13.1993 5.36417L8.17822 10.1271' stroke-width='1.2' stroke-linecap='round' stroke-linejoin='round'></path>
                                  </svg>
                              </a>
                              </li>";
            }

        }
        return $next_page;
    }

    public function getPagination(): string {
        $data = '';
        $total_page = $this->getTotalPage();
        if ($total_page == 1) {
            return '';
        }

        $data .= "<ul class='paginator__paginator'>";
        $prev_link = $this->getPrevPage();
        $data .= $prev_link;

        $controller = $this->params['controller'];
        $action = $this->params['action'];

        $full_mode = $this->params['full_mode'];
        if ($controller == 'movie' && $action == 'index') {
            if ($full_mode == FALSE) {
                for ($page = 1; $page <= $total_page; $page++) {
                    $current_page = $this->getCurrentPage();
                    if ($page == 1 || $page == $total_page || $page  == $current_page - 1 || $page == $current_page + 1) {
                        $page_url = "all-movie-$page";
                        if ($page == $current_page) {
                            $data .= "<li class='active'><a href='#'>$page</a></li>";
                        } else {
                            $data .= "<li><a href='$page_url'>$page</a></li>";
                        }
                    } else if (in_array($page, [$current_page - 2, $current_page - 3, $current_page + 2, $current_page + 3])){
                        if ($page == $current_page) {
                            $data .= "<li class='active'><a href='#'>$page</a></li>";
                        } else {
                            $data .= "<li><a href=''>...</a></li>";
                        }
                    }
                }
            } else {
                for ($page = 1; $page <= $total_page; $page++) {
                    $current_page = $this->getCurrentPage();
                    if ($current_page == $page) {
                        $data .= "<li class='active'><a href='#'>$page</a></li>";
                    } else {
                        $page_url = "all-movie-$page";
                        $data .= "<li><a href='$page_url'>$page</a></li>";
                    }
                }
            }
        } elseif ($controller == 'category' && $action == 'index') {
            if ($full_mode == FALSE) {
                for ($page = 1; $page <= $total_page; $page++) {
                    $current_page = $this->getCurrentPage();
                    if ($page == 1 || $page == $total_page || $page  == $current_page - 1 || $page == $current_page + 1) {
                        $page_url = "all-category-$page";
                        if ($page == $current_page) {
                            $data .= "<li class='active'><a href='#'>$page</a></li>";
                        } else {
                            $data .= "<li><a href='$page_url'>$page</a></li>";
                        }
                    } else if (in_array($page, [$current_page - 2, $current_page - 3, $current_page + 2, $current_page + 3])){
                        if ($page == $current_page) {
                            $data .= "<li class='active'><a href='#'>$page</a></li>";
                        } else {
                            $data .= "<li><a href=''>...</a></li>";
                        }
                    }
                }
            } else {
                for ($page = 1; $page <= $total_page; $page++) {
                    $current_page = $this->getCurrentPage();
                    if ($current_page == $page) {
                        $data .= "<li class='active'><a href='#'>$page</a></li>";
                    } else {
                        $page_url = "all-category-$page";
                        $data .= "<li><a href='$page_url'>$page</a></li>";
                    }
                }
            }
        } elseif ($controller == 'user' && $action == 'index') {
            if ($full_mode == FALSE) {
                for ($page = 1; $page <= $total_page; $page++) {
                    $current_page = $this->getCurrentPage();
                    if ($page == 1 || $page == $total_page || $page  == $current_page - 1 || $page == $current_page + 1) {
                        $page_url = "all-user-$page";
                        if ($page == $current_page) {
                            $data .= "<li class='active'><a href='#'>$page</a></li>";
                        } else {
                            $data .= "<li><a href='$page_url'>$page</a></li>";
                        }
                    } else if (in_array($page, [$current_page - 2, $current_page - 3, $current_page + 2, $current_page + 3])){
                        if ($page == $current_page) {
                            $data .= "<li class='active'><a href='#'>$page</a></li>";
                        } else {
                            $data .= "<li><a href=''>...</a></li>";
                        }
                    }
                }
            } else {
                for ($page = 1; $page <= $total_page; $page++) {
                    $current_page = $this->getCurrentPage();
                    if ($current_page == $page) {
                        $data .= "<li class='active'><a href='#'>$page</a></li>";
                    } else {
                        $page_url = "all-user-$page";
                        $data .= "<li><a href='$page_url'>$page</a></li>";
                    }
                }
            }
        }
        $next_link = $this->getNextPage();
        $data .= $next_link;
        $data .= "</ul>";
        return $data;
    }
}
