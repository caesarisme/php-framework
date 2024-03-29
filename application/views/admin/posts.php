<section id="index">
    <h2>Posts list:</h2>
    <div class="news-wrapper">
        <?php foreach ($posts as $post): ?>
            <article>
                <div class="article-img">
                    <img src="<?= $post['image'] ?>" alt="">
                </div>
                <div class="article-info">
                    <h4><?= $post['title'] ?></h4>
                    <p>
                        <?= substr($post['content'], 0, 300) ?>
                    </p>
                    <a href="/admin/edit/<?= $post['id'] ?>" class="btn-edit">Edit</a>
                    <a href="/admin/delete/<?= $post['id'] ?>" class="btn-delete">Delete</a>
                    <form action="/admin/star/<?= $post['id'] ?>" class="star_form" method="post">
                        <input type="submit" value="+ STAR">
                    </form>
                </div>
            </article>
        <?php endforeach; ?>

    </div>
</section>