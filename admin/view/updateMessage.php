<p class="title_admin_info btn-success text-center">Supprimer un message du forum</p>

<?php
foreach($updateMessages as $updateMessage)
            {?> 
                <div class="jumbotron ">
                    
                    <p class="name_forum"> <?= $updateMessage->getName() ?></p>
                    <p class="comment_forum"><?= $updateMessage->getComment()?></p>
                    <p>Le : <?=$updateMessage->getDate()?><br>
                    <a id = "button_remove_message"class="btn btn-danger" href="indexAdmin.php?action=removeMessage&amp;id=<?= $updateMessage->getId() ?>">Effacer dans la base de donnée </a>
                      
                    
                    
                </div>
            <?php }?>