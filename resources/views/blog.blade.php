<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Row Subgrid Example</title>

<style>
  .parent {
    display: grid;
    grid-template-rows: 100px 200px 150px; /* 3 parent rows */
    gap: 10px;
    background: lightgray;
    padding: 10px;
  }

  .parent > div {
    background: #ffd54f;
    padding: 10px;
    font-size: 20px;
    text-align: center;
  }

  /* --- CHILD USING ROW SUBGRID --- */
  .child {
    display: grid;
    grid-template-rows: subgrid; /* inherit parent rows */
    grid-row: 1 / 4; SPAN ALL PARENT ROWS — REQUIRED
    background: #2196f3;
    color: white;
    gap: 5px;
    padding: 10px;
  }

  .child > div {
    background: rgba(255,255,255,0.3);
    padding: 10px;
    font-size: 18px;
  }
</style>
</head>

<body>

<h2>Row Subgrid Working Example</h2>

<div class="parent">
  <div>Parent Row 1</div>
  <div class="child">
    <div>Grandchild 1 (aligned to row 1)</div>
    <div>Grandchild 2 (aligned to row 2)</div>
    <div>Grandchild 3 (aligned to row 3)</div>
  </div>
  <div>Parent Row 3</div>
</div>

</body>
</html>
