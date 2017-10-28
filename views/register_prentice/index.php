<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Loopprentice</title>
    <link rel="shortcut icon" href="libs/home_register/img/logoloop.png" type="libs/home_register/image/x-icon">


    <!--    dari template-->
    <link href="libs/registerv2/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="libs/registerv2/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="libs/registerv2/register.css">
    <script src="libs/registerv2/jquery.min.js"></script>
<!--    <script src="libs/registerv2/register.js"></script>-->

    <!--    dari old-->
    <link href="libs/css/modern-business.css" rel="stylesheet">
    <link href="libs/css/typeahead.css" rel="stylesheet">
    <link href="libs/css/slick.css" rel="stylesheet">
    <link href="libs/css/slick-theme.css" rel="stylesheet">
    <link href="libs/vendor/bootstrap/css/bootstrap-validator/bootstrapValidator.min.css" rel="stylesheet">
    <link href="libs/vendor/bootstrap/css/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
    <link href="libs/vendor/bootstrap/css/animate-css/animate.min.css" rel="stylesheet">
    <script src="libs/vendor/jquery/jquery.min.js"></script>
    <script src="libs/js/bloodhound.js"></script>
    <script src="libs/js/typeahead.bundle.min.js"></script>
    <script src="libs/js/typeahead.jquery.js"></script>

    <script src="libs/js/slick.js"></script>
    <script src="libs/vendor/popper/popper.min.js"></script>
    <script src="libs/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="libs/vendor/bootstrap/js/bootstrap-validator/bootstrapValidator.min.js"></script>
    <script src="libs/vendor/bootstrap/js/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="libs/vendor/bootstrap/js/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="libs/vendor/bootstrap/js/bootbox/bootbox.min.js"></script>




</head>
<body style="background-attachment: fixed;background-image: url(libs/img/bg_register.png);background-repeat: no-repeat;background-size: cover;">
<?php
$institution_list = array();
$faculty_list = array();
$city_list = array();

foreach($institutions as $data) {
    $institution_list[] = $data->institution_name;
}

foreach($faculties as $data) {
    $faculty_list[] = $data->main;
    echo $faculty_list[1];
}

foreach($cities as $data) {
    $city_list[] = $data->city;
}

$message_register = '{}';
$message_login = '{}';

if(isset($_SESSION['message_register'])) {
    $message_register = $_SESSION['message_register'];
    unset($_SESSION['message_register']);
}

if(isset($_SESSION['message_login'])) {
    $message_login = $_SESSION['message_login'];
    unset($_SESSION['message_login']);
}
?>


<div class="banner-img">
    <div class="container">
        <div class="row justify-content-center" >
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><h5
                        ><strong>Home</strong></h5> </a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href=""><h5
                      ><strong>login</strong></h5> </a>
                </li> -->
            </ul>

        </div>

        <div class="row justify-content-center">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
                <form id="bv-register" role="form" action="?page=register_prentice&action=add" method="post" class="f1" enctype="multipart/form-data">

                    <p>Registrasi User</p>
                    <h3><strong>loop apprentice</strong></h3>

<!--                    <div class="f1-steps">-->
<!--                        <div class="f1-progress">-->
<!--                            <div class="f1-progress-line" data-now-value="12.5" data-number-of-steps="4" style="width: 12.5%;"></div>-->
<!--                        </div>-->
<!--                        <div class="f1-step active">-->
<!--                            <div class="f1-step-icon"><i class="fa fa-user"></i></div>-->
<!--                            <p>Data Diri</p>-->
<!--                        </div>-->
<!--                        <div class="f1-step">-->
<!--                            <div class="f1-step-icon"><i class="fa fa-key"></i></div>-->
<!--                            <p>account</p>-->
<!--                        </div>-->
<!--                        <div class="f1-step">-->
<!--                            <div class="f1-step-icon"><i class="fa fa-question"></i></div>-->
<!--                            <p>Detail Diri</p>-->
<!--                        </div>-->
<!--                        <div class="f1-step">-->
<!--                            <div class="f1-step-icon"><i class="fa fa-twitter"></i></div>-->
<!--                            <p>social</p>-->
<!--                        </div>-->
<!--                    </div>-->

                    <!-- form data diri -->
