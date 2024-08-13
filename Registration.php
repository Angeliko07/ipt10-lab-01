<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <header>
            <img src="https://www.auf.edu.ph/home/images/logo2.png" alt="University Logo">
            <h1>Registration Form</h1>
        </header>

        <form action="registration.php" method="POST"> 
            <div class="form-group">
                <label for="firstname">First Name:</label>         
                <input type="text" id="firstname" name="firstname" required />
            </div>
            
            <div class="form-group">
                <label for="middlename">Middle Name:</label>     
                <input type="text" id="middlename" name="middlename" />
            </div>
            
            <div class="form-group">
                <label for="lastname">Last Name:</label>         
                <input type="text" id="lastname" name="lastname" required />
            </div>

            <div class="form-group">
                <label for="email">Email:</label>  
                <input type="email" id="email" name="email" required />
            </div>

            <div class="form-group">
                <label for="country_code">Phone:</label>  
                <input type="text" id="country_code" name="country_code" value="+63" size="2"/>   
                <input type="number" id="phone_number" name="phone_number" required />
            </div>

            <div class="form-group">
                <label>Sex:</label>
                <div class="radio-group">
                    <input type="radio" id="male" name="sex" value="male" checked />
                    <label for="male">Male</label>
                    <input type="radio" id="female" name="sex" value="female" />
                    <label for="female">Female</label>
                </div>
            </div>

            <div class="form-group">
                <label for="birthdate">Birthdate:</label>  
                <input type="date" id="birthdate" name="birthdate" required />
            </div>

            <div class="form-group">
                <label for="program">Program:</label>   
                <select id="program" name="program" required>
                    <option value="BSA">BS Accountancy</option>  
                    <option value="BSBA">BS Business Administration</option>  
                    <option value="BSEE">BS Electronics Engineering</option>  
                    <option value="BSIT">BS Information Technology</option>  
                    <option value="BSCS">BS Computer Science</option>
                </select>  
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <textarea id="address" name="address" rows="5" required></textarea>
            </div>

            <button type="submit">Register Now</button>
        </form>  

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email'])) {
                echo "<div class='results'>";
                echo "<h2>Registration Details</h2>";
                echo "<p><strong>First Name:</strong> " . htmlspecialchars($_POST['firstname']) . "</p>";
                echo "<p><strong>Last Name:</strong> " . htmlspecialchars($_POST['lastname']) . "</p>";
                echo "<p><strong>Email:</strong> " . htmlspecialchars($_POST['email']) . "</p>";
                echo "<hr />";
                echo '<pre>' . print_r($_POST, true) . '</pre>';
                echo "</div>";
            }
        }
        ?>
    </div>
</body>
</html>
