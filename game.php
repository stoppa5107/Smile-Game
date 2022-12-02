
<!DOCTYPE html>

<html lang="en-gb">

<head>


    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="GENERATOR" content="A plain text editor">
    <meta name="Author" content="Marc Conrad">
    <meta name="Description" content="Smile Game Demo">
    <script>
        sessionStorage.removeItem('scores');
    </script>
    <!-- //Meta tag Keywords -->
    <link href="//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet">
    <!--/Style-CSS -->
    <link rel="stylesheet" href="css/style2.css" type="text/css" media="all" />
    <!--//Style-CSS -->

    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>🤔</title>
    <style>
        h1 {
            color: blue;
        }


        /* CSS from https://getcssscan.com/css-buttons-examples */
        .button-62 {
            background: linear-gradient(to bottom right, #EF4765, #FF9A5A);
            border: 0;
            border-radius: 12px;
            color: #FFFFFF;
            cursor: pointer;
            display: inline-block;
            font-family: -apple-system, system-ui, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            font-size: 16px;
            font-weight: 500;
            line-height: 2.5;
            outline: transparent;
            padding: 0 1rem;
            text-align: center;
            text-decoration: none;
            transition: box-shadow .2s ease-in-out;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            white-space: nowrap;
        }

        .text-success {
            color: green;
        }

        .h2-62 {
            line-height: 2.5;
        }


        .button-62:not([disabled]):focus {
            box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
        }

        .button-62:not([disabled]):hover {
            box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
        }
    </style>
    <script>
        var quest = "";
        var solution = -1;

        // let newgame = function(x) {
           
        //     startup();
        // }
        let handleInput = function(x) {

            let inp = document.getElementById("input");
            var note = document.getElementById("note");
            if (inp.value == solution) {
                let scores = parseInt(document.getElementById("scores").innerHTML);
                document.getElementById("scores").innerHTML = scores+1
                sessionStorage.setItem('scores', scores+1);

                note.innerHTML = '<span class="text-success">Correct!</span>';
               setTimeout(() => {
                startup();
               }, 100);
            } else {
                note.innerHTML = "Not Correct!❌";
            }
        }


        let startQuest = function(data) {
            var parsed = JSON.parse(data);
            quest = parsed.question;
            solution = parsed.solution;
            console.log(solution);
            let img = document.getElementById("quest");
            img.src = quest;
            let note = document.getElementById("note");
            note.innerHTML = "";
        }

        let fetchText = async function() {
            let response = await fetch('https://marcconrad.com/uob/smile/api.php');
            let data = await response.text();
            startQuest(data);
        }

        let startup = function() {
            fetchText();
        }
    </script>

</head>

<body>
    <script>
        startup();
    </script>
    <h1>The Smile Game</h1>
   
    <p id = "result"></p>

    <img id="quest" />
<div>
    <h2 class="h2-62" id="note">Not ready</h2>

    <h2>Enter the missing number: 
    <input class="button-62" id="input" type="number" step="1" min="0" max="9">
    <button class="btn btn-primary" onclick="handleInput()">Submit</button>
    
    <h3>Scores <span id="scores">0</span></h3>
    
    </h2>
     <a class="btn btn-warning" href="gameover.php">End Game</a>
 
    <a class="btn btn-danger" href="logout.php">Logout</a>
 
    </div>
    <p>
        <hr>
        <small>
            &copy; by <a href="https://marcconrad.com/marc-conrad/index.php?n=12&s=mc">Marc Conrad</a> 2022.
            The material on this page is presented "as is". There is no warranty implied. This application may be discontinued without notice
            and must not be used for commercial applications. There is also an <a href="doc.php">API</a> available.
            Use <a href="https://sanfoh.com/six/sym.php?smile=1" target="_new" >this link<a> to download up to 1000 games. 
         For any comments or suggestions
            <a href="http://marcconrad.com/consultancy/">contact Marc Conrad</a>. <em>Last update:</em> June 2022.
        </small>
    </p>

    <script>
    var count = 60;
setInterval(function(){
    count--;
    document.getElementById('result').innerHTML = "The game will end in " + count + " seconds 😟";
    if (count == 0) {
        window.location = 'gameover.php'; 
    }
},1000);
   </script>
</body>

</html>