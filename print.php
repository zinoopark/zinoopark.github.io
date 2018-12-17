<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Curriculum Vitae</title>
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <script src="main.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script type="text/javascript">
        $(function() {
            $('.print-btn').click(function() {
                $(this).css('display', 'none');
                print();
                $(this).css('display', '');
            });
        });
            function info_print() {
                var initBody = document.body.innerHTML;
                window.onbeforeprint = function () {
                    document.body.innerHTML = document.getElementById("print").innerHTML;
                }
                window.onafterprint = function () {
                    document.body.innerHTML = initBody;
                }
                window.print();
                }
            </script>
    </head>

    <body>
       
        
        
        <div class="page">
            <div class="subpage" style="font-size:<?php echo $_POST["f_size"]."pt"; ?>" id="print">
                <div class="profile">
                    
                    <div class="contact" style="color:<?php echo $_POST['f_color'];?>; height: 100%; width: 75%; float: left;">
                        <div class="title" style=" <?php if(isset($_POST["bold"])){echo("font-weight: bold;");} if(isset($_POST["under"])){echo("border-bottom: solid 1px".$_POST['f_color']);}?>"><?php echo $_POST["Fname"]." ".$_POST["Lname"];?></div>
                        <div class="phone"><p>Cell No. <?php echo $_POST["p1"]." ".$_POST["p2"]." ".$_POST["p3"]; ?></h2></div>
                        <div class="email"><p>E-mail. <?php echo $_POST["email"]; ?></p></div>
                        <div class="Address"><p>Address. <?php echo $_POST["address"]; ?></p></div>
                    </div>
                    <div class="photo" style="float: left;">
                        <?php 
                            if(is_uploaded_file($_FILES["file"]["tmp_name"])){
                                $uploads_dir = './uploads';
                                $name = $_FILES['file']['name'];
                                move_uploaded_file( $_FILES['file']['tmp_name'], "$uploads_dir/$name");
                                echo "<img style='height: 200px; width: 140px;' src=".$uploads_dir."/".$name." />";
                            }
                        ?>
                    </div>
                </div>
                <div class="obj" style="color:<?php echo $_POST['f_color'];?>;">
                    <h2>Objective</h2>
                    <p><?php echo $_POST["objective"]; ?></p>
                </div>
                <hr width="100%" color="<?php echo $_POST['f_color'];?>" noshade />
                <div class="Education">
                    <table class="board">
                        <thead style="color:<?php echo $_POST['f_color'];?>;">
                            <tr>
                                <th>Education</th>
                            </tr>
                            <tr>
                                <th>School</th>
                                <th>Major</th>
                                <th>Duration</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $school = $_POST['school'];
                                $major = $_POST['major'];
                                $s_duration = $_POST['s_duration'];
                                foreach( $school as $key => $n ) {
                                    echo "<tr><td>".$n."</td><td>".$major[$key]."</td><td>".$s_duration[$key]."</td><tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <hr width="100%" color="<?php echo $_POST['f_color'];?>" noshade />
                <div class="Experience">
                    <table class="board">
                        <thead style="color:<?php echo $_POST['f_color'];?>;">
                            <tr>
                                <th>Experience</th>
                            </tr>
                            <tr>
                                <th>organization</th>
                                <th>duties</th>
                                <th>Duration</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $org = $_POST['org'];
                                $dut = $_POST['dut'];
                                $e_duration = $_POST['e_duration'];
                                foreach( $org as $key => $n ) {
                                    echo "<tr><td>".$n."</td><td>".$dut[$key]."</td><td>".$e_duration[$key]."</td><tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <hr width="100%" color="<?php echo $_POST['f_color'];?>" noshade />
                <div class="Skill">
                    <table class="board">
                        <thead>
                            <tr>
                                <th style="color:<?php echo $_POST['f_color'];?>;">Skill</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $sk = $_POST['sk'];
                                foreach( $sk as $key => $n ) {
                                    echo "<tr><td>".$n."</td><tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <hr width="100%" color="<?php echo $_POST['f_color'];?>" noshade />
                <div class="Others">
                    <table class="board">
                        <thead>
                            <tr>
                                <th style="color:<?php echo $_POST['f_color'];?>;">Others</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $ot = $_POST['ot'];
                                foreach( $ot as $key => $n ) {
                                    echo "<tr><td>".$n."</td><tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <input type="button" class="print-btn" value="Print" onclick="javascript:printIt(document.getElementById('print').innerHTML)" />
        </div>
    </body>
</html>