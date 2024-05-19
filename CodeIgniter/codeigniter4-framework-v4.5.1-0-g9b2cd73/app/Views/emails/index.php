<h2><?= esc($title) ?></h2>

<?php if ($email_list !== []): ?>

    <?php foreach ($email_list as $news_item): ?>

        <h3><?= esc($news_item['title']) ?></h3>
        <h3><?= esc($news_item['recepient']) ?></h3>
        <div class="main">
            <?= esc($news_item['body']) ?>
        </div>
        <p><a href="/emails/<?= esc($news_item['title'], 'url') ?>">View Email</a></p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No Emails</h3>

    <p>Unable to find any emails for you.</p>

<?php endif ?>