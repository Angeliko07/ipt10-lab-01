<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <img src="https://www.auf.edu.ph/home/images/logo2.png" alt="University Logo">
    <hr />

    <form action="registration.php" method="POST"> 
        <label for="firstname">First Name:</label>         
        <input type="text" id="firstname" name="firstname" size="15"/>
        <label for="middlename">Middle Name:</label>     
        <input type="text" id="middlename" name="middlename" size="15"/>
        <label for="lastname">Last Name:</label>         
        <input type="text" id="lastname" name="lastname" size="15"/> 
        <br><br>  

        <label for="email">Email:</label>  
        <input type="email" id="email" name="email"/> 
        
        <label for="country_code">Phone:</label>  
        <input type="text" id="country_code" name="country_code" value="+63" size="2"/>   
        <input type="number" id="phone_number" name="phone_number" size="10"/> 
        <br><br> 

        <label>Sex:</label><br>  
        <input type="radio" id="male" name="sex" value="male" checked="checked" /> 
        <label for="male">Male</label><br>  
        <input type="radio" id="female" name="sex" value="female" /> 
        <label for="female">Female</label>
        <br><br>

        <label for="birthdate">Birthdate:</label>  
        <input type="date" id="birthdate" name="birthdate"/> 
        <br><br>

        <label for="program">Program:</label>   
        <select id="program" name="program">
            <option value="BSA">BS Accountancy</option>  
            <option value="BSBA">BS Business Administration</option>  
            <option value="BSEE">BS Electronics Engineering</option>  
            <option value="BSIT">BS Information Technology</option>  
            <option value="BSCS">BS Computer Science</option>
        </select>  
        <br><br> 

        <label for="address">Address:</label>
        <textarea id="address" cols="80" rows="5" name="address"></textarea>  
        <br><br>     

        <input type="submit" value="Register Now"/>  
    </form>  

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email'])) {
            echo "<h1>" . htmlspecialchars($_POST['firstname']) . "</h1>";
            echo "<h1>" . htmlspecialchars($_POST['lastname']) . "</h1>";
            echo "<h1>" . htmlspecialchars($_POST['email']) . "</h1>";
            echo "<hr />";

            echo '<pre>';
            print_r($_POST);
            echo '</pre>';
        }
    }
    ?>
</body>
</html>
