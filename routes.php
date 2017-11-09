<?php
    function call($controller, $action) {
        require_once('controllers/' . $controller . '_controller.php');

        switch($controller) {
            case 'home_prentice':
                require_once('models/home.php');
                $controller = new HomePrenticeController();
                break;
            case 'register_prentice':
                require_once('models/register.php');
                require_once('models/home.php');
                $controller = new RegisterPrenticeController();
                break;
            case 'privatearea_prentice':
                require_once('models/privatearea.php');
                require_once('models/BlogModel.php');
                $controller = new PrivateAreaPrenticeController();
                break;
            case 'privatearea_posting':
                require_once('models/privatearea.php');
                require_once('models/BlogModel.php');
                $controller = new PrivateAreaPostingController();
                break;
            case 'login_prentice':
                require_once('models/login.php');
                $controller = new LoginPrenticeController();
                break;
            case 'logout_prentice':
                $controller = new LogoutController();
                break;
            case 'privatearea_sales_prentice':
                require_once('models/privatearea_sales.php');
                $controller = new PrivateAreaSalesPrenticeController();
                break;
            case 'blog_prentice':
                //require_once('models/blog.php');
                $controller = new blog_PrenticeController();
                break;
            case 'blog_single_prentice':
                //require_once('models/blogSingle.php');
                $controller = new blog_single_PrenticeController();
                break;

            //tambahan ardi
            case 'posting':
                $controller = new PostingController();
                break;
        }

        $controller->{ $action }();
    }

    $controllers = array(
        'home_prentice' => array('index', 'error'),
        'blog_prentice' => array('index','add','error'),
        'blog_single_prentice' => array('index','add','error'),
        'register_prentice' => array('index','add','error'),
        'privatearea_prentice' => array('index', 'addsales', 'error'),
        'privatearea_posting' => array('index', 'addsales', 'error','addpost','deletepost','viewpost','editpost'),
        'privatearea_sales_prentice' => array('add', 'error'),
        'login_prentice' => array('index', 'auth', 'error'),
        'logout_prentice' => array('index', 'destroy', 'error'),
        // 'home' => array('index', 'error'),
        // 'register' => array('index', 'add', 'error'),
        // 'privatearea' => array('index', 'addsales', 'error'),
        // 'login' => array('index', 'auth', 'error'),
        // 'logout' => array('index', 'destroy', 'error'),
        // 'privatearea_sales' => array('add', 'error')
    );

    if (array_key_exists($controller, $controllers)) {
        if (in_array($action, $controllers[$controller])) {
            call($controller, $action);
        } else {
            call('home_prentice', 'error');
        }
    } else {
        call('home_prentice', 'error');
    }
?>