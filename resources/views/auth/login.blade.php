<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        nav{
            background:black;
            color:white;
            height: 50px;
            font-size:larger;    

        }

        .container{
            width:100%;
            display: flex;
            border:10px solid black;
        }


        aside{
            width:20%;
            background:purple;
            height:1000px;
            border: 10px solid greenyellow;
            font-size: larger;
        }

        form input{
            width:150px;
            padding: 10px;
            box-sizing: border-box;
            /* margin-left: 20px; */
            border:10px solid black;
            margin: 0
            ;
        
        }
        

        main {
            flex:1;
            background:aqua;
            border: 50 px solid darkblue;
        }

        </style>

</head>
<body>
<nav>
<marquee><p>  Welcome to Registration! </p></marquee>
</nav>
<div class="container">
<aside>
    <P> Register </P>
</aside>
<main>
    <form action="" method="POST">
        <input type="email" name="email" placeholder="Email" autocomplete="OFF">
        <input type="password" name="password" placeholder="Password" autocomplete="new-password">
        <button type="submit">Submit</button>
    </form>
</main>
</div>

    
</body>
</html>