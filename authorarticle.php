<?php require __DIR__.'/head.php'; ?>
        <h1 > NYHETSSIDA </h1>
</div>
              <div class="row content col-12">
                <div class="container">
    <!-- Gett all articels from specific author -->
              <?php foreach ($articles as $article) :
                    if ($article['author'] === $_GET['author']) :?>
                  <a class="t-0" href="article.php?id=<?= $article['id'] ?>" style="color: black; text-decoration: none;">
                    <img src="<?= $article['img'];?>" alt="">
                    <br>
                    <h2 > <?= $article['title']; ?> </h2>
                    <h6> <?= substr($article['content'], 0, 400).'...'; ?> </h6>
                  </a>
                    <a class="t-0" href="" style="color: black; text-decoration: none;">
                    <p> <?= $article['author'].'  '.$article['date']; ?> </p> </a>
              <?php endif; endforeach; ?>
                  </div>
                </div>


      <?php require __DIR__.'/footer.php'; ?>
