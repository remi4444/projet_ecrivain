<?php




class MessageObject extends ObjectDb
{
    private $_id,
            $_name,
            $_comment,
            $_chapter_message,
            $_date_creation,
            $_report;

    //getters
    public function getName()
    {
        return $this->_name;
    }

    public function getComment()
    {
        return $this->_comment;
    }

    public function getId()
    {
        return $this->_id;
    }

    public function getDate()
    {
        return $this->_date_creation;
    }

    public function getChapter_message()
    {
        return $this->_chapter_message;
    }
    public function getReport()
    {
        return $this->_report;
    }
    //setters
    public function setReport($report)
    {
        $report= (int) $report;
        if($report > 0)
        {
            $this->_report = $report;
        }
    }
    public function setName($name)
    {
        if(is_string($name))
        {
            $this->_name = $name;
        }
    }

    public function setComment($comment)
    {
        if(is_string($comment))
        {
            $this->_comment = $comment;
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
    public function setChapter_message($chapter_message)
    {
        $chapter_message = (int) $chapter_message;
        if($chapter_message > 0 )
        {
            $this->_chapter_message = $chapter_message;
        }
    }
    public function setDate_creation($date_creation)
    {
        $this->_date_creation = $date_creation;
    }
}