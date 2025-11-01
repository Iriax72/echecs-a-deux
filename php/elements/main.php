<?php
$color = "white";

function toggle_color(string $color):string {
    if ($color === "white") {
        return "black";
    }
    return "white";
}
?>

<table id="echiquier">
    <?php for ($i=0 ; $i<8 ; $i++) : ?>
        <tr>
            <?php for ($j=0 ; $j<8 ; $j++) : ?>
                <td class="<?= $color ?>"></td>
                <?php $color = toggle_color($color); ?>
            <?php endfor ?>
        </tr>
    <?php endfor ?>
</table>