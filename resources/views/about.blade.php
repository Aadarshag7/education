<!DOCTYPE html>
<html>
<head>
<style>
.box {
  width: 950px;
  height: 150px;
  background: steelblue;
  transition: transform 1.2s;
}

/* State change triggers automatic interpolation */
.box:hover {
  transform: translateY(40px);
  background: red;
}
.button {
  padding: 15px 25px;
  background: #333;
  color: white;

  border-radius: 8px;
  transition: letter-spacing 1.3s, padding 0.3s;
}

.button:hover {
  letter-spacing: 10px;
  padding: 15px 80px;
}
</style>

<button class="button">Hover Me</button>

</style>
</head>
<body>

<div class="box"></div>


</body>
</html>
