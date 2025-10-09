<?php
// Button contract: $label (string), $href (string), $disable (bool), $dark (bool)
// "Yellow brown" = bg-yellow-700 (Tailwind), text-white

if ($disable ?? false) :
?>
  <a href="<?= esc($href ?? '#') ?>" class="inline-block opacity-50 shadow px-4 py-2 rounded text-white" style="background-color: #9c5d00ff;" disabled>
    <?= esc($label ?? 'Action') ?>
  </a>
<?php
else:
?>
  <a href="<?= esc($href ?? '#') ?>" class="inline-block shadow px-4 py-2 rounded text-white" style="background-color: #9c5d00ff;">
    <?= esc($label ?? 'Action') ?>
  </a>
<?php
endif;
?>

