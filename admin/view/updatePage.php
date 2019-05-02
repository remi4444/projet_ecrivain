
<?php
foreach($chapterElement as $chapter)
    {?>
<form action="indexAdmin.php?action=updateChapter&amp;id=<?=$chapter->getId()?>" method = "post" class="jumbotron ">
            <input type = "text" name = "chapter_number" value = "<?= $chapter->getChapterNumber()?>">
            <input type="text" name="title" value ="<?= $chapter->getTitle()?>">
            <textarea name = "text_paragraph" id="text_paragraph"><?= $chapter->getParagraph()?></textarea><br><br>
            <input type="submit" value ="Modifier le texte" class="text-danger"> 
</form>
<?php  }?>