<?php
    class Register {
        public static function add($nim, $username, $password, $fullname, $birthdayplace, $birthdaydate, $email, $contactphone, $institutionname, $faculty, $major, $semester, $sks, $instagramlink, $facebooklink, $pathlink, $twitterlink, $motivation, $organizationexp, $hobby, $selfcharacter, $dominantcity, $apprenticecity, $profilephoto) {
            
           $db = Db::getInstance();
           $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           try {
               $query = $db->prepare("CALL sp_tap_user_insertdata (:nim, :username, :password, :fullname, :birthdayplace, :birthdaydate, :email, :contactphone, :institutionname, :faculty, :major, :semester, :sks, :instagramlink, :facebooklink, :pathlink, :twitterlink, :motivation, :organizationexp, :hobby, :selfcharacter, :dominantcity, :apprenticecity, :profilephoto)");

               $query->BindParam(':nim', $nim);
               $query->BindParam(':username', $username);
               $query->BindParam(':password', $password);
               $query->BindParam(':fullname', $fullname);
               $query->BindParam(':birthdayplace', $birthdayplace);
               $query->BindParam(':birthdaydate', $birthdaydate);
               $query->BindParam(':email', $email);
               $query->BindParam(':contactphone', $contactphone);
               $query->BindParam(':institutionname', $institutionname);
               $query->BindParam(':faculty', $faculty);
               $query->BindParam(':major', $major);
               $query->BindParam(':semester', $semester);
               $query->BindParam(':sks', $sks);
               $query->BindParam(':instagramlink', $instagramlink);
               $query->BindParam(':facebooklink', $facebooklink);
               $query->BindParam(':pathlink', $pathlink);
               $query->BindParam(':twitterlink', $twitterlink);
               $query->BindParam(':motivation', $motivation);
               $query->BindParam(':organizationexp', $organizationexp);
               $query->BindParam(':hobby', $hobby);
               $query->BindParam(':selfcharacter', $selfcharacter);
               $query->BindParam(':dominantcity', $dominantcity);
               $query->BindParam(':apprenticecity', $apprenticecity);
               $query->BindParam(':profilephoto', $profilephoto);

               $query->execute();

               $response = array("error" => "false",
                                  "message" => "Hi, Loopers. Selamat bergabung di Telkomsel Apprentice.");
           } catch(PDOEXception $e) {
               $response = array("error" => "true",
                                  "message" => "Hi, Loopers. Kamu sebelumnya sudah terdaftar di Telkomsel Apprentice.");
           }

           return $response;
        }
    }
?>