<div class="news-date"><?php $this->BcBaser->blogPostDate($post, 'Y年m月d日') ?></div>

<div class="news-content">
	<?php $this->Blog->postDetail($post) ?>
</div>

<a href="<?php echo h($blogContent->content->url) ?>" class="back-link">ニュース一覧に戻る</a>