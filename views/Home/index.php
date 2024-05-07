  <div class="p-5 mb-4 lightBlueBackground rounded-3">
    <div class="container-fluid py-5 text-center">
      <h1 class="display-5 fw-bold">All Things Dallas College</h1>
      <p class="fs-5">
        Find tips and guides to help you through classes, student aid, FAFSA,
        and more!
      </p>
      <button class="btn redBackground btn-lg" type="button">
        <a href="blogs" style="color: inherit; text-decoration: inherit; font-weight: inherit;">All Blog Posts</a>
      </button>
    </div>
  </div>
  <div class="container">
    <div class="row mb-2">
      <?php foreach ($blogs as $blog) : ?>
        <div class="col-md-6">
          <div class="card" style="width: 18rem;">
            <img src="/public/images/<?= htmlspecialchars($blog['imageLink']) ?>.jpg" class="card-img-top" alt="Stock Blog Image">
            <div class="card-body">
              <h5 class="card-title"><?= htmlspecialchars($blog["title"]) ?></h5>
              <div class="mb-1 text-muted"><?= htmlspecialchars($blog["Date"]) ?></div>
              <p class="card-text"><?= htmlspecialchars(mb_strlen($blog["text"]) > 200) ? mb_substr($blog["text"], 0, 140) . '...' : $blog["text"]; ?></p>
              <a href="./blogs/<?= htmlspecialchars($blog['id']) ?>/show" class="btn redBackground">Continue Reading</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>