<?php require __DIR__.'/head.php'; ?>
        <!-- Under Head -->

        <h1 > NYHETSSIDA </h1>

</div>
              <div class="row content col-12">
                  <div class="container">
                    <h1 style="font-family: arial;">NEWS</h1>
                    <?php foreach ($articles as $article) : ?>
                    <a class="t-0" href="article.php?id=<?= $article['id'] ?>" style="color: black; text-decoration: none;">
                    <img src="<?= $article['img'];?>" alt="">
                      <br>
                      <h2 > <?= $article['title']; ?> </h2>
                      <h6> <?= substr($article['content'], 0, 200).'...'; ?> </h6>
                      </a>
                      <form action="authorarticle.php" method="get" style="text-decoration: none;">
                        <input type="submit" name="author" value="<?= $article['author'] ?>" />
                      </form>

                      <a class="t-0" href="lala.html" style="color: black;">
                      <?= $article['author'].' </a> '.$article['date']; ?>
                      <br>
                      <br>
                  <?php endforeach ; ?>

                  </div>
              </div>
                  <!-- Över Footer -->

<?php require __DIR__.'/footer.php'; ?>
