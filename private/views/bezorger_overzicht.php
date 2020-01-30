<?php

?>

<div class="readall_wrapper">
    <table>
        <thead>
            <tr>
                <th>Naam</th>
                <th>Bedrijf</th>
                <th>Lid sinds</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($result as $row) { ?>
            <tr>
                <td><?php echo escape($row['Bnaam']);?></td>
                <td><?php echo escape($row['Bedrijf']);?></td>
                <td><?php echo escape($row['Lidmaatschap']);?></td>

                <td><a href="update.php?id=<?php echo escape($row['id']);?>">Edit</a></td>
                <td><a href="delete.php?id=<?php echo escape($row['id']);?>">Delete</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

