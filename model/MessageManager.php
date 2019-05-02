<?php



class MessageManager extends Manager
{
    public function addMessage($author, $message, $chapter_number)
    {
        $db = $this->dbConnect();
		$req = $db->prepare('INSERT INTO message(name, comment, chapter_message, report, date_creation) VALUES(?,?,?,0,NOW())');

		$affectedLines = $req->execute(array($author, $message, $chapter_number));
		return $affectedLines;
    }

    public function getMessage($chapterNumber)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM message   WHERE chapter_Message = ?');
        $req->execute(array($chapterNumber));
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
    /*public function getMessageReport($id)
    {
        $db = $this->dbConnect();
		$req = $db->prepare('SELECT * FROM message WHERE id =?');
        $req->execute(array($id));
        $data = $req->fetch();
		
		return $data;
    }
    
    public function insertMessageReport($message)
    {
        $db = $this->dbConnect();
		$req = $db->prepare('INSERT INTO message_report(id_message, name, comment, chapter_message, date_creation) VALUES(:id_message, :name, :comment, :chapter_message, :date_creation)');

		$affectedLines = $req->execute(array(
            'id_message' => $message['id'],
            'name' => $message['name'],
            'comment' => $message['comment'],
            'chapter_message' => $message['chapter_message'],
            'date_creation' => $message['date_creation']
        ));

		return $affectedLines;
    }*/

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
    /*
    public function removeMessageAdminReport($idMessage)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM message_report WHERE id_message = ?');
        $req->execute(array($idMessage));

        return $req;
    }*/
		
}