<!--                    <fieldset>-->

                    <div class="f1-step-icon" style="background: #CF3124"><i class="fa fa-user"></i></div>
                    <h4>Data Diri</h4>
                        <div class="form-group">
                            <label class="sr-only" for="f1-first-name">Nama Lengkap</label>
                            <input type="text" name="fullname" placeholder="Nama Lengkap" class="f1-first-name form-control" id="fullname">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="f1-last-name">Tanggal lahir</label>
                            <input type="text" name="birthdaydate" placeholder="Tanggal Lahir (yyyy-mm-dd)" class="f1-last-name form-control" id="birthdaydate">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="f1-last-name">Tempat lahir</label>
                            <input type="text" name="birthdayplace" placeholder="Tempat lahir" class="f1-last-name form-control" id="birthdayplace">
                        </div>
                        <div class="form-group" id="bloodhound-city">
                            <label class="sr-only" for="f1-about-yourself">Domisili</label>
                            <input type="text" name="dominantcity" placeholder="kota Domisili" class="f1-last-name form-control typeahead" id="dominantcity">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="f1-about-yourself">No Handphone</label>
                            <input type="text" name="contactphone" placeholder="Nomor HP: 62xxxxxxxxxx" class="f1-last-name form-control" id="contactphone">
                        </div>
                        <div class="form-group" id="bloodhound-city">
                            <label class="sr-only" for="f1-about-yourself">Lokasi magang</label>
                            <input type="text" name="apprenticecity" placeholder="Lokasi magang" class="f1-last-name form-control typeahead" id="apprenticecity">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="f1-about-yourself">Foto</label>
                            <input type="file" accept=".png, .jpg, .jpeg" name="profilephoto" placeholder="Foto" class="f1-last-name form-control" id="profilephoto">
                        </div>


                    <div class="f1-step-icon" style="background: #CF3124"><i class="fa fa-book"></i></div>
                    <h4>Pendidikan</h4>
                        <div class="form-group">
                            <label class="sr-only" for="f1-about-yourself">Nim</label>
                            <input type="text" name="nim" placeholder="Nim" class="f1-last-name form-control" id="nim">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="f1-about-yourself">Sks</label>
                            <input type="text" name="sks" placeholder="Sks" class="f1-last-name form-control" id="sks">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="f1-about-yourself">Semester</label>
                            <input type="text" name="semester" placeholder="Semester" class="f1-last-name form-control" id="semester">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="f1-about-yourself">Jurusan</label>
                            <input type="text" name="major" placeholder="Jurusan" class="f1-last-name form-control" id="major">
                        </div>
                        <div class="form-group" id="bloodhound-faculty">
                            <label class="sr-only" for="f1-about-yourself">Fakultas</label>
                            <input type="text" name="faculty" placeholder="Fakultas" class="f1-last-name form-control typeahead" id="faculty">
                        </div>
                        <div class="form-group" id="bloodhound-institution">
                            <label class="sr-only" for="f1-about-yourself">Sekolah/Kampus</label>
                            <input type="text" name="institutionname" placeholder="Sekolah/Kampus" class="f1-last-name form-control typeahead" id="institutionname">
                        </div>
<!--                        <div class="f1-buttons">-->
<!--                            <button type="button" class="btn btn-next">Next</button>-->
<!--                        </div>-->
<!--                    </fieldset>-->
<!--                    <fieldset>-->

                    <div class="f1-step-icon" style="background: #CF3124"><i class="fa fa-key"></i></div>
                        <h4>Akun</h4>
                        <div class="form-group">
                            <label class="sr-only" for="f1-email">Email</label>
                            <input type="email" name="email" placeholder="Email" class="f1-email form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="f1-first-name">User Name</label>
                            <input type="text" name="username" placeholder="User Name" class="f1-first-name form-control" id="username">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="f1-password">Password</label>
                            <input type="password" name="password" placeholder="Password" class="f1-password form-control" id="password">
                        </div>
