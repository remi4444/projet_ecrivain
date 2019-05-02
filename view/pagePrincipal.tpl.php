
    <section id="section" class="jumbotron ">
        <h3 class="text-center text-primary">Chapitres</h3>
        <article >
            <?php
            foreach($posts as $post)
            {?> 
                <div >
                    
                    <h2 >chapitres <?= $post->getChapterNumber() ?></h2>
                    <p ><?= $post->getTitle()?></p>
                    <a href="index.php?action=chapterByNumber&amp;chapter_number=<?=$post->getChapterNumber()?>" class="p-2">Lire la suite</a>
                </div>
            <?php }?>
            
        </article>
    </section>
</body>