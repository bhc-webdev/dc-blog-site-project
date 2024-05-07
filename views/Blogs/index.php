<div class="p-5 mb-4 lightBlueBackground rounded-3">
    <div class="container-fluid py-5 text-center">
        <h1 class="display-5 fw-bold">Blogs Posts</h1>
        <p class="fs-5">
            Look through all of the content posted by students and staff!
        </p>
        <button class="btn redBackground btn-lg" type="button">
        <a href="home" style="color: inherit; text-decoration: inherit; font-weight: inherit;">Back to Home</a> 
      </button>
    </div>
</div>
<!-- Blogs -->
<div class="container">
    <div class="row mb-2">
      <?php foreach ($blogs as $blog) : ?>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <h3 class="mb-0">
                <a class="text-dark" href="#"><?= htmlspecialchars($blog["title"]) ?></a>
              </h3>
              <div class="mb-1 text-muted"><?= htmlspecialchars( $blog["Date"]) ?></div>
              <p class="card-text mb-auto">
                <?= htmlspecialchars(mb_strlen($blog["text"]) > 200) ? mb_substr($blog["text"], 0, 140) . '...' : $blog["text"]; ?>
              </p>
              <a href="./blogs/<?= htmlspecialchars($blog['id']) ?>/show">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap" />
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>