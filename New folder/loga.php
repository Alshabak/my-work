<html>
<head><title>Create Account</title>
<style>
    
    p{text-align:left;color:#F5C088;font-size:16pt;text-align: center}
    
          form {text-align:center;color:black;font-size:14pt}
          
 input{background-color:#BBCFDA;text-align:center;font-size:11pt;color:#164D04;
                      border-bottom-color:#F5A505;border-bottom-width:6px;border-top-style:ridge}
                      
 textarea{border-bottom-color:#977125;color:brown;text-align:center;
                    background-color:white;border:outset;border-bottom-width:thick;border-bottom-style:ridge}
       
            .p{color:#F7CA6E;text-align:left}  /*registration */
                                                         
                                    .b{background-color:#BBDBFC} /* button*/

  body{background-image :url(kl.jpg);background-repeat:no-repeat;
                        background-size:cover;text-align:center;font-size: 14pt}         
           
</style>
         </head>
              <body>
            <p class="p"><b style="color:#EA8D40;font-size:30px">I</b><b style="color:#EA8D40;font-size:30px;">S</b>lam<b style="color:#EA8D40;font-size:30px">A</b>l_Shabak</p>

                         <p> Registrate your Information :: </p>
          
          <form method="post"action="logs.php">
            
First_Name: <br>
<input type="text" name="FirstName" maxlength="50pt" size="40px" placeholder="Islam"  /> <br> <br>

Family_Name: <br>
<input type="text" name="FamilytName" maxlength="50pt" size="40px" placeholder="Al_Shabak"/> <br> <br>

Phone_Number: <br>
<input type="text" name="Phone" maxlength="10pt" size="40px" placeholder="0777777777"/> <br> <br>

E-mail:<br>
<input type="email" name="email" maxlength="30pt" size="40px" placeholder="samo_19@gmail.com" /> <br> <br>

Password: <br>
<input type="text" maxlength="30pt" name="pass" size="40px" placeholder="00000000"/> <br> <br>

<input type="radio" name="gender" id="gen" /> Male

<input type="radio" name="gender" id="gen" /> Female
<br><br>

<textarea name="Comment">Your Comment</textarea><br><br>
<input type="submit" value="SAVE" name="ok" class="b"/>

    </form>
           </body>
               </html>