<!--                        <div class="f1-buttons">-->
<!--                            <button type="button" class="btn btn-previous">Previous</button>-->
<!--                            <button type="button" class="btn btn-next">Next</button>-->
<!--                        </div>-->
<!--                    </fieldset>-->
<!--                    <fieldset>-->

                    <div class="f1-step-icon" style="background: #CF3124"><i class="fa fa-question"></i></div>
                    <h4>Detail diri</h4>
                        <div class="form-group">
                            <label class="sr-only" for="f1-about-yourself">Hobi</label>
                            <textarea name="hobby" placeholder="Hobi"
                                      class="f1-about-yourself form-control" id="hobby"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="sr-only" for="f1-about-yourself">Pengalaman Organisasi</label>
                            <textarea name="organizationexp" placeholder="Pengalaman Organisasi"
                                      class="f1-about-yourself form-control" id="organizationexp"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="sr-only" for="f1-about-yourself">Deskripsi Motivasi</label>
                            <textarea name="motivation" placeholder="Deskripsi Motivasi"
                                      class="f1-about-yourself form-control" id="motivation"></textarea>
                        </div>

                        <div class="form-group">
                            <label class="sr-only" for="f1-about-yourself">5 karakter diri</label>
                            <textarea name="selfcharacter" placeholder="5 karakter diri"
                                      class="f1-about-yourself form-control" id="selfcharacter"></textarea>
                        </div>


<!--                        <div class="f1-buttons">-->
<!--                            <button type="button" class="btn btn-previous">Previous</button>-->
<!--                            <button type="button" class="btn btn-next">Next</button>-->
<!--                        </div>-->
<!--                    </fieldset>-->
<!--                    <fieldset>-->

                    <div class="f1-step-icon" style="background: #CF3124"><i class="fa fa-twitter"></i></div>
                        <h4>Sosial media</h4>
                        <div class="form-group">
                            <label class="sr-only" for="f1-facebook">Facebook</label>
                            <input type="text" name="facebooklink" placeholder="Facebook" class="f1-facebook form-control" id="facebooklink">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="f1-twitter">Twitter</label>
                            <input type="text" name="twitterlink" placeholder="Twitter" class="f1-twitter form-control" id="twitterlink">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="f1-path">Path</label>
                            <input type="text" name="pathlink" placeholder="Path" class="f1-twitter form-control" id="pathlink">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="f1-google-plus">Instagram</label>
                            <input type="text" name="instagramlink" placeholder="Instagram" class="f1-google-plus form-control" id="instagramlink">
                        </div>
                        <div class="f1-buttons">
<!--                            <button type="button" class="btn btn-previous">Previous</button>-->
                            <button type="submit" class="btn btn-submit">Submit</button>
                        </div>
