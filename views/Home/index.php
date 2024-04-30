  <div class="p-5 mb-4 lightBlueBackground rounded-3">
    <div class="container-fluid py-5 text-center">
      <h1 class="display-5 fw-bold">All Things Dallas College</h1>
      <p class="fs-5">
        Find tips and guides to help you through classes, student aid, FAFSA,
        and more!
      </p>
      <button class="btn redBackground btn-lg" type="button">
        All Blog Posts
      </button>
    </div>
  </div>
  <div class="container">
    <div class="row mb-2">
      <?php foreach ($blogs as $blog) : ?>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <h3 class="mb-0">
                <a class="text-dark" href="#"><?= htmlspecialchars($blog["title"]) ?></a>
              </h3>
              <div class="mb-1 text-muted">Nov 12</div>
              <p class="card-text mb-auto">
                <?= htmlspecialchars(mb_strlen($blog["text"]) > 200) ? mb_substr($blog["text"], 0, 140) . '...' : $blog["text"]; ?>
              </p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap" />
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- /.container -->

  <footer class="blog-footer">
    <p>
      ATDC
      <a href="https://getbootstrap.com/">All Things Dallas College</a> by
      <a href="https://twitter.com/mdo">Sstidham/Mmoten</a>.
    </p>
    <p>
      <a href="#">Back to top</a>
    </p>
  </footer>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script>
    Holder.addTheme("thumb", {
      bg: "#55595c",
      fg: "#eceeef",
      text: "Thumbnail",
    });
  </script>
</body>

</html>