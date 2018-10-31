<?php require __DIR__.'/header.php'; ?>
<h1 > NYHETSSIDA </h1>
</div>
<div class="row content col-12">
    <div class="container">
        <!-- Gett all articels from author id name compared to article name in articels -->
        <?php foreach ($articles as $article) :
            if ($article['id'] === $_GET['id']) :?>
            <img class="col-12 img-fluid" src="<?= $article['img'];?>" alt="">
            <br>
            <h2 class="col-12"> <?= $article['title']; ?> </h2>
            <h6 class="col-12"> <?= $article['content']; ?> </h6>
            <a class="t-0" href="authorarticle.php?author=<?= $article['author'] ?>" style="color: black;">
                <p class="col-12"> <?= $article['author'].'  '.$article['date']; ?> </p> </a>
                <p style="float: right;"> Like: <?= $article['like'] ?> 👍</p>
            <?php endif; endforeach; ?>
        </div>
    </div>




    <?php require __DIR__.'/footer.php'; ?>
