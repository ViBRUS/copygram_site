<?php
$conn = mysqli_connect("localhost","root","root","xeroxapp",3308);
    if($conn->connect_error){
            die("Connection failed:".$conn->connect_error);}
                        $email = $_GET['emailId'];
                        $counter2 = 0;
$query2 = "select d.useremail,d.filename,d.filelocation,p.copies,p.pages,p.sides,p.color 
            from documents d,printing_details  p 
            where p.user_email=d.useremail
            and p.user_email='$email' 
            and p.file_name=d.filename";
                        $result2 = $conn -> query($query2);
                    if(true)
                    {
                        while($rows = $result2 ->fetch_assoc()){
                            $counter2++;
                            echo "<tr>
                                    <td class='pd-l-20'><h2>".$counter2."</h2></td>
                                    <td><a href='' class='valign-middle tx-20'>".$rows['filename']."</a></td>
                                    <td class='valign-middle tx-center'>".$rows['copies']."</td>
                                    <td class='valign-middle tx-center'>".$rows['pages']."</td>
                                    <td class='valign-middle'>".$rows['sides']."</td>
                                    <td class='valign-middle'>".$rows['color']."</td>
                                    <td><a href='/xeroxapp/".$rows['filelocation']."'><button class='button2'>Download</button></a></td>
                                    <td><input type='checkbox' style='align:center;margin:15px 10px 10px 15px'></td>
                                    </tr>";
                        }
                    }
                    ?>