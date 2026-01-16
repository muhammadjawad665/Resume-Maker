<?php
// Get POST values
$name    = $_POST["name"];
$email   = $_POST["email"];
$contact = $_POST["contact"];
$object  = $_POST["Object"];
$abme    = $_POST["abme"];
$Matric  = $_POST["MatricGrade"];
$Inter   = $_POST["InterGrade"];
$BS      = $_POST["BSGrade"];
$Exp     = $_POST["Exp"];
$Skills  = $_POST["Skills"];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>My Resume - Resume Maker</title>
    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: white;
            color: black;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

    
        nav {
            background-color: darkblue; 
            padding: 15px;
            text-align: center;
        }

        nav p {
            color: whitesmoke;
            font-size: 24px;
            font-weight: bold;
        }

    
        .resume-container {
            flex: 1; 
            width: 600px;
            margin: 30px auto;
            padding: 20px;
            border: 1px solid black;
            box-shadow:0 0 5px 3px black; 
        }

        h1 { text-align: center;
         color: black; 
         margin-bottom: 10px; 
        }

        .box { border-bottom: 1px solid #ccc;
               padding: 15px 0; }
        
        h3 { margin-bottom: 8px;
         color: black; 
        }
             
        .btn-container {
            text-align: center;
            margin-top: 40px;
            margin-bottom: 20px;
        }

        .btn-download {
            background-color: blue; 
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }

        .btn-download:hover {
            background-color: skyblue; 
        }

        footer {
            background-color: darkblue;
            color: whitesmoke;
            text-align: center;
            padding: 15px;
        }
        
        ul {
           padding-left: 25px; 
           margin-top: 5px;
        }

        li {
          margin-bottom: 5px;
        }
    </style>
</head>
<body>

    <nav>
        <p>Resume Maker</p>
    </nav>

    <div class="resume-container">
        <h1><?php echo $name; ?></h1>
        <p style="text-align:center;"><?php echo $email; ?> | <?php echo $contact; ?></p>

        <div class="box">
            <h3>Objective</h3>
            <p><?php echo $object; ?></p>
        </div>

        <div class="box">
            <h3>Education</h3>
            <ul>
                <li>Matric: <?php echo $Matric; ?></li>
                <li>Intermediate: <?php echo $Inter; ?></li>
                <li>BS: <?php echo $BS; ?></li>
            </ul>
        </div>

        <div class="box">
            <h3>Experience</h3>
            <p><?php echo $Exp; ?></p>
        </div>

        <div class="box">
            <h3>Skills</h3>
            <p><?php echo $Skills; ?></p>
        </div>

        <div class="btn-container">
            <form method="post" action="resumepdf_generator.php">
                <input type="hidden" name="name" value="<?php echo $name; ?>">
                <button type="submit" class="btn-download">Download PDF</button>
            </form>
        </div>
    </div>

    <footer>
        <p>© 2026 Resume Maker</p>
    </footer>
     
</body>
</html>