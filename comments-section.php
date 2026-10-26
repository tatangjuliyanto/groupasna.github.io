    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Sampaikan ulasan</h4>
            <?php if (isset($_GET['posted'])): ?>
            <p><?= $_GET['posted'] === '1' ? 'Terima kasih, ulasan Anda tersimpan.' : 'Ulasan gagal dikirim. Pastikan nama dan ulasan terisi, lalu coba lagi.' ?></p>
            <?php else: ?>
            <p></p>
            <?php endif; ?>
            <div class="wrapper">
              <form action="" method="POST" class="form">
                <div class="row">
                  <div class="input-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter your Name" maxlength="<?= COMMENT_NAME_MAX ?>" required>
                  </div>
                </div>
                <div class="input-group textarea">
                  <label for="comment">Comment</label>
                  <textarea id="comment" name="comment" placeholder="Enter your Comment" maxlength="<?= COMMENT_TEXT_MAX ?>" required></textarea>
                </div>
                <div class="input-group">
                  <button name="submit" class="btn">Post Comment</button>
                </div>
              </form>
              <div class="prev-comments">
                <?php if ($conn === null): ?>
                <p>Ulasan sedang tidak tersedia.</p>
                <?php endif; ?>
                <?php foreach ($comments as $row): ?>
                <div class="single-item">
                  <h4><?= e($row['name']) ?></h4>
                  <p><?= e($row['comment']) ?></p>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
