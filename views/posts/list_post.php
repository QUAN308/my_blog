<div id="posts">
    <div class="row">
        <?php foreach($items as $val): ?>
        <div class="post_item col-md-6 mt-3">
            <div class="image">
                <a href="?url=post-detail&id=<?= $val['id'] ?>"><img class="img-fluid" style="width: 450px; height: 310px; object-fit: cover;" src="assets/upload/<?php echo $val['image'] ?>" alt=""></a>
            </div>
            <div class="title">
                <a href="?url=post-detail&id=<?= $val['id'] ?>" class="text-decoration-none text-dark"><?php echo $val['title_detail_post'] ?></a>
            </div>
            <div class="date_time text-black-50"><?= $val['created_at'] ?></div>
            <div style="height: 50px; overflow: hidden;text-overflow: ellipsis;" class="short_post">
                <a href="?url=post-detail&id=<?= $val['id'] ?>" class="text-decoration-none text-dark">
                    <?php echo $val['content_post'] ?>
                </a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>