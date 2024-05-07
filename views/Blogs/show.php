<div class="p-5 mb-4 lightBlueBackground rounded-3">
    <div class="container-fluid py-5 text-center">
        <h1 class="display-5 fw-bold"><?= htmlspecialchars($blog["title"]) ?></h1>
        <p class="fs-5">

        </p>
        <button class="btn redBackground btn-lg" type="button">
            <a href="<?= WEB_ROOT ?>Blogs" style="color: inherit; text-decoration: inherit; font-weight: inherit;">Back to All Blogs</a>
        </button>
    </div>
</div>
<div class="post blogText">

    <p class="blog-post-meta">
        <?= htmlspecialchars( $blog["Date"]) ?> by <a href="#"><?= htmlspecialchars($blog["author"]) ?></a>
    </p>
    <h2 class="subTitle"><?= htmlspecialchars($blog["subtitle"]) ?></h2>
    <p class="fs-5 text">
        <?= htmlspecialchars($blog["text"]); ?>
    </p>
</div>