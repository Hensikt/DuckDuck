<?php
require __DIR__ . "/../models/bezorger.php";

foreach ($statement as $dbBezorger) {

  echo '
  <table>

    <tr>
    <h3>' . $dbBezorger['Bezorger'] . '</h3>
    </tr>

    <tr>
    ' . $dbBezorger['Time'] . '
    </tr>

    <tr>
    ' . $dbBezorger['Route'] . '
    </tr>
    
  </table>
  <br>

  ';
}
