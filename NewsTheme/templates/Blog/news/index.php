<?php if($posts) : ?>
    <?php foreach ($posts as $post): ?>
        <div class="news-item">
            <div class="news-title">
                <a href="<?php echo h($this->Blog->getPostLinkUrl($post)) ?>"><?php $this->Blog->postTitle($post, false) ?></a>
            </div>
            <div class="news-date"><?php echo h($this->Blog->getPostDate($post, 'Y年m月d日')) ?></div>
            <div class="news-summary">
                <?php $this->Blog->postContent($post, false); ?>
            </div>
            <a href="<?php echo h($this->Blog->getPostLinkUrl($post)) ?>" class="read-more">続きを読む</a>
        </div>
    <?php endforeach ?>
<?php else : ?>
    <p class="no-data">記事がありません</p>
<?php endif ?>