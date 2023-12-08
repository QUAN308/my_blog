    <div style="width: 100%; margin: auto;" class="row justify-content-between">
        <?php foreach($items as $val): ?>
        <div style="width: 450px;" class="post_item col-md-6 mt-3 p-0 m-0">
            <div style="width: 450px;" class="image">
                <?php if($val['image'] != 0): ?>
                    <a href="?url=post-detail&id=<?= $val['id'] ?>"><img class="img-fluid" style="width: 450px; height: 310px; object-fit: cover;" src="assets/upload/<?php echo $val['image'] ?>" alt=""></a>
                <?php elseif($val['image'] == 0): ?>
                    <a href="?url=post-detail&id=<?= $val['id'] ?>"><img class="img-fluid" style="width: 450px; height: 310px; object-fit: cover;" src="assets/image/not_image.png" alt=""></a>
                <?php endif; ?>
            </div>
            <div class="title">
                <a href="?url=post-detail&id=<?= $val['id'] ?>" class="text-decoration-none text-dark"><?php echo $val['title_detail_post'] ?></a>
            </div>
            <div class="date_time text-black-50">
                <?= $val['created_at'] ?>
                <?php if($val['updated_at'] != ""): ?>
                    - <a href="?url=post-detail&id=<?= $val['id'] ?>">Đã được cập nhật lại vào</a> - 
                    <?= $val['updated_at']; ?>
                <?php endif; ?>
            </div>
            <div style="height: 50px; overflow: hidden;text-overflow: ellipsis;" class="short_post">
                <a href="?url=post-detail&id=<?= $val['id'] ?>" class="text-decoration-none text-dark">
                    <?php echo $val['content_post'] ?>
                </a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>