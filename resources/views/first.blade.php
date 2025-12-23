<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="first">
        <input type="text" id="firs" placeholder="name" >
        <button type ="submit">Done</button>

    </form>
    <p id="result"></p>
    
    <meta name="csrf-token" content={{csrf_token()}}>
    <script src="admin/js/first.js"></script>

</body>
</html>