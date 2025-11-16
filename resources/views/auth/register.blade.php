<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grid Example</title>
  <style>
    body {
      margin: 0;
      font-family: sans-serif;
    }

    .container {
      display: grid;
      grid-template-columns:100%;
      grid-template-rows:80px 1fr 2fr;
      height:100vh;
      gap: 20px;
      width:100vw;
    }

    nav {
      background: green;
      /* grid-column: 2; */
      padding: 10px;
      color: white;
    }

    

    aside {
      background: yellow;
      border: 3px solid maroon;
      padding: 10px;
      grid-row:1/3;

    }

    main {
      background: lightgray;
      padding: 20px;
      display: grid;
      grid-template-columns: 1fr; /* one-column layout for form */
      justify-items: start;
    }

    form {
      display: grid;
      grid-template-columns: 1fr;
      row-gap: 10px;
      width: 40%;
    }

    input, button {
      padding: 8px;
      box-sizing: border-box;
    }

    button {
      background: black;
      color: white;
    }

  </style>
</head>
<body>
  <div class="container">
    <nav>Registration Page</nav>
    <aside>Sidebar</aside>
    <main>
      <form>
        <input type="text" placeholder="Name">
        <input type="email" placeholder="Email">
        <input type="password" placeholder="Password">
        <button>Submit</button>
      </form>
    </main>
  </div>
</body>
</html>
