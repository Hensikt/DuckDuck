<?php
require __DIR__ . "/../models/maaltijd_list.php";

//foreach ($statement as $iets) {
//
//    echo "<hr>";
//    echo "<div class='maaltijdenDiv'>";
//    echo "<h3 class='maaltijdenTitle'>" . $iets['title'] . "</h3>";
//    echo '<img class="maaltijdenImg" src="'.$iets['image'].'" alt="help" width="250" height="250">';
//    echo "<br>";
//    echo "<p>" . $iets['description'] . "</p>";
//    echo "<a href='maaltijden/" . $iets['id'] . "'>Details</a>";
//    echo "</div>";
//}



?>

<body>
<div class="search">
    <h2>Zoek op naam</h2>
    <input type="text" id="searchCountry" placeholder="title">
</div>
<div id="txtHint"></div>
<script>

    let text = document.getElementById('searchCountry');

    text.addEventListener('keyup', function(){
        ajax();
    });
    ajax();

    function ajax() {
        let str = text.value;
        let xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                txtHint.innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "../private/models/maaltijden.php?q=" + str, true);
        xmlhttp.send();
    };


</script>
</body>

