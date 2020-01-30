<form action="<?php echo url('/save'); ?>" method="POST">
    <input type="hidden" name="id" value="<?php echo $bezorger['id']?>" />
    <div>
        <label for="naam">naam</label><br>
        <input type="text" name="naam" value="<?php echo $bezorger['naam'] ?>" required>
    </div>
    <div>
        <label for="bedrijf">bedrijf</label><br>
        <input type="text" name="bedrijf" value="<?php echo $bezorger['bedrijf'] ?>" required>
    </div>
    <div>
        <label for="lidmaatschap">lidmaatschap</label><br>
        <input type="text" name="lidmaatschap" value="<?php echo $bezorger['lidmaatschap'] ?>" required>
    </div>
    <input type="submit" value="edit">
</form>
