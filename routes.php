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
                $controller = new PrivateAreaPrenticeController();
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
            // case 'login':
            //     require_once('models/login.php');
            //     $controller = new LoginController();
            //     break;
            // case 'logout':
            //     $controller = new LogoutController();
            //     break;
            // case 'home':
            //     require_once('models/home.php');
            //     $controller = new HomeController();
            //     break;
            // case 'register':
            //     require_once('models/register.php');
            //     $controller = new RegisterController();
            //     break;
            // case 'privatearea':
            //     require_once('models/privatearea.php');
            //     $controller = new PrivateAreaController();
            //     break;
            // case 'privatearea_sales':
            //     require_once('models/privatearea_sales.php');
            //     $controller = new PrivateAreaSalesController();
            //     break;
        }

        $controller->{ $action }();
    }

    $controllers = array(
        'home_prentice' => array('index', 'error'),
        'register_prentice' => array('index','add','error'),
        'privatearea_prentice' => array('index', 'addsales', 'error'),
        'privatearea_sales_prentice' => array('add', 'error'),
        'login_prentice' => array('index', 'auth', 'error'),
        'logout_prentice' => array('index', 'destroy', 'error')
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