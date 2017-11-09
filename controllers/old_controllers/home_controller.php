<?php
    class HomeController {
        public function index() {
            $institutions = Home::get_institution();
            $faculties = Home::get_faculty();
            $cities = Home::get_city();
            $apprentice_balinusra = Home::get_apprentice('bali nusra');
            $apprentice_jatengdiy = Home::get_apprentice('jateng-diy');
            $apprentice_jatim = Home::get_apprentice('jatim');
            $total_apprentice_balinusra = Home::get_total_apprentice('bali nusra');
            $total_apprentice_jatengdiy = Home::get_total_apprentice('jateng-diy');
            $total_apprentice_jatim = Home::get_total_apprentice('jatim');
            require_once('views/home/index.php');
        }

        public function error() {
            require_once('views/home/error.php');
        }
    }
?>