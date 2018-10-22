<?php require __DIR__.'/head.php'; ?>
        <h1 > NYHETSSIDA </h1>
</div>
              <div class="row content col-12">
                <div class="container">
    <!-- Gett all articels from specific author -->
                <?php foreach ($articles as $article) :
                    if ($article['author'] === $_GET['author']) :?>
                    <br>
                    <h2 > <?= $article['title']; ?> </h2>
                    <h6> <?= $article['content']; ?> </h6>
                    <a class="t-0" href="" style="color: black; text-decoration: none;">
                    <p> <?= $article['author'].'  '.$article['date']; ?> </p> </a>

                <?php endif; endforeach; ?>
                  </div>
                </div>
      </nav>
