

<form action="indexAdmin.php?action=updateChapter&amp;id=<?=$chapterElement->getId()?>" method = "post" class="reponsive_width jumbotron ">
            <label class="text-danger">>Entrez le numéro de chapitre : </label><input class="width_case size_form_admin" type = "text" name = "chapter_number" value = "<?= $chapterElement->getChapterNumber()?>"><br>
            <label class="text-danger">>Entrez le titre du chapitre : </label><br><input class="size_form_admin_title"idtype="text" name="title" value ="<?= $chapterElement->getTitle()?>">
            <label class="text-danger">>Editez votre texte : </label>
            <textarea class="size_textarea_form" name = "text_paragraph" id="text_paragraph"><?= $chapterElement->getParagraph()?></textarea><br><br>
            <input type="submit" value ="Modifier le texte" class="text-danger"> 
</form>
