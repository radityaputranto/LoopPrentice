<?php
class RegisterPrenticeController {
    public function index() {
        $institutions = Home::get_institution();
        $faculties = Home::get_faculty();
        $cities = Home::get_city();
        require_once('views/register_prentice/index.php');
    }

    public function error() {
        require_once('views/register_prentice/error.php');
    }

    public function add() {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nim = $_POST['nim'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $fullname = $_POST['fullname'];
            $birthdayplace = $_POST['birthdayplace'];
            $birthdaydate = $_POST['birthdaydate'];
            $email = $_POST['email'];
            $contactphone = $_POST['contactphone'];
            $institutionname = $_POST['institutionname'];
            $faculty = $_POST['faculty'];
            $major = $_POST['major'];
            $semester = $_POST['semester'];
            $sks = $_POST['sks'];
            $instagramlink = $_POST['instagramlink'];
            $facebooklink = $_POST['facebooklink'];
            $pathlink = $_POST['pathlink'];
            $twitterlink = $_POST['twitterlink'];
            $motivation = $_POST['motivation'];
            $organizationexp = $_POST['organizationexp'];
            $hobby = $_POST['hobby'];
            $selfcharacter = $_POST['selfcharacter'];
            $dominantcity = $_POST['dominantcity'];
            $apprenticecity = $_POST['apprenticecity'];

            $filename = $_FILES['profilephoto']['name'];
            $source = $_FILES['profilephoto']['tmp_name'];
            $path_parts = pathinfo($_FILES['profilephoto']['name']);
            // $extension = $path_parts['extension'];
            $exp = (explode(".", $filename));
            $ext = end($exp);

            $profilephoto = "libs/upload/profile/".$nim."_profile.".$ext;

            $result = Register::add($nim, $username, $password, $fullname, $birthdayplace, $birthdaydate, $email, $contactphone, $institutionname, $faculty, $major, $semester, $sks, $instagramlink, $facebooklink, $pathlink, $twitterlink, $motivation, $organizationexp, $hobby, $selfcharacter, $dominantcity, $apprenticecity, $profilephoto);

            if (!is_file($profilephoto)) {
                move_uploaded_file($source, $profilephoto);
            }

            header('Content-Type: application/json');
            $json_register = json_encode($result);
            $_SESSION['message_register'] = $json_register;
            header("Location: ?page=home_prentice&action=index");
        } else {
            header("Location: ?page=home_prentice&action=index");
        }
    }
}
?>