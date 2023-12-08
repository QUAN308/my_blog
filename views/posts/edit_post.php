
    <div  class="bg-dark text-light" role="">
        <h4 style="padding: 5px 10px; margin-bottom: 0;" class="">Chỉnh sửa bài viết</h4>
    </div>
    <div class="row">
        <?php foreach($items as $val): ?>
        <div class="post_item col-md-6 mt-3">
            <a class="button_delete_post d-flex justify-content-end pb-2 text-decoration-none" href="?url=delete-post&id=<?=$val['id']?>">
                <button
                    style="
                        border: none;
                        padding: 5px 10px;
                        background-color: red;
                        color: #fff;
                        border-radius: 5px;
                    "
                >Xóa bài viết</button>
            </a>
            <div class="image">
                <?php if($val['image'] != 0): ?>
                    <a href="?url=edit-from&id=<?= $val['id'] ?>"><img class="img-fluid" style="width: 450px; height: 310px; object-fit: cover;" src="assets/upload/<?php echo $val['image'] ?>" alt=""></a>
                <?php elseif($val['image'] == "" || $val['image'] == 0): ?>
                    <a href="?url=edit-from&id=<?= $val['id'] ?>"><img class="img-fluid" style="width: 450px; height: 310px; object-fit: cover;" src="assets/image/not_image.png" alt=""></a>
                <?php endif; ?>
            </div>
            <div class="title">
                <a href="?url=edit-from&id=<?= $val['id'] ?>" class="text-decoration-none text-dark"><?php echo $val['title_detail_post'] ?></a>
            </div>
            <div class="date_time text-black-50">
                <?= $val['created_at'] ?>
                <?php if($val['updated_at'] != ""): ?>
                    - <a href="?url=post-detail&id=<?= $val['id'] ?>">Đã được cập nhật lại vào</a> - 
                    <?= $val['updated_at']; ?>
                <?php endif; ?>
            </div>
            <div style="height: 50px; overflow: hidden;text-overflow: ellipsis;" class="short_post">
                <a href="?url=edit-from&id=<?= $val['id'] ?>" class="text-decoration-none text-dark">
                    <?php echo $val['content_post'] ?>
                </a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>