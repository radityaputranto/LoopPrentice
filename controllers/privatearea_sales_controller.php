<?php
    class PrivateAreaSalesController {
        public function error() {
            require_once('views/privatearea/sales/error.php');
        }

        public function add() {
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                $username = $_POST['username'];
                $teamname = $_POST['teamname'];

                if(isset($_FILES['sales'])) {
                    if($_FILES['sales']['tmp_name']) {
                        if(!$_FILES['sales']['error']) {
                            $inputFile = $_FILES['sales']['tmp_name'];
                            $path_parts = pathinfo($_FILES['sales']['name']);
                            $extension = $path_parts['extension'];
                            if($extension == 'xlsx' || $extension == 'xls') {
                                try {
                                    $inputFileType = PHPExcel_IOFactory::identify($inputFile);
                                    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                                    $objPHPExcel = $objReader->load($inputFile);
                                } catch(Exception $e) {
                                    die($e->getMessage());
                                }

                                $sheet = $objPHPExcel->getSheet(0); 
                                $highestRow = $sheet->getHighestRow(); 
                                $highestColumn = $sheet->getHighestColumn();

                                for ($row = 1; $row <= $highestRow; $row++) {
                                        $rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);
                                        $result = PrivateAreaSales::add($teamname, $rowData[0][0], $username);
                                }

                                header('Content-Type: application/json');
                                $json_sales = json_encode($result);
                                $_SESSION['message_sales'] = $json_sales;
                                header("Location: ?page=privatearea&action=addsales");
                            }
                            else {
                                $message = "Please upload an XLSX or XLS file";
                                header('Content-Type: application/json');
                                $json_sales = json_encode($result);
                                $_SESSION['message_sales'] = $json_sales;
                                header("Location: ?page=privatearea&action=addsales");
                            }
                        }
                        else {
                            $message = $_FILES['sales']['error'];
                            header('Content-Type: application/json');
                            $json_sales = json_encode($result);
                            $_SESSION['message_sales'] = $json_sales;
                            header("Location: ?page=privatearea&action=addsales");
                        }
                    }
                }
            } else {
                header("Location: ?page=home_prentice&action=index");
            }
        }
    }
?>