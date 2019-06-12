
    <section id="section" class="jumbotron ">
        <h3 class="text-center " id="text_shadow">Chapitre après chapitre...</h3>
        <article id="flex_chapter">
            <?php
            foreach($posts as $post)
            {?> 
                <div class="chapter_size jumbotron text-center">
                    
                    <h2 class="title">Chapitre <?= $post->getChapterNumber() ?></h2>
                    <p class="font_family_chapter"><?= $post->getTitle()?></p>
                    <a class="link_page_chapter p-2 btn btn-link" href="index.php?action=chapterById&amp;id=<?=$post->getId()?>">Lire le chapitre</a>
                </div>
            <?php }?>
            
        </article>
    </section>
    
