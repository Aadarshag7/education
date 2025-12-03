<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Transform vs Opacity (Simple)</title>
  <style>
    body {
      background: #eee;
    }

    .red {
      width: 150px;
      height: 150px;
      background: red;
      position: absolute;
      top: 50px;
      left: 50px;
      z-index: 2;
    }

    /* Example 1: transform creates stacking context */
    .transform-parent {
      position: absolute;
      top: 100px;
      left: 80px;
      width: 150px;
      height: 150px;
      background: black;
      transform: scale(1);
      z-index: 1;
    }

    .transform-child {
      background: yellow;
      width: 100px;
      height: 100px;
      position: absolute;
      top: 25px;
      left: 25px;
      z-index: 999; /* doesn't go above red because trapped */
    }

    /* Example 2: opacity creates stacking context */
    .opacity-parent {
      position: absolute;
      top: 270px;
      left: 80px;
      width: 150px;
      height: 150px;
      background: black;
      opacity: 0.9; creates stacking context */
      z-index: 2;
    }

    .opacity-child {
      background: lime;
      width: 100px;
      height: 100px;
      position: absolute;
      top: 250px;
      left: 25px;
      z-index: 999; /* trapped again */
    }
   .op{
    background:blue;
    width:100px;
    height:100px;
    position:absolute;
    top:270px;
    right: 200px;
    z-index:3;
    opacity:0.8;
    
   }

   .op1{
    background:red;
    width:50px;
    height:50px;
    position:relative;
    top:10px;
    right:50px;
    z-index: 999;
   }
  </style>
</head>
<body>
  <div class="red"></div>

  <div class="transform-parent">
    <div class="transform-child"></div>
  </div>

  <div class="opacity-parent">
    <div class="opacity-child"></div>
  </div>
  <div class="op">
    <div class="op1"></div>
    </div>
  </div>
</body>
</html>

