    <div class="detail_post pt-5">
            <div class="title">
                <h1 style="font-weight: 700;"><?= $data_detail['title_detail_post'] ?></h1>
            </div>
            <div class="date_time">
                <p>
                    <?= $data_detail['created_at'] ?>
                    <?php  if($data_detail['updated_at'] != ""): ?>
                        - <b>Đã được cập nhật lại vào</b> -
                        <?= $data_detail['updated_at']; ?>
                    <?php endif; ?>
                </p>
            </div>
            <div class="image_post text-center">
                <img style="width: 100%;" src="assets/upload/<?= $data_detail['image'] ?>" alt="">
            </div>
            <div class="content_post_detail">
                <p class="mt-4" style="font-size: 18px;"><?= $data_detail['content_post'] ?></p> 
            </div>
            <div class="comments border-top border-dark">
                <div class="comment_user pt-4">
                    <?php if($data_cmt != Null): ?>
                        <div class="infor_user d-flex">
                            <img style="width: 40px; height: 40px; border-radius: 50%;" class="" src="assets/image/Rectangle.png" alt="">
                            <p class="pt-2 ps-3 fw-bold">Name user</p>
                        </div>
                        <p>imply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
                    <?php elseif($data_cmt == Null): ?>
                        <div style="width: 100%;" class="not_comment text-center pb-4">
                            <h4>Hiện chưa có bình luận nào</h4>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="write_comment">
                    <form action="" method="post">
                        <div class="form_comment">
                            <textarea class="p-2" placeholder="Viết bình luận..." name="comment_content" id="" cols="100" rows="5"></textarea>
                            <div style="position: absolute; right: 0;">
                                <input class="btn_post_comment" type="submit" value="Đăng">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>