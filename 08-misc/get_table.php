<?php
function multiplication_table(int $rows = 1, int $cols = 1): string {
  ob_start(); ?>
  <table border="1" width="100%"> <?php
    for ($i=1; $i <= $rows; $i++) { ?>
      <tr> <?php
        for ($j=1; $j <= $cols; $j++) { ?>
          <td><?=$j?> ⋅ <?=$i?> = <?=$i*$j?></td> <?php
        } ?>
      </tr> <?php
    } ?>
  </table> <?php
  return ob_get_clean();
}

$data = [
  'param1' => 'Value1',
];