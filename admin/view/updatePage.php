
<?php
foreach($chapterElement as $chapter)
    {?>
<form action="indexAdmin.php?action=updateChapter&amp;id=<?=$chapter->getId()?>" method = "post" class="jumbotron ">
            <label class="text-danger">>Entrez le numéro de chapitre : </label><input class="size_form_admin" type = "text" name = "chapter_number" value = "<?= $chapter->getChapterNumber()?>"><br>
            <label class="text-danger">>Entrez le titre du chapitre : </label><br><input class="size_form_admin_title"idtype="text" name="title" value ="<?= $chapter->getTitle()?>">
            <label class="text-danger">>Editez votre texte : </label>
            <textarea class="size_textarea_form" name = "text_paragraph" id="text_paragraph"><?= $chapter->getParagraph()?></textarea><br><br>
            <input type="submit" value ="Modifier le texte" class="text-danger"> 
</form>
<?php  }?>