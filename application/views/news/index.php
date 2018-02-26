<h2><?php echo $title; ?></h2>

<?php

    foreach ($news as $news_entry):?>

        <h3> <?php $news_entry['title'];?> </h3>

        <div class="main">

            <?php echo $news_entry['text']; ?>
        
        </div>

        <p><a href="<?php echo site_url('news/'.$news_entry['slug']); ?> "> View Article</a></p>

    <?php endforeach ?>    

