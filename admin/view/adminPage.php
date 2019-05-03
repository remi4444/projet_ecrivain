
    <h2 class="text-danger text-center">Zone administatif</h2>
    <p class=" title_admin_info btn-success text-center">Publier un chapitre de votre livre</p> 
    <form action="indexAdmin.php?action=publishChapter" method = "post" class="jumbotron ">
            <label class="text-danger">Entrez le numéro de chapitre : </label><input class="size_form_admin" type = "text" name = "chapter_number" ><br>
            <label class="text-danger">Entrez le titre du chapitre : </label><input class="size_form_admin_title" type="text" name="title" value ="titre chapitre">
            <label class="text-danger">Editez votre texte : </label>
            <textarea class="size_textarea_form"name = "text_paragraph" id="text_paragraph">Ecrivez votre texte</textarea><br><br>
            <input type="submit" value ="Envoyer votre texte" class="text-danger"> 
    </form>
    <p class="title_admin_info btn-success text-center">Modifier un chapitre </p>
    <?php
    foreach($chapters as $chapter)
        {?>
            <div id="div_update_chapter" class="jumbotron ">
                <p class="font-weight-bold lead"> chapitre : <?= $chapter->getChapterNumber()?></p>
                <p id="nb_chapter_modify" class="d-flex justify-content-center "><?= $chapter->getTitle()?></p>
                <div class="d-flex justify-content-around" id="button_update_delete">
                    <a class="btn btn btn-light" href='indexAdmin.php?action=searchText&amp;chapter_page=<?= $chapter->getChapterNumber()?>'>Modifier le texte</a>
                    <a class="btn btn-danger" href='indexAdmin.php?action=deleteChapter&amp;chapter_page=<?= $chapter->getChapterNumber()?>'>Supprimer le chapitre</a>
                </div>
            </div>

         <?php } ?>
    
    <p class="title_admin_info btn-success text-center">Messages signalés : </p>
    <?php
    foreach($reportMessage as $report)
            {?> 
                <div class="jumbotron ">
                    
                    <p class="name_forum"> <?= $report->getName() ?></p>
                    <p class="comment_forum"><?= $report->getComment()?></p>
                    <p> Dans le chapitre <?= $report->getChapter_message()?><br>
                    <div class="d-flex justify-content-around" id="message_report_update_delete">
                        
                        <a class="btn btn btn-light" href='indexAdmin.php?action=removeMessageAdmin&amp;id=<?= $report->getId()?>'>Effacer dans l'admin</a>
                        <a class="btn btn-danger" href="indexAdmin.php?action=removeMessage&amp;id=<?= $report->getId() ?>">Effacer dans la base de donnée </a>
                    </div>

                    
                    
                </div>
                <?php }?>
   
