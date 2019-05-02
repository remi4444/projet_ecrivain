
<?php
foreach($chapterElement as $chapter)
    {?>
<form action="indexAdmin.php?action=updateChapter&amp;id=<?=$chapter->getId()?>" method = "post" class="jumbotron ">
            <label>Entrez le numéro de chapitre : </label><input type = "text" name = "chapter_number" value = "<?= $chapter->getChapterNumber()?>">
            <label>Entrez le titre du chapitre : </label><input type="text" name="title" value ="<?= $chapter->getTitle()?>">
            <p>Editez votre texte : </p>
            <textarea name = "text_paragraph" id="text_paragraph"><?= $chapter->getParagraph()?></textarea><br><br>
            <input type="submit" value ="Modifier le texte" class="text-danger"> 
</form>
<?php  }?>