<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    img{
        width:100px;
        height:100px;
    }
    </style>
</head>
<body>
    <form method="POST">
    <?php
    session_start();
    for($x=1;$x<=6;$x++){
        echo (" <input type='submit' name='number$x' value='$x'>");
    }
     for($x=1;$x<=6;$x++){
        if(isset($_POST['number'.$x])){
        $_SESSION['save']=$x;
       
      
        }
     }
    echo (" <br><br><input type='submit' name='btnrand' value='Random'><br><br>");
    if(isset($_POST['btnrand'])){

        $first;$second;
        $first=rand(1,6);
        $second=rand(1,6);
        echo("Your number is ".$_SESSION['save']."<br>");
        if(($first==$second)&&($_SESSION['save']==$first)){
                if($first==1){echo('Dice is 1-1 Habeak');}
                elseif($first==2){echo('Dice is 2-2 Dobar');}
                elseif($first==3){echo('Dice is 3-3 Dosa');}
                elseif($first==4){echo('Dice is 4-4 Dorage');}
                elseif($first==5){echo('Dice is 5-5 Dabesh');}
                elseif($first==6){echo('Dice is 6-6 Dosh');}
                echo("<br><img src='big_smile_happy_face_drawer_knob_srf-r95f84f7818be4b3aa45a36488e23c00d_zp2d5_540.jpg'>");

           
            
        }
        else{
            echo('Dice is '.$first.'-'.$second);
            echo("<br><img src='4-46725_smiley-vector-clipart-psd-sad-face-hd-png.png'>");
        }
        
    }
    ?>
    

   
    </form>
</body>
</html>