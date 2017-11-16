
    $('#bv-register').bootstrapValidator({
        message: 'This value is not valid',
        excluded: [':disabled'],
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
                    // notEmpty: {
                    //     message: 'Semester harap diisi'
                    // },
                    digits: {
                        message: 'Semester harus angka'
                    },
                    regexp: {
                        regexp: /^([1-9]|1[0-4])$/,
                        message: 'Semester tidak valid'
                    }
                }
            },
            sks: {
                validators: {
                    // notEmpty: {
                    //     message: 'SKS harap diisi'
                    // },
                    digits: {
                        message: 'SKS harus angka'
                    },
                    regexp: {
                        regexp: /^([1-9]|[1-9][0-9]|1[0-5][0-9]|16[0])$/,
                        message: 'SKS tidak valid'
                    }
                }
            },
            // instagramlink: {
            //     validators: {
            //         uri: {
            //             allowLocal: false,
            //             message: 'Url Salah'
            //         }
            //     }
            // },
            // facebooklink: {
            //     validators: {
            //         uri: {
            //             allowLocal: false,
            //             message: 'Url Salah'
            //         }
            //     }
            // },
            // twitterlink: {
            //     validators: {
            //         uri: {
            //             allowLocal: false,
            //             message: 'Url Salah'
            //         }
            //     }
            // },
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
/**
 * Created by Windows 10 on 05/10/2017.
 */
