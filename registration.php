<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        body {
            background-color: Lightskyblue;
            font-family: Arial, sans-serif;
        }
        .container {
            width: 50%;
            margin: auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        img {
            width: 100px;
        }
        h1 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        input[type="date"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        input[type="radio"] {
            margin-right: 10px;
        }
        .form-actions {
            text-align: center;
        }
        .form-actions input {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-actions input[type="submit"] {
            background-color: #4CAF50;
            color: white;
        }
        .form-actions input[type="reset"] {
            background-color: #f44336;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="https://www.auf.edu.ph/home/images/logo2.png" alt="AUF Logo"/>
        <h1>Registration Form</h1>
        <form action="summary.php" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required />
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" />
            </div>
            <div class="form-group">
                <label>Sex:</label>
                <input type="radio" id="male" name="sex" value="Male" checked />
                <label for="male">Male</label>
                <input type="radio" id="female" name="sex" value="Female" />
                <label for="female">Female</label>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required />
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea id="address" name="address"></textarea>
            </div>
            <div class="form-group">
                <label for="department">College Department:</label>
                <select id="department" name="department">
                    <option value="Engineering">Engineering</option>
                    <option value="Business">Business</option>
                    <option value="Arts">Arts</option>
                    <option value="Science">Science</option>
                </select>
            </div>
            <div class="form-group">
                <label for="program">Program:</label>
                <input type="text" id="program" name="program" />
            </div>
            <div class="form-group">
                <label for="mobile">Mobile Number:</label>
                <input type="text" id="mobile" name="mobile" />
            </div>
            <div class="form-actions">
                <input type="reset" value="Reset" />
                <input type="submit" value="Submit" />
            </div>
        </form>
    </div>
</body>
</html>
