<?php

$con = mysqli_connect("localhost", "root" , "" , "crud");

session_start();

if(!$_SESSION['data']){
    header("Location: login.html");
    exit;

}

if(isset($_GET['logout'])){
    session_unset();

    session_destroy();

    header("Location: login.html");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Welcome Page</title>

    <style>
        /* Reset some default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Animated gradient background */
        body {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(-45deg, #00ffff, #0077ff, #00ff77, #0077aa);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
            overflow: hidden;
            color: white;
            text-align: center;
            padding: 20px;
        }

        @keyframes gradientShift {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        /* Glowing, animated heading */
        h1 {
            font-family :robo;
            font-size: 6rem;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            margin-bottom: 50px;
            animation: glow 3s ease-in-out infinite alternate;
        }

        @keyframes glow {
            0% {
                text-shadow: 0 0 10px #00ffff, 0 0 20px #00ffff, 0 0 30px #0077ff, 0 0 40px #00ffff;
            }
            100% {
                text-shadow: 0 0 20px #00ffcc, 0 0 40px #00ffcc, 0 0 60px #00ffaa, 0 0 80px #00ffaa;
            }
        }

        /* Stylish animated button */
        .btnn {
            font-family :robo;

            position: relative;
            display: inline-block;
            padding: 15px 60px;
            font-size: 1.5rem;
            font-weight: 700;
            color: white;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            background: transparent;
            border: 3px solid #00ffff;
            border-radius: 50px;
            cursor: pointer;
            overflow: hidden;
            transition: color 0.4s ease;
            z-index: 0;
        }

        .btnn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 300%;
            height: 300%;
            background: radial-gradient(circle, #00ffff 10%, transparent 10.01%);
            background-size: 50% 50%;
            transform: translate(-50%, -50%) scale(0);
            border-radius: 50%;
            transition: transform 0.5s ease;
            z-index: -1;
            filter: blur(10px);
            opacity: 0.6;
            animation: pulse 2s infinite ease-in-out;
        }

        @keyframes pulse {
            0%, 100% {
                transform: translate(-50%, -50%) scale(0);
                opacity: 0.6;
            }
            50% {
                transform: translate(-50%, -50%) scale(1);
                opacity: 0.3;
            }
        }

        .btnn:hover {
            color: #000;
            background: #00ffff;
            box-shadow: 0 0 15px #00ffff, 0 0 40px #00ffff;
            transition: background-color 0.4s ease, color 0.4s ease, box-shadow 0.4s ease;
        }

        .btnn:hover::before {
            transform: translate(-50%, -50%) scale(1);
        }

        /* Responsive text scaling */
        @media (max-width: 768px) {
            h1 {
                font-size: 3.5rem;
                letter-spacing: 0.1em;
            }
            .btnn {
                font-size: 1.2rem;
                padding: 12px 45px;
            }
        }
    </style>
</head>

<body>
    <h1>Welcome <br /><?php echo htmlspecialchars($_SESSION['data']); ?></h1>

    <form method="get">
        <button name="logout" class="btnn" type="submit">Log Out</button>
    </form>
</body>

</html>
