<!DOCTYPE html>
<html>
<head>
    <title>Student Registration System</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f2f2f2;
        }
        .container{
            width:400px;
            margin:50px auto;
            background:white; 
            padding:20px;
            border-radius:10px;
            box-shadow:0 0 10px gray;
        }
        h2{
            text-align:center;
        }
        input, select{
            width:100%;
            padding:10px;
            margin:8px 0;
        }
        input[type=submit]{
            background:green;
            color:white;
            border:none;
            cursor:pointer;
        }
        input[type=submit]:hover{
            background:darkgreen;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Student Registration Form</h2>

    <form action="submit.php" method="POST">

        <label>Student Name</label>
        <input type="text" name="student_name" required>

        <label>Student ID</label>
        <input type="text" name="student_id" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Department</label>
        <select name="department" required>
            <option value="">Select Department</option>
            <option value="CSE">CSE</option>
            <option value="EEE">EEE</option>
            <option value="BBA">BBA</option>
            <option value="English">English</option>
        </select>

        <br><br>
        <input type="submit" value="Register">

    </form>
</div>

</body>
</html>
