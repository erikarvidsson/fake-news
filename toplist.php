<?php require __DIR__.'/header.php'; ?>
<!-- Under head.php -->

<h1 > NYHETSSIDA </h1>

</div>
<div class="row content col-12">
    <div class="container">
        <h1 style="font-family: arial;">BEST NEWS</h1>

        <!--  Article will order by like count  -->
        <?php usort($articles, 'sortByLikes'); ?>
        <!--  Gets and print articel from array -->
        <?php foreach ($articles as $article) : ?>
            <a class="t-0" href="article.php?id=<?= $article['id'] ?>" style="color: black; text-decoration: none;">
                <img class="img-fluid" src="<?= $article['img'];?>" alt="">
                <br>
                <h2 > <?= $article['title']; ?> </h2>
                <!-- >Only shows the first 400 letters from the article content. -->
                <h6> <?= substr($article['content'], 0, 400).'...'; ?> </h6>
            </a>

            <a class="t-0" href="authorarticle.php?author=<?= $article['author'] ?>" style="color: black;">
                <?= $article['author'].' </a> '.$article['date']; ?>
            </a>
            <p style="float: right;"> Like: <?= $article['like'] ?> 👍</p>

            <br>
            <br>
            <br>
        <?php endforeach ; ?>

    </div>
</div>
<!-- Över footer.php -->

<?php require __DIR__.'/footer.php'; ?>
