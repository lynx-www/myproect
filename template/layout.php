<!DOCTYPE html>
  <html lang="ru">
  <head>
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <header class="main-header">
      <h1 class="visually-hidden">Дневник погоды</h1>
    </header>
    <div class="main-content">
      <main class="content"><?= $content; ?></main>
    </div>
    <footer class="main-footer">Дневник наблюдения за погодой. Все права защищены</footer>
  </body>
</html>