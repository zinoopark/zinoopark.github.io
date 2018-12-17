<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Curriculum Vitae form</title>
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <script src="main.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script type="text/javascript">
            $(function(){
                $('.Edu_button').click(function(){
                    var rowItem = "<tr>"
                    rowItem += "<td><input type='text' name='school[]' placeholder='학교명'></td>"
                    rowItem += "<td><input type='text' name='major[]' placeholder='전공'></td>"
                    rowItem += "<td><input type='text' name='s_duration[]' placeholder='기간'></td>"
                    rowItem += "</tr>"
                    $('#Education_table').append(rowItem)
                });
                $('.Exp_button').click(function(){
                    var rowItem = "<tr>"
                    rowItem += "<td><input type='text' name='org[]' placeholder='조직명'></td>"
                    rowItem += "<td><input type='text' name='dut[]' placeholder='업무'></td>"
                    rowItem += "<td><input type='text' name='e_duration[]' placeholder='기간'></td>"
                    rowItem += "</tr>"
                    $('#Experience_table').append(rowItem)
                });
                $('.Skill_button').click(function(){
                    var rowItem = "<tr>"
                    rowItem += "<td><input type='text' name='sk[]' placeholder='특기' style='width:100%;'></td>"
                    rowItem += "</tr>"
                    $('#Skill_table').append(rowItem)
                });
                $('.Others_button').click(function(){
                    var rowItem = "<tr>"
                    rowItem += "<td><input type='text' name='ot[]' placeholder='기타' style='width:100%;'></td>"
                    rowItem += "</tr>"
                    $('#Others_table').append(rowItem)
                });
            });
        </script>
    </head>
    <body>
        <div class="form_box">
            <form class="sub_box" action="print.php" method="post" enctype="multipart/form-data">
                <h2>Your Photo<h2><input type="file" name="file" style="margin-bottom:50px;"><br>
                <table class="name_board">
                    <tr>
                        <th>Fist Name</th>
                        <th>Last Name</th>
                    </tr>
                    <tr>
                        <td><input name="Lname" type="text"></td>
                        <td><input name="Fname" type="text"></td>
                    </tr>
                </table>
                
                <h2>phone number<h2><h2><input name="p1" type="text">-<input name="p2" type="text">-<input name="p3" type="text"></h2>
                <br>

                <h2>email<h2><h2><input name="email" type="text" style="width:100%;"></h2> 
                <br>

                <h2>Address<h2><h2><input name="address" type="text" style="width:100%;"></h2> 
                <br>

                <h2>Objective<h2><h2><input name="objective" type="text" style="width:100%;"></h2> 
                <br>


                <table id="Education_table" style="width:100%;">
                    <thead>
                        <tr>
                            <th style="font-size:16pt;">Education<button type="button" class="Edu_button" id ="add_btn">add</button></th>
                        </tr>
                    </thead>
                    <tbody id=Edu_tbody>
                        <tr>
                            <th>School</th>
                            <th>major</th>
                            <th>Duration</th>
                        </tr>
                        <tr>
                            
                            <td><input type="text" name="school[]" placeholder="학교명"></td>
                            <td><input type="text" name="major[]" placeholder="전공"></td>
                            <td><input type="text" name="s_duration[]" placeholder="기간"></td>
                        </tr>
                    </tbody>
                </table>    

                <table id="Experience_table" style="width:100%;">
                    <thead>
                        <tr>
                            <th style="font-size:16pt;">Experience<button type="button"class="Exp_button" id ="add_btn">add</button></th>
                        </tr>
                        <tr>
                            <th>Organization</th>
                            <th>Duties</th>
                            <th>Duration</th>
                        </tr>
                    </thead>
                    <tbody id=exp_tbody>
                        <tr>
                            <td><input type="text" name="org[]" placeholder="조직명"></td>
                            <td><input type="text" name="dut[]" placeholder="업무"></td>
                            <td><input type="text" name="e_duration[]" placeholder="기간"></td>
                        </tr>
                    </tbody>
                </table>

                <table id="Skill_table" style="width:100%;">
                    <thead>
                        <tr>
                            <th style="font-size:16pt;">Skill  <button type="button" class="Skill_button" id ="add_btn">add</button></th>
                            
                        </tr>
                    </thead>
                    <tbody id=skill_tbody>
                        <tr>
                            <td><input type="text" name="sk[]" placeholder="특기" style="width:100%;"></td>
                        </tr>
                    </tbody>
                </table>

                <table id="Others_table" style="width:100%;">
                    <colgroup>
                        <col width="20%"/>
                        <col width="70%"/>
                    </colgroup>
                    <thead>
                        <tr>
                            <th style="font-size:16pt;">Others  <button type="button" class="Others_button" id ="add_btn">add</button></th>
                        </tr>
                    </thead>
                    <tbody id=others_tbody>
                        <tr>
                            <td><input type="text" name="ot[]" placeholder="기타" style="width:100%;"></td>
                        </tr>
                    </tbody>
                </table>
                <h2>Setting</h2>
                <div class="setting" style="padding:20px;">
                    <h3>font color <input type="color" name="f_color"></h3>
                    <h3>font size <input type="text" name="f_size"></h3>
                    <h3><input type="checkbox" name="bold" value="bold">bold</h3>
                    <h3><input type="checkbox" name="under" value="under">Underline</h3>
                    
                </div>
                <input type="submit" value="제출">
            </form>
        </div>
    </body>
</html>