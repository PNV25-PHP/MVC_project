<?php
require_once 'Models/DoctorModel.php';
require_once 'View/HomeView.php';

class HomeController {
    private $doctorModel;
    private $homeView;

    public function __construct($doctorModel, $homeView) {
        $this->doctorModel = $doctorModel;
        $this->homeView = $homeView;
    }

    public function showHomePage() {
        // Lấy danh sách bác sĩ từ model
        $doctors = $this->doctorModel->getAllDoctors();
    
        // Hiển thị trang chủ với slider
        $this->homeView->renderHomePage($doctors);
    }


    
    
}
