

    <section id="section_page_chapter">
            <?php
            foreach($posts as $post)
            {?> 
                <h2 class="text-danger text-center">chapitre <?= $post->getChapterNumber() ?></h2>
                <p id="title_chapter" class="text-info text-center"><?= $post->getTitle()?></p>
                <p id="chapter_paragraph"><?= $post->getParagraph()?></p>
                <?php 
                if($post->getChapterNumber()==1 )
                {?>                                                  
                    <a href="index.php?action=nextChapter&amp;chapter=<?=$post->getChapterNumber()?>">Chapitre suivant</a>
                <?php 
                } 
                elseif ($post->getChapterNumber()== $countNbChapter)
                {?>
                                                            
                    <a href="index.php?action=beforeChapter&amp;chapter=<?=$post->getChapterNumber()?>">Chapitre precedent</a>
                <?php 
                }
            
                else
                {?>
                    <a href="index.php?action=beforeChapter&amp;chapter=<?=$post->getChapterNumber()?>">Chapitre precedent</a>
                    <a href="index.php?action=nextChapter&amp;chapter=<?=$post->getChapterNumber()?>">Chapitre suivant</a>
                <?php
                }
            }?>
    </section>

    <section id="forum">
                <h2 class="text-light text-center">Forum du chapitre</h2>
                
                
               <?php 
                foreach($messages as $message)
                {?> 
                
                <div class="jumbotron" id="message_forum">
                    <p class="name_forum"> <?= $message->getName() ?> : </p>
                    <p class="comment_forum"> <?= $message->getComment()?></p>
                    <p class="text-right "> le <?= $message->getDate()?></p>
                    <a href="index.php?action=messageReport&amp;id=<?= $message->getId()?>&amp;chapter=<?= $message->getChapter_message()?>">Signaler à l'admin</a>
                </div>
                
            <?php }?>
                <p class="container text-center alert alert-info" id="form_forum">Envoyer un message : </p>
                <form class=" alert alert-info text-center container" action="index.php?action=addMessage&amp;chapter_number=<?=$post->getChapterNumber()?>" method="post">
                    <label for="author">Pseudo : </label><input type="text" name="author" id="author"/><br/>
                    <label for="message">Message : </label>
                    <textarea id="message" name="message"></textarea><br/>
                    <input class="btn btn-outline-danger btn-lg" type="submit" value="envoyer">
                    
                </form> 
    </section>
                <a href="index.php" class="p-2">Retour à la page principale</a>
            
    
