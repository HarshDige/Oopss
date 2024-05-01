<?php require_once "connection.php";
    // echo "<pre>";
    // print_r($_SERVER);
    // echo "</pre>";


    if(isset($_POST['submit']))
    {
        echo "success";
        

        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
        *
        {
            padding: 0%;
            margin:0%;
        }
        .conatiner
        {
            height: 300px;
            width: 500px;
            border: 2px black solid;
            padding: 10px;
            margin: 150px 500px;
        }

        .conatiner div
        {
            margin: 10px 50px;
        }
        .conatiner div input
        {
            height: 25px;
            width: 400px;
        }
        button
        {
            width: 120px;
            height: 30px;
        }
    </style>
</head>
<body>

<center><h1>Registration Form</h1></center>

    <div class="conatiner" >

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
            <div>
                <label for="">Name</label><br>
                <input name="name" type="text" placeholder="Name" required>
            </div>
            <div>
                <label for="">username</label><br>
                <input name="user" type="text" placeholder="Username" required>
            </div>
            <div>
                <label for="">Password</label><br>
                <input name="pass" type="password" placeholder="password" required>
            </div>
            <div>
                <label for="">email</label><br>
                <input name="email" type="email" placeholder="example@gmail.com" required>
            </div>
            
            
            <div style="margin:5px 120px;"> 
                <button style="background-color:aqua;" type="submit" name="submit">Submit</button>
                <button style="background-color:crimson;" type="reset" name="reset">Reset</button>
            </div>
            
        </form>
        
    </div>    
</body>
</html>