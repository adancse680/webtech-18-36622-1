<html>    
<body>   
    
        <h1>LOGIN</h1>  
        <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
            <fieldset>
               <tr>
            <td align="right"><label for="username"><b>User Name </b></label></td>
            <td><input type="text" id="username" name="username"></td>
        </tr>
            <p>  
                 <tr>
            <td align="right"><label for="password"><b>Password</b></label></td>
            <td><input type="text" id="password" name="password"></td>
        </tr> 
            </p>  
            <tr>

            <td></td>
            <td><input type="checkbox" id="opinion1" name="opinion1" value="email">
                <label for="opinion1">Remember Me</label><br>
                
        </tr>
            <p>     
                <input type =  "submit" id = "btn" value = "Submit" />  <a href="submit.php">Fogot Password? </a>
            </p>  

</fieldset>
        </form>  
    </div>  
  
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html>  