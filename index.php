<?php require __DIR__.'/head.php'; ?>
        <!-- Under head.php -->

        <h1 > NYHETSSIDA </h1>

</div>
              <div class="row content col-12">
                  <div class="container">
                    <h1 style="font-family: arial;">NEWS</h1>
                  <!--  Sort by date -->
                    <?php usort($articles, 'sortByDate');?>
                  <!--  Gets and print articel from array -->
                    <?php foreach ($articles as $article) : ?>
                    <a class="t-0" href="article.php?id=<?= $article['id'] ?>" style="color: black; text-decoration: none;">
                    <img src="<?= $article['img'];?>" alt="">
                      <br>
                      <h2 > <?= $article['title']; ?> </h2>
                      <h6> <?= substr($article['content'], 0, 400).'...'; ?> </h6>
                      </a>

                      <a class="t-0" href="authorarticle.php?author=<?= $article['author'] ?>" style="color: black;">
                      <?= $article['author'].' </a> '.$article['date']; ?>
                    </a>
                    <p style="float: right;"> Like: <?= $article['like'] ?> </p>

                      <br>
                      <br>
                  <?php endforeach ; ?>

                  </div>
              </div>
                  <!-- Över footer.php -->

<?php require __DIR__.'/footer.php'; ?>
