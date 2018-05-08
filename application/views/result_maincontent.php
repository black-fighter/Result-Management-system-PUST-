<!--<h3>যোগাযোগ ঠিকানাঃ</h3>
<p><?php //echo $contact_maincontent->name;               ?></p>
<p><?php //echo $contact_maincontent->pesha;               ?></p>
<p>মোবাইলঃ <?php //echo $contact_maincontent->phone;               ?></p>
<h3>ব্যাংক একাউন্টঃ</h3>
<p><?php //echo $contact_maincontent->bank_name;               ?></p>
<p><?php //echo $contact_maincontent->bank_details;               ?></p>-->





<?php
//require_once './classes/student.php';
//$st_obj = new Student ();
//
//$result = $st_obj->select_all_student();
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Wellcome To Banglabazar Zone</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div class="nav">
            <div class="nav_container">
                <div class="nav_left">
                    <h1>Banglabazar</h1>
                </div>
                <div class="nav_right">
                    <?php
                    //include './menu.php';
                    ?>
                </div>
            </div>
        </div>
        <div style="clear: both">

        </div>
        <div class="main_container">
            <div class="header">

            </div>
            <div class="marquee">
                <marquee>Wellcome To Baglabazar</marquee>
            </div>
            <div class="opacity">

                <div class="content-left">
                    <br/><br/>
                    <center> <h2>View All Student</h2></center><br/>
                    <hr/><hr/><hr/>
                    <br/>
                    <div id="contact"><br/>
                        <?php
                        foreach ($bivag_info as $v_bivag) {
                            $bivag_id = $v_bivag->bivag_id;
                            ?>
                            <table border="1" width="80%">

                                <tr>
                                    <th>Student Name</th>
                                    <?php
                                    $i = 0;
                                    global $subject;
                                    global $value_i;
                                    $subject = array();
                                    foreach ($subject_content as $v_content) {
                                        $k = 1;
                                        if ($v_content->bivag_id != $bivag_id) {
                                            $k++;
                                        }
                                        if ($k > 1) {
                                            continue;
                                        }
                                        $subject[$i++] = $subject_id = $v_content->subject_id;
                                        $value_i = $i;
                                        ?>



                                        <th><?php echo $v_content->subject_name; ?></th>
                                    <?php } ?>
                                    <th>Total Marks</th>
                                </tr>




                                <?php
                                $x = 0;
                                $j = 0;
                                //global $student;
                                $student = array();
                                foreach ($result_maincontent as $v_maincontent) {
                                    if ($v_maincontent->bivag_id != $bivag_id) {
                                        continue;
                                    }

                                    $k = 1;


                                    $student[$x++] = $student_id = $v_maincontent->student_id;



//                                     echo '<pre>';
//                                        print_r($student);

                                    for ($j = 0; $j < $x - 1; $j++) {
                                        if ($student[$j] == $student_id) {
                                            $k++;
                                        }
                                    }
                                    if ($k > 1) {
                                        continue;
                                    }
                                    ?>



                                    <tr>
                                        <td><?php echo $v_maincontent->student_name; ?></td>


                                        <?php
                                        $k = -1;
                                        $j = 0;
                                        global $total_mark;
                                        $total_mark = 0;
                                        for ($i = 0; $i < $value_i; $i++) {

                                            foreach ($result_maincontent as $v_maincontent) {

                                                if ($student_id == $v_maincontent->student_id) {
                                                    if ($subject[$i] == $v_maincontent->subject_id) {
                                                        $k++;
                                                        if ($i != $k) {
                                                            for ($j = $k; $j < $i; $j++) {
                                                                $k++;
                                                                ?>
                                                                <td></td>
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                        <td>
                                                            <?php
                                                            //echo $i." ".$k." ";
                                                            echo $v_maincontent->mark;
                                                            $total_mark = $total_mark + $v_maincontent->mark;
                                                            ?>
                                                        </td>
                                                        <?php
                                                    }
                                                }
                                                ?>

                                                <!--                                            <td><?php //echo $v_maincontent2->mark;        ?></td>
                                                                                            <td>
                                                                                                <a style="color:black" href="edit.php?student_id=<?php //echo $row['student_id']              ?>">Edit</a> !
                                                                                                <a style="color:black" href="delete.php?student_id=<?php //echo $row['student_id']              ?>">Delete</a>
                                                                                            </td>-->
                                            <?php } ?>
                                        <?php } ?>
                                        <?php
                                        if ($i != $k + 1) {
                                            for ($j = $k + 1; $j < $i; $j++) {
                                                $k++;
                                                ?>
                                                <td></td>
                                                <?php
                                            }
                                        }
                                        ?>
                                        <td><?php echo $total_mark; ?></td>

                                    </tr>

                                <?php } ?>

                            </table>
                            <br><br><br>
                        <?php } ?>
                    </div>
                </div>
                <div class="content-right">
                    <?php
//include './sidebar_menu.php';
                    ?>
                </div>


            </div>
            <div class="footer">
                <div style="float: left">
                    <p align="left" style="line-height: 50px; font-size: 17px">&nbsp; &copy; Banglabazar.com</p>
                </div>
                <div style="float: right">
                    <p align="left" style="line-height: 50px; font-size: 17px">Design By Rashed khan Arif &nbsp;</p>
                </div>
            </div>
        </div><br/>
    </body>
</html>
