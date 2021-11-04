<li class='site-blog-post-comment' id="comment-<?=$comment['ID']?>">
    <div>
        <b><?=$comment['AuthorName']?></b>
        <time datetime="<?=$comment['DATE_CREATE']?>"><?=$comment['DATE_CREATE']?></time>
        <div>
            <?=$comment['TITLE']?>
        </div>
    </div>
    <div class='site-blog-post-comment-message'>
        <p><?=$comment['TextFormated']?></p>
    </div>
</li>