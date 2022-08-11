<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

            <!-- ============================ Problem 1 (Grades) =============================================== -->
<form method="post">
  <label for="fname">Physics:</label><br>
  <input type="number" id="physics" name="physics" value="<?php if(isset($_POST['physics'])){echo $_POST['physics'];}?>"><br>

  <label for="lname">Chemistry:</label><br>
  <input type="number" id="chemistry" name="chemistry" value="<?php if(isset($_POST['chemistry'])){echo $_POST['chemistry'];}?>"><br>

  <label for="lname">Biology:</label><br>
  <input type="number" id="Biology" name="Biology" value="<?php if(isset($_POST['Biology'])){echo $_POST['Biology'];}?>"><br>

  <label for="lname">Mathematics:</label><br>
  <input type="number" id="Mathematics" name="Mathematics" value="<?php if(isset($_POST['Mathematics'])){echo $_POST['Mathematics'];}?>"><br>

  <label for="lname">Computer:</label><br>
  <input type="number" id="Computer" name="Computer" value="<?php if(isset($_POST['Computer'])){echo $_POST['Computer'];}?>"><br>

  <input type="submit"><br>
</form>

<?php

    if($_SERVER['REQUEST_METHOD']==="POST"){
        $physics=$_POST['physics'];
        $chemistry=$_POST['chemistry'];
        $Biology=$_POST['Biology'];
        $Mathematics=$_POST['Mathematics'];
        $Computer=$_POST['Computer'];
        $total = $physics + $chemistry + $Biology + $Mathematics + $Computer;
        $percentage = ($total * 100)/500;

        if($percentage >= 90){

            echo "Your Grade is A ".$total."/500 and your percentage is ".$percentage;
        }else if($percentage >= 80 && $percentage <90){

            echo "Your Grade is B ".$total."/500 and your percentage is ".$percentage;
        }else if($percentage >= 70 && $percentage <80){

            echo "Your Grade is C ".$total."/500 and your percentage is ".$percentage;
        }
        else if($percentage >= 60 && $percentage <70){

            echo "Your Grade is D ".$total."/500 and your percentage is ".$percentage;
        }
        else if($percentage >= 40 && $percentage <60){

            echo "Your Grade is E ".$total."/500 and your percentage is ".$percentage;
        }
        else if($percentage < 40){

            echo "Your Grade is F ".$total."/500 and your percentage is ".$percentage;
        }else{

        echo "Please Check Your inputs";
        }
    }
?>
</body>
</html>