<?php require __DIR__.'/header.php'; ?>
<!-- Under Head -->

<h1 > NYHETSSIDA </h1>

</div>
<div class="row content col-12">
    <div class="container">
        <h1 style="font-family: arial;">AUTHORS</h1>
        <br>
        <br>
        <div class="row col-12" style="justify-content: center;">

            <?php foreach ($authors as $author) : ?>
                <br>
                <a class="col-4" href="authorarticle.php?author=<?= $author['name']; ?>" style="color: black; text-decoration: none;">
                    <h2 style="justify-content: center; text-align: center;"> Reed alla articels by: </h2>
                    <div class="container" style="justify-content: center; text-align: center;">
                        <img class="img-fluid" src="<?= $author['img']; ?>" alt="Author name" style="border-radius: 50%; width: 250px; max-width: 100%;">
                        <h2 style="justify-content: center; text-align: center;"> <?= $author['name']; ?> </h2>
                        <h3> Quote: </h3>
                        <p style="justify-content: center; text-align: center; padding-bottom: 50px;"> <?= $author['quote']; ?> </p>
                    </div>
                </a>

            <?php endforeach ; ?>



            <!-- Över Footer -->
        </div>
    </div>
</div>

<?php require __DIR__.'/footer.php'; ?>
