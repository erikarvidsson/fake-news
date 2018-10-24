<?php require __DIR__.'/head.php'; ?>
        <!-- Under Head -->

        <h1 > NYHETSSIDA </h1>

</div>
              <div class="row content col-12">
                  <div class="container">
                    <h1>NEWS</h1>




                  <?php articleByAuthor($articles['id'], $_POST) ?>

                    <?php foreach ($articles as $article) : ?>
                      <br>
                      <a class="t-0" href="" style="color: black; text-decoration: none;">
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



                  <!-- Över Footer -->
                  </div>
              </div>


<?php require __DIR__.'/footer.php'; ?>
