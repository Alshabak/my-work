<html>
    <head><title>IS.A|Reg</title>
    <style>
        body{background-image: url(h.jpg);
    background-repeat:no-repeat;
    background-size: cover;
font-size: 16pt;color:#460545;font-family:cursive
    }
                                       .b{background-color:#BBDBFC} /* button*/
     
     
    </style>
    </head>

<body>
<p class="p"><b style="color:#EA8D40;font-size:30px">I</b><b style="color:#EA8D40;
font-size:30px;">S</b>lam<b style="color:#EA8D40;font-size:30px">A</b>l_Shabak</p>

<?php
echo"<br>";

echo" Hello !  ".$_POST['FirstName'] . $_POST['FamilytName']."<br>"."<br>";


echo"your FirstName is: ". $_POST['FirstName']."<br>"."<br>";

echo"Your FamilyName is: ".$_POST['FamilytName']."<br>"."<br>";
echo" Your phone is: ". $_POST['Phone']."<br>"."<br>";
echo"Your Email is: ".$_POST['email']."<br>"."<br>";
echo"Your Pssword is: ". $_POST['pass']."<br>" ."<br>";
echo"Your Gender is: ". $_POST['gen']. "<br>"."<br>";
 echo"Your Comment is: ". $_POST['Comment']. "<br>"."<br>";                    
?>
</body></html>