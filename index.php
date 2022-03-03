<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome! Create your account</title>
    <link rel="stylesheet" href="./styles/style.css">

</head>
<body>
    <!-- Main -->
    <main>

        <!-- bij action link leggen naar pagina die controleert of persoon in de database zit -->
        <form action=""  method="POST" class="signup"> 
        <h1> 
            Care about you
        </h1>
            <!-- log in -->
            <div class="input">
                <input class="input-field" type="text" id="email" name="email" placeholder="E-mailadress of gebruikersnaam" required />
                <input class="input-field" type="password" id="" name="Paswoord" placeholder="password" required />
            </div>

            <!-- Submit -->
            <input class="submit" type="submit" name="submit" value="sign up" />
            
            <!-- lijntje -->
            <hr> 

            <!-- ik heb deze divs gewoon de class = link gegeven, idk hoe we deze willen stylen, maar kan nog aangepast worden --> 
            <!-- link naar pagina als je uw wachtwoord bent vergeten -->
            <div class="link">
            <a href="http://localhost:8888/password.php" target="_blank">Forgot the password?</a> 
            </div>

             <!-- link naar pagina voor aanmaken van een nieuw account -->
            <div class="link">
                <label>No account?<label><a href="http://localhost:8888/register.php" target="_blank">Register here</a>
            </div>
           
        </form>
    </main>
</body>
</html>
