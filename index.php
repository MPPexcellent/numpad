<!DOCTYPE html>
<html lang="de" dir="ltr">
<head>
  <meta charset="utf-8">
  <script src="jquery-3.3.1.min.js" type="text/javascript"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <title>Numpad</title>
</head>
<script type="text/javascript">
$(document).ready(function () {
  var keystrokes = 0;
  $('#cinput').keyup(function () {
    keystrokes++;
    if (this.value.length == 4) {
      $('#submit').click();
    }
  });
  <?php
  for ($j=0; $j < 10; $j++) {
    echo "$('#$j').click(function () {";
      echo "console.log($j);";
      echo "var schoda = $('#cinput').val();";
      echo "$('#cinput').val(schoda+= $j);";
      echo "keystrokes++;";
      echo "if (+keystrokes > 3 ) { $('#submit').click();}";
      echo "});";
    }
    ?>
  });
  </script>
  <style media="screen">
  body{
    font-family: calibri;
  }
  #cinput{
    text-align: center;
    width: 210px;
    height: 100px;
    font-size: 60px;
    border-radius: 5px;
  }
  .numfield{
    background-color: grey;
    margin: 5px;
    width: 210px;
    height: inherit;
    padding: 5px;
    float: left;
    align-self: center;
    align-items: center;
    border-radius: 5px;
  }
  .num{
    width: 50px;
    height: 50px;
    background-color: white;
    margin: 5px;
    padding: 5px;
    font-size: 35px;
    float: left;
    border-radius: 5px;
    cursor: pointer;
  }
  .center{
    width: 220px;
  }
  .last{
    margin-left: 75px;
  }
  </style>
  <body>
    <center>
      <form class="" action="execute.php" method="post">
        <input type="password" id="cinput" name="code" placeholder="code" autofocus maxlength="4">
        <br>
        <input type="submit" id="submit" value="entsperren!">
      </form>
      <div class="center">
        <div class="numfield">
          <?php
          for ($i=1; $i < 10 ; $i++) {
            echo "<div class='num' id='$i'>$i</div>";
          }
          ?>
        </div>
      </div>
    </center>
  </body>
  </html>
