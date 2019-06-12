
           
    <a href="index.php" class="btn btn-outline-warning" id="return_page_principal">Retour à la page principale</a>
    <section id="section_page_chapter">
            
                <h2 class="text-danger text-center">chapitre <?= $chapter->getChapterNumber() ?></h2>
                <p id="title_chapter" class="text-info text-center"><?= $chapter->getTitle()?></p>
                <p id="chapter_paragraph"><?= $chapter->getParagraph()?></p>
                <?php 
                if($chapter->getChapterNumber()==1 )
                {?>                                                  
                    <a class = "next_chapter_style"href="index.php?action=nextChapter&amp;id=<?=$chapter->getId()?>">Chapitre suivant</a>
                <?php 
                } 
                elseif ($chapter->getChapterNumber() == $countNbChapter)
                {?>
                                                 
                    <a class = "next_chapter_style" href="index.php?action=beforeChapter&amp;id=<?=$chapter->getId()?>">Chapitre precedent</a>
                <?php 
                }
            
                else
                {?>
                    <div class="d-flex  justify-content-around">
                        <a class = "next_chapter_style" href="index.php?action=beforeChapter&amp;id=<?=$chapter->getId()?>">Chapitre precedent</a>
                        <a class = "next_chapter_style" href="index.php?action=nextChapter&amp;id=<?=$chapter->getId()?>">Chapitre suivant</a>
                    </div>
                <?php } ?>
                
            
                
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
                    <a id="message_Script_report" href="index.php?action=messageReport&amp;id=<?= $message->getId()?>&amp;chapter_id=<?= $chapter->getId()?>">Signaler à l'admin</a>
                   
                </div>
                
            <?php }?>
                
                <p class="container text-center alert alert-info" id="form_forum">Envoyer un message : </p>
                <p class="text-center text-danger"> <?php if(!empty($errorMessage)){ echo $errorMessage; }?></p>
                <form id="form_width" class=" alert alert-info text-center container" action="index.php?action=addMessage&amp;chapter_id=<?=$chapter->getId()?>" method="post">
                    <label for="author">Pseudo : </label><input class="form_input_width" type="text" name="author" id="author"/><br/>
                    <label for="message">Message : </label>
                    <textarea id="message" name="message" class="form_input_width"></textarea><br/>
                    <input class="btn btn-outline-danger btn-lg" type="submit" value="envoyer">
                    
                </form> 

    </section>
     
            
    