<!--                    </fieldset>-->

                </form>
            </div>

        </div>

        <!-- javascript -->
        <script src="http://azmind.com/demo/bootstrap-wizard-new-step/assets/js/retina-1.1.0.min.js"></script>
        <script src="http://azmind.com/demo/bootstrap-wizard-new-step/assets/js/jquery.backstretch.min.js"></script>

        <script>
            var institutions_ = <?php echo json_encode($institution_list); ?>;
            var faculties_ = <?php echo json_encode($faculty_list); ?>;
            var cities_ = <?php echo json_encode($city_list); ?>;
            var mregister = JSON.parse(<?php echo "'".$message_register."'" ?>);
            var mlogin = JSON.parse(<?php echo "'".$message_login."'" ?>);

            $(document).ready(function() {

                var faIcon = {
                    valid: 'fa fa-check-circle fa-lg text-success',
                    invalid: 'fa fa-times-circle fa-lg',
                    validating: 'fa fa-refresh'
                }

                var institutions = new Bloodhound({
                    datumTokenizer: Bloodhound.tokenizers.whitespace,
                    queryTokenizer: Bloodhound.tokenizers.whitespace,
                    local: institutions_
                });

                $('#bloodhound-institution .typeahead').typeahead({
                        hint: true,
                        highlight: true,
                        minLength: 1
                    },
                    {
                        name: 'institutions',
                        source: institutions
                    });

                var faculties = new Bloodhound({
                    datumTokenizer: Bloodhound.tokenizers.whitespace,
                    queryTokenizer: Bloodhound.tokenizers.whitespace,
                    local: faculties_
                });

                $('#bloodhound-faculty .typeahead').typeahead({
                        hint: true,
                        highlight: true,
                        minLength: 1
                    },
                    {
                        name: 'faculties',
                        source: faculties
                    });

                var cities = new Bloodhound({
                    datumTokenizer: Bloodhound.tokenizers.whitespace,
                    queryTokenizer: Bloodhound.tokenizers.whitespace,
                    local: cities_
                });

                $('#bloodhound-city .typeahead').typeahead({
                        hint: true,
                        highlight: true,
                        minLength: 1
                    },
                    {
                        name: 'cities',
                        source: cities
                    });

                $('#bv-register').bootstrapValidator({
                    message: 'This value is not valid',
                    excluded: [':disabled'],
                    feedbackIcons: faIcon,
                    fields: {
                        fullname: {
                            validators: {
                                notEmpty: {
                                    message: 'Nama lengkap harap diisi'
                                },
                                regexp: {
                                    regexp: /^[a-zA-Z\s]+$/,
                                    message: 'Nama lengkap hanya berisi alfabet'
                                }
                            }
                        },
                        username: {
                            validators: {
                                notEmpty: {
                                    message: 'Username harap diisi'
                                },
                                stringLength: {
                                    min: 6,
                                    max: 30,
                                    message: 'Username minimal 6 karakter'
                                },
                                regexp: {
                                    regexp: /^[a-zA-Z0-9_\.]+$/,
                                    message: 'Username hanya berisi alfabet, angka, dot, dan underscore'
                                },
                                different: {
                                    field: 'password',
                                    message: 'Username dan password tidak boleh sama'
                                }
                            }
                        },
                        password: {
                            validators: {
                                notEmpty: {
                                    message: 'Password harap diisi'
                                },
                                different: {
                                    field: 'username',
                                    message: 'Username dan password tidak boleh sama'
                                }
                            }
                        },
                        birthdayplace: {
                            validators: {
                                notEmpty: {
                                    message: 'Tempat Lahir harap diisi'
                                },
                                regexp: {
                                    regexp: /^[A-Za-z]+$/,
                                    message: 'Tempat lahir hanya berisi alfabet'
                                }
                            }
                        },
                        birthdaydate: {
                            validators: {
                                notEmpty: {
                                    message: 'Tanggal Lahir harap diisi'
                                },
                                date: {
                                    format: 'YYYY-MM-DD',
                                    message: 'Format tanggal: yyyy-mm-dd'
                                }
                            }
                        },
                        email: {
                            validators: {
                                notEmpty: {
                                    message: 'Email harap diisi'
                                },
                                emailAddress: {
                                    message: 'Email tidak valid'
                                }
                            }
                        },
                        contactphone: {
                            validators: {
                                notEmpty: {
                                    message: 'No HP harap diisi'
                                },
                                digits: {
                                    message: 'No. HP harus angka'
                                },
                                regexp: {
                                    regexp: /\(?(?:62)(?:\d{2,3})?\)?\d{2,4}?\d{2,4}?\d{2,4}/,
                                    message: 'No. HP: 62xxxxxxxxxx'
                                },
                                stringLength: {
                                    min: 11,
                                    max: 13,
                                    message: 'No. HP tidak valid'
                                }
                            }
                        },
                        dominantcity: {
                            validators: {
                                notEmpty: {
                                    message: 'Kota Domisili harap diisi'
                                },
                                regexp: {
                                    regexp: /^[a-zA-Z\s]+$/,
                                    message: 'Kota Domisili hanya berisi alfabet'
                                }
                            }
                        },
                        apprenticecity: {
                            validators: {
                                notEmpty: {
                                    message: 'Lokasi Kota Magang harap diisi'
                                },
                                regexp: {
                                    regexp: /^[a-zA-Z\s]+$/,
                                    message: 'Lokasi Kota Magang hanya berisi alfabet'
                                }
                            }
                        },
                        nim: {
                            validators: {
                                notEmpty: {
                                    message: 'NIM (Nomor Induk Siswa/Mahasiswa) harap diisi'
                                },
                                digits: {
                                    message: 'NIM harus angka'
                                }
                            }
                        },
                        institutionname: {
                            validators: {
                                notEmpty: {
                                    message: 'Sekolah/kampus harap diisi'
                                }
                            }
                        },
                        faculty: {
                            validators: {
                                regexp: {
                                    regexp: /^[a-zA-Z\s]+$/,
                                    message: 'Fakultas hanya berisi alfabet'
                                }
                            }
                        },
                        major: {
                            validators: {
                                regexp: {
                                    regexp: /^[a-zA-Z\s]+$/,
                                    message: 'Jurusan hanya berisi alfabet'
                                }
                            }
                        },
                        semester: {
                            validators: {
                                notEmpty: {
                                    message: 'Semester harap diisi'
                                },
                                digits: {
                                    message: 'NIM harus angka'
                                },
                                regexp: {
                                    regexp: /^([1-9]|1[0-4])$/,
                                    message: 'Kamu bukan Mahasiswa'
                                }
                            }
                        },
                        sks: {
                            validators: {
                                notEmpty: {
                                    message: 'SKS harap diisi'
                                },
                                digits: {
                                    message: 'NIM harus angka'
                                },
                                regexp: {
                                    regexp: /^([1-9]|[1-9][0-9]|1[0-5][0-9]|16[0])$/,
                                    message: 'Kamu bukan Mahasiswa'
                                }
                            }
                        },
                        hobby: {
                            validators: {
                                notEmpty: {
                                    message: 'Hobby harap diisi'
                                }
                            }
                        },
                        organizationexp: {
                            validators: {
                                notEmpty: {
                                    message: 'Pengalaman Organisasi harap diisi'
                                }
                            }
                        },
                        motivation: {
                            validators: {
                                notEmpty: {
                                    message: 'Motivasi harap diisi'
                                }
                            }
                        },
                        selfcharacter: {
                            validators: {
                                notEmpty: {
                                    message: 'Karakter diri harap diisi'
                                }
                            }
                        },
                        profilephoto: {
                            validators: {
                                notEmpty: {
                                    message: 'Profile photo harap diisi'
                                },
                                file: {
                                    extension: 'jpeg,jpg,png',
                                    type: 'image/jpeg,image/png',
                                    message: 'Silahkan pilih file image (*.jpg, *.jpeg, *.png)'
                                }
                            }
                        }
                    }
                }).on('status.field.bv', function(e, data) {
                    var $form     = $(e.target),
                        validator = data.bv,
                        $tabPane  = data.element.parents('.tab-pane'),
                        tabId     = $tabPane.attr('id');

                    if (tabId) {
                        var $icon = $('a[href="#' + tabId + '"][data-toggle="tab"]').parent().find('i');

                        // Add custom class to tab containing the field
                        if (data.status == validator.STATUS_INVALID) {
                            $icon.removeClass(faIcon.valid).addClass(faIcon.invalid);
                        } else if (data.status == validator.STATUS_VALID) {
                            var isValidTab = validator.isValidContainer($tabPane);
                            $icon.removeClass(faIcon.valid).addClass(isValidTab ? faIcon.valid : faIcon.invalid);
                        }
                    }
                });
            }).on('click', function(e) {
                bootbox.hideAll();
            });
        </script>



    </div>
</body>
</html>