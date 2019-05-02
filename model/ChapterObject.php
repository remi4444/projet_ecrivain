<?php




class ChapterObject extends ObjectDb
{
    private $_id,
            
            $_paragraph,
            $_title,
            $_chapter_number;

    //getters
    public function getParagraph()
    {
        return $this->_paragraph;
    }

    public function getTitle()
    {
        return $this->_title;
    }

    public function getId()
    {
        return $this->_id;
    }

    public function getChapterNumber()
    {
        return $this->_chapter_number;
    }
    //setters
    public function setParagraph($paragraph)
    {
        if(is_string($paragraph))
        {
            $this->_paragraph = $paragraph;
        }
    }

    public function setTitle($title)
    {
        if(is_string($title))
        {
            $this->_title = $title;
        }
    }

    public function setId($id)
    {
        $id= (int) $id;
        if($id > 0)
        {
            $this->_id = $id;
        }
        
    }
    public function setChapter_number($chapter_number)
    {
        $chapter_number = (int) $chapter_number;
        if($chapter_number > 0 )
        {
            $this->_chapter_number = $chapter_number;
        }
    }
}