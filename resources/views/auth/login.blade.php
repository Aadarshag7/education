<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Grid Repeat Example</title>
<style>
  .container {
    display: grid;
    grid-template-columns: repeat( minmax(50px,1fr));
    gap: 10px;
    padding: 10px;
    background: lightgray;
    margin:10px;
    
  }

  .item {
    background: teal;
    color: white;
    padding: 20px;
    text-align: center;
    font-size: 1.2rem;
  }
</style>
</head>
<body>

<div class="container">
  <div class="item">1</div>
  <div class="item">2</div>
  <!-- <div class="item">3</div> -->
  <!-- <div class="item">4</div> -->
  <!-- <div class="item">5</div> -->
  <!-- <div class="item">6</div> -->
</div>

</body>
</html>
