<?php



class MessageManager extends Manager
{
    public function addMessage($author, $message, $id)
    {
        $db = $this->dbConnect();
		$req = $db->prepare('INSERT INTO message(name, comment, id_chapter, report, date_creation) VALUES(?,?,?,0,NOW())');

		$affectedLines = $req->execute(array($author, $message, $id));
		return $affectedLines;
    }

    public function getMessageByIdChapter($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM message   WHERE id_chapter = ?');
        $req->execute(array($id));
		$tabResult = array();
		while($data = $req->fetch()){
			$tabResult[] = new MessageObject($data);
		}
		
		return $tabResult;
    }

    public function updateReportMessage($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE message SET report = 1 WHERE id= ?');
        $req->execute(array($id));
        return $req;
    }
    
    public function getReportsMessages()
    {
        $db = $this->dbConnect();
	    $req = $db->query('SELECT * FROM message WHERE report > 0');
		$tabResult = array();
		while($data = $req->fetch()){
			$tabResult[] = new MessageObject($data);
		}
		
		return $tabResult;
    }
    public function getAllMessage()
    {
        $db = $this->dbConnect();
	    $req = $db->query('SELECT * FROM message ORDER BY date_creation');
		$tabResult = array();
		while($data = $req->fetch()){
			$tabResult[] = new MessageObject($data);
		}
		
		return $tabResult;
    }

    public function removeMessage($id)
    {
        $db = $this->dbConnect();
	    $req = $db->prepare('DELETE FROM message WHERE id = ?');
        $req->execute(array($id));
		
		
		return $req;
    }

    public function removeMessageInadmin($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE message SET report = 0 WHERE id = ?');
        $req->execute(array($id));
        return $req;
    }
    
}