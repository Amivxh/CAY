<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome! Create your account</title>
    <link rel="stylesheet" href=" ">

</head>
<body>
    <!-- Main -->
    <main>

        
        <form action="./controllers/person.php" method="POST" class="signup">
        <h1> 
            Create here your new account
        </h1>
            <!-- elke div heeft dezelde class -> dit voor de styling , you know class gelijk stellen aan input et voilà! vite fait -->
            <div class="input">
                <label for="firstname">Firstname</label>
                <input class="input-field" type="text" id="firstname" name="firstname" placeholder="fill in your firstname" required />
            </div>

            <div class="input">
                <label for="lastname">Lastname</label>
                <input class="input-field" type="text" id="lastname" name="lastname" placeholder="fill in your lastname" required />
            </div>

            <div class="input">
                <label for="age">Age</label>
                <input class="input-field" type="text" id="age" name="age" placeholder="fill in your age" required />
            </div>

            <div class="input">
                <label for="password">password</label>
                <input class="input-field" type="text" id="password" name="password" placeholder="create a new password" required />
            </div>

            <div class="input">
                <input class="input-field" type="text" id="password" name="password" placeholder="Repeat the password" required />
            </div>

            <div class="input">
                <label for="birthday">Birthday:</label>
                <input type="date" id="birthday" name="birthday">
            </div>

            <div class="input">
                <input type="checkbox" id="sex" name="female" value="female">
                <label for="female">Female</label><br>
                <input type="checkbox" id="sex" name="male" value="male">
                <label for="male">Male</label><br>
                <input type="checkbox" id="sex" name="other" value="other">
                <label for="other">Other</label><br><br>
            </div>
            <!-- Submit -->
            <input class="submit" type="submit" name="submit" value="create account" />
        </form>
    </main>
</body>
</html>