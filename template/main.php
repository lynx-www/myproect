<div class="content__main-col">
  <h2 class="visually-hidden">Последние записи</h2>
  <a class="button" href="/gif/add">Добавить новую</a>

  <ul class="items-list">
    <?php foreach ($items as $item): ?>
      <?=renderTemplate('inc/item.php', ['item' => $item]);?>
    <?php endforeach; ?>
  </ul>
</div>