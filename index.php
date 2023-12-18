<?php
class HomeView {
    public function renderHomePage($doctors) {
        include 'View/HomeView.php';
    }
}
?>


<?php
require_once 'Controller/HomeController.php';

// Kết nối cơ sở dữ liệu (thay thế thông tin kết nối của bạn ở đây)
$db = new PDO("mysql:host=localhost;dbname=MVC_Project", "root", "Tluantt34@");



// Tạo đối tượng model và view
$doctorModel = new DoctorModel($db);
$homeView = new HomeView();

// Tạo đối tượng controller
$homeController = new HomeController($doctorModel, $homeView);

// Hiển thị trang chủ
$homeController->showHomePage();
