<?php
    if(!isset($_COOKIE['userid'])) {
        header("Location: index.php");
    } 
    
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', 'teeny');
    define('DB_NAME', 'cat');
?>

<html>
    <head>
        <title>≽^- ˕ -^≼</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    </head>
    <style>
        body {
        background-color:#141d2e;
        font-family: Arial;
        }
        .tab {
            width: 150px;
            height: 50px;
            background-color: #331728;
            color: #4a6aa1;
            border-radius: 25px;
            border: 2px solid #331728;
            font-weight: bold;
            margin-bottom:20px;
            font-size:15px;
        }
        .tab:hover {
            background-color:#f5c6e3;
            border: 2px solid #331728;
        }
        .tabs {
            background-color: #afbaab;
            border-radius: 0px 25px 0px 25px;
            padding:25px;
            width: 150px;
        }
        #createcat {
            width:150px;
            height: 50px;
            background-color: #f5c6e3;
            color: #331728;
            border: 2px solid #331728;
            font-weight: bold;
        }
        #createcat:hover {
            background-color: #141d2e;
            border: 2px solid #f5c6e3;
            color: #f5c6e3;
        }
        .bodytext {
            background-color: #7c99d6;
            width: 600px;
            height: 350px;
            margin-left: 30px;
            border-radius: 25px 0px 25px 0px;
            padding:50px;
            text-align: justify;
            color: white;
            font-weight: bold;
            letter-spacing: 0.5px;
            text-align: center;
            overflow:scroll;
        }
        .bodytext::-webkit-scrollbar {
            display: none;
        }
        .animate__animated.animate__flash {
            --animate-duration:3s;
        }
        .animate__animated.animate__bounce {
            --animate-duration: 3s;
        }
        #teeny {
            border-radius:100%;
            margin-top:15px;
            border: 2px solid white;
        }
        #teeny:hover {
            border: 2px solid #f5c6e3;
        }
        .entire {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
        a {
            color:white;
        }
    </style>
    <body>
        <div class=entire>
            <div style="display: flex;">
            <div class=tabs>
            <button onclick=location.href='main.php'
            class=tab>✦ Home</button><br>
            <button onclick="loadcheck()"
            class=tab>✧ Checklist</button><br>
            <button onclick="loaddesc()"
            class=tab>✦ Site Description</button><br>
            <button onclick="loadabout()"
            class=tab>✧ About Us</button><br>
            <button onclick=location.href='index.php'
            class=tab>✦ Logout</button><br>
            <button onclick=location.href='cat.html'
            id=createcat
            class="animate__animated animate__flash animate__infinite">!!! CLICK HERE TO CREATE A CAT !!!</button>
            </div>
        <script>
            function loadcheck() {
                const xhttp = new XMLHttpRequest();
                xhttp.onload = function() {
                    document.getElementById("txt").innerHTML = this.responseText;
                }
                xhttp.open("GET", "checklist.txt");
                xhttp.send();
            }
            function loaddesc() {
                const xhttp = new XMLHttpRequest();
                xhttp.onload = function() {
                    document.getElementById("txt").innerHTML = this.responseText;
                }
                xhttp.open("GET", "sitedesc.txt");
                xhttp.send();
            }
            function loadabout() {
                const xhttp = new XMLHttpRequest();
                xhttp.onload = function() {
                    document.getElementById("txt").innerHTML = this.responseText;
                }
                xhttp.open("GET", "about.txt");
                xhttp.send();
            }
        </script>
        <div class=bodytext id=txt>
            <div class=txt
            style="width: 80%; margin: auto;">
            Hey everyone! :D<br>.・┆✦ ʚ♡ɞ ✦ ┆・.<br>Welcome to my page! Here, you can create your own cat! This is in honor of my very own cat, Teeny (shown below). She's very cute and I love her with all my heart.<br>
            <img id=teeny src="teeny.PNG" width=200 height=200
            class="animate__animated animate__flip"></img><br>
            <p class="animate__animated animate__bounce animate__infinite">*‧₊˚ੈ✩‧₊˚₊˚⊹♡ ᓚ₍ ^. .^₎</p>
            </div>
        </div>
        </div>
        </div>
        
        
    </body>
</html>