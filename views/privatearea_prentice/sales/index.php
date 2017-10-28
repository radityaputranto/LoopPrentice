<?php
    $message_sales = '{}';

    if(isset($_SESSION['message_sales'])) {
        $message_sales = $_SESSION['message_sales'];
        unset($_SESSION['message_sales']);
    }

    $message = json_decode($message_sales);
    if($message_sales != '{}') {
        echo $message->message;
    }
?>

<form id="bv-sales" method="post" action="?page=privatearea_sales_prentice&action=add" enctype="multipart/form-data">
	<div class="form-group">
	    <label for="username">Teamname:</label>
	    <input type="text" class="form-control" id="teamname" name="teamname" value=<?php echo $teamname ?> readonly>
	</div>
	<div class="form-group">
	    <label for="username">Username:</label>
	    <input type="text" class="form-control" id="username" name="username" value=<?php echo $username ?> readonly>
	</div>
	<div class="form-group">
	    <label for="profilephoto">Upload Sales:</label>
	    <input type="file" class="form-control" id="sales" name="sales">
	</div>
	<button type="submit" class="btn btn-danger" style="width: 200px;" id="sales-submit" name="sales-submit">Submit</button>
</form>

<script>
    $(document).ready(function() {
    	var faIcon = {
        		valid: 'fa fa-check-circle fa-lg text-success',
        		invalid: 'fa fa-times-circle fa-lg',
        		validating: 'fa fa-refresh'
        }

        $('#bv-sales').bootstrapValidator({
            message: 'This value is not valid',
            excluded: [':disabled'],
            feedbackIcons: faIcon,
            fields: {
                sales: {
                    validators: {
                        notEmpty: {
                            message: 'File xls harap diisi'
                        },
                        file: {
                            extension: 'xls','xlsx',
                            type: 'application/vnd.ms-excel','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                            message: 'Silahkan pilih file image (*.xls)'
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