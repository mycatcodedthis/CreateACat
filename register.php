<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', 'teeny');
    define('DB_NAME', 'cat');
    
    
    function insertuser($user, $pass){
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "INSERT INTO users (user,pass) VALUES ('$user', '$pass')";
        $result = $conn->query($sql);
        mysqli_close($conn);
    }
    
    if($_GET['user'] != ''){
        insertuser($_GET['user'], $_GET['pass']);
    }

?>

<html>
<head>
    <title>Register :3</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</head>
<style>
    body {
        background-color:#141d2e;
        font-family: Arial;
    }
    .inputs {
        width: 225px;
        height: 40px;
        margin-bottom: 5px;
        background-color: #4a6aa1;
        padding: 0px 10px;
        color: #f5c6e3;
        border-radius: 10px;
        border: 2px solid #331728;
        outline:none;
        text-align: center;
    }
    .inputs:hover {
        border: 2px solid #f5c6e3;
    }
    ::placeholder {
        color: #331728;
    }
    .container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        padding: 40px;
        background-color: #afbaab;
        border-radius: 0px 25px 0px 25px;
    }
    .enter {
        width: 225px;
        height: 40px;
        background-color: #331728;
        color: #4a6aa1;
        border-radius: 10px;
        border: 2px solid #331728;
        font-weight:bold;
    }
    .enter:hover {
        background-color: #f5c6e3;
    }
    #text {
        font-size: 40px;
        font-weight: bold;
        text-align: center;
        margin-top: 0%;
        color: #f5c6e3;
    }
    .register {
        width: 225px;
        height: 40px;
        background-color: #f5c6e3;
        color: #4a6aa1;
        border-radius: 10px;
        border: 2px solid #f5c6e3;
    }
    .register:hover {
        background-color: #331728;
    }
    .container2 {
        text-align: center;
        margin-top: 240px;
    }
    .all {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
    }
</style>

<body>
    <div class=all>
        <div>
        <p id=text class="animate__animated animate__fadeInDown"><i>✦ Register Below ! ✦</i></p>
    </div>
    <div class=container>
        <form method=get>
            <input type=text
            class=inputs
            name=user
            placeholder="✤ Username ✤"
            required><br>
            
            <input type=password
            class=inputs
            name=pass
            placeholder="✤ Password ✤"
            required><br>
            
            <input type=submit
            class=enter
            value="✦ Register ✦" 
            <br>
        </form>
    </div>
    <div class=container2>
        <button class=register
        href="#"
        onclick="location.assign('index.php')"><b>✧ Login ✧</b></button>
    </div>
    </div>
</body>

</html>

