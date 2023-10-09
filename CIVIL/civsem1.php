<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="png" href="bmsce.png" >
    <title>SEM 1 | CIVIL NOTES | BMSCE Student Companion</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        header {
            background-color: #0d1d2d;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            font-size: 32px;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .pdf-container {
            border: 2px solid #000000;
            border-radius: 10px;
            padding: 10px;
            margin: 10px 0;
            transition: transform 0.2s;
        }

        .pdf-container:hover {
            transform: scale(1.05);
        }

        .pdf {
            width: 100%;
            height: 700px; 
            border: none;
            display: block;
            margin: 10px 0;
            border-radius: 10px;
        }

        h2 {
            color: #0d4e7a;
            font-size: 24px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body style="background-image: url('sgpawall.jpeg')">
    <header>
    <h1 style="text-align: center; color: #f5f5f5; font-size:30px; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"><img src="bmsce.png" width="55" height="35"/> Your PDF Notes | CIVIL DEPARTMENT</h1>
</header>

    <div class="container">
        <div class="pdf-container">
            <h2>MODULE 1</h2>
            <embed class="pdf" src="civ1.pdf" type="application/pdf" />
        </div>
        
        <div class="pdf-container">
            <h2>MODULE 2</h2>
            <embed class="pdf" src="civ2.pdf" type="application/pdf" />
        </div>
        
        <div class="pdf-container">
            <h2>MODULE 3</h2>
            <embed class="pdf" src="civ3.pdf" type="application/pdf" />
        </div>
    </div>
</body>
</html>
