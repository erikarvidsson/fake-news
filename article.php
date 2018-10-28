<?php require __DIR__.'/head.php'; ?>
        <h1 > NYHETSSIDA </h1>
</div>
              <div class="row content col-12">
                <div class="container">
    <!-- Gett all articels from specific id in articels -->
              <?php foreach ($articles as $article) :
                    if ($article['id'] === $_GET['id']) :?>
                    <img src="<?= $article['img'];?>" alt="">
                    <br>
                    <h2 > <?= $article['title']; ?> </h2>
                    <h6> <?= $article['content']; ?> </h6>
                    <a class="t-0" href="authorarticle.php?author=<?= $article['author'] ?>" style="color: black;">
                    <p> <?= $article['author'].'  '.$article['date']; ?> </p> </a>
              <?php endif; endforeach; ?>
                  </div>
                </div>




      <?php require __DIR__.'/footer.php'; ?>
