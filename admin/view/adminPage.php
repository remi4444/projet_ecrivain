
    <h2 class="text-danger text-center">Zone administatif</h2>
    <p class=" btn-success text-center">Publier un chapitre de votre livre</p> 
    <form action="indexAdmin.php?action=publishChapter" method = "post" class="jumbotron ">
            <label>Entrez le numéro de chapitre : </label><input type = "text" name = "chapter_number" value = "numéro du chapitre"><br>
            <label>Entrez le titre du chapitre : </label><input type="text" name="title" value ="titre chapitre">
            <p>Editez votre texte : </p>
            <textarea name = "text_paragraph" id="text_paragraph">Next, use our Get Started docs to setup Tiny!</textarea><br><br>
            <input type="submit" value ="Envoyer votre texte" class="text-danger"> 
    </form>
    <p class="btn-success text-center">Modifier un chapitre </p>
    <?php
    foreach($chapters as $chapter)
        {?>
            <div class="jumbotron ">
                <p><?= $chapter->getTitle()?></p>
                <p> chapitre : <?= $chapter->getChapterNumber()?></p>
                <a href='indexAdmin.php?action=searchText&amp;chapter_page=<?= $chapter->getChapterNumber()?>'>Modifier le texte</a>
                <a href='indexAdmin.php?action=deleteChapter&amp;chapter_page=<?= $chapter->getChapterNumber()?>'>Supprimer le chapitre</a>
            </div>

         <?php } ?>
    
    <p class=" btn-success text-center">Messages signalés : </p>
    <?php
    foreach($reportMessage as $report)
            {?> 
                <div class="jumbotron ">
                    
                    <h2> <?= $report->getName() ?></h2>
                    <p><?= $report->getComment()?></p>
                    <p> Dans le chapitre <?= $report->getChapter_message()?><br>
                    <a href="indexAdmin.php?action=removeMessage&amp;id=<?= $report->getId() ?>">Effacer dans la base de donnée </a>
                    <a href='indexAdmin.php?action=removeMessageAdmin&amp;id=<?= $report->getId()?>'>Effacer dans l'admin</a>
                    
                </div>
                <?php }?>
   
