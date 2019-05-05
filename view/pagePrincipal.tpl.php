
    <section id="section" class="jumbotron ">
        <h3 class="text-center " id="text_shadow">Chapitre après chapitre...</h3>
        <article id="flex_chapter">
            <?php
            foreach($posts as $post)
            {?> 
                <div id="chapter_size"class="jumbotron text-center">
                    
                    <h2 id="title">Chapitre <?= $post->getChapterNumber() ?></h2>
                    <p id="font_family_chapter"><?= $post->getTitle()?></p>
                    <a class="btn btn-link" href="index.php?action=chapterByNumber&amp;chapter_number=<?=$post->getChapterNumber()?>" class="p-2">Lire le chapitre</a>
                </div>
            <?php }?>
            
        </article>
    </section>
</body>