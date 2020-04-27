<?php
/** @var $courses */

?>
<div class="container">
    <div class="row">
        <?php
        $i = 1;
        foreach ($courses as $key => $c):?>

            <table>
                <tr>
                    <td><?= $key ?></td>
                </tr>
                <tr>
                    <td>USD</td>
                    <td><?= $c['USD'] ?></td><? if ($i == 1): ?>
                        <td>--------></td><? endif ?></tr>
                <tr>
                    <td>EUR</td>
                    <td><?= $c['EUR'] ?></td><? if ($i == 1): ?>
                        <td>--------></td><? endif ?></tr>
            </table>

            <?php $i++; endforeach; ?>
    </div>
</div>