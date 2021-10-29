<?php snippet('header') ?>

<!-- templates/default.php -->


<ul>
  <?php foreach ($page->keywords()->split() as $keyword): ?>
  <li><?= $keyword ?></li>
  <?php endforeach ?>
</ul>

<section>

	<?= $page->date()->toDate('D, F \t\h\e n\t\h Y') ?>

	<?= $page->text()->footnotes() ?>

</section>

<!-- fin templates/default.php -->

<?php snippet('footer') ?>