<?php
use Phroute\Phroute\RouteCollector;
use App\Controllers\CourseController;
use App\Controllers\UserController;
use App\Controllers\AdminController;

$url = isset($_GET['url']) ? $_GET['url'] : '/';
$router = new RouteCollector();

/*request method: 
- get: kéo dữ liệu từ sv về
- post: đẩy dữ liệu lên sv (thêm mới/update)
- delete: xoá dữ liệu
- any: request nào cũng dùng được 

$route: '/', '/products'
$handler: hàm xử lý 
*/


$router->get('/login', function () {
    echo "Đây là trang đăng nhập";
});


$router->filter('auth', function () {
    if (!isset($_SESSION['user'])) {
        header('location: ' . BASE_URL . 'login');

        return false;
    }
});

// GIAO DIỆN NGƯỜI DÙNG ////////////////////////////////////////////////
$router->get('/', [UserController::class, 'homeUser']);
$router->get('ptWebsite', [UserController::class, 'web_development']);
$router->get('giaKH', [UserController::class, 'pricing']);
$router->get('nghienCuu', [UserController::class, 'user_research']);

// GIAO DIỆN ADMIN /////////////////////////////////////////////////////
//filter group
//prefix
$router->group(['prefix' => 'admin/'], function ($router) {

    $router->get('/', [AdminController::class, 'homeAdmin']);

    // $router->group(['prefix' => '/courses'], function ($router) {
    //     $router->get('/create', [CourseController::class, 'create']); //chuyển sang form thêm mới khoá học
    //     $router->post('/post', [CourseController::class, 'post']); //đẩy dữ liệu lưu vào trong db

    //     $router->get('/{id}/edit', [CourseController::class, 'edit']);
    //     $router->post('/{id}/update', [CourseController::class, 'update']);
    // });

    // $router->get('/users', [CourseController::class, 'listCourse']);

    // $router->get('/comments', [CourseController::class, 'listCourse']);
});


$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

?>