<body>
<div id="txtHint"></div>
<script>

    function ajax() {
        let xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                txtHint.innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "../private/models/winkelwagen.php?q=", true);
        xmlhttp.send();
    };

    let test = localStorage.getItem(1);

    txtHint.innerHTML = test;

</script>
</body>


