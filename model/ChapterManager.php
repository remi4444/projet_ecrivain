<?php




class ChapterManager extends Manager
{
	public function getChapter()
	{	
		$db = $this->dbConnect();
	    $req = $db->query('SELECT * FROM chapter ORDER BY id DESC ');
		$tabResult = array();
		while($data = $req->fetch()){
			$tabResult[] = new ChapterObject($data);
		}
		
		return $tabResult;
	  
	}

	public function getChapterByNumber($chapter_number)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT * FROM chapter WHERE chapter_Number =?');
		$req->execute(array($chapter_number));
		$tabResult = array();
		while($data = $req->fetch()){
			$tabResult[] = new ChapterObject($data);
		}
		
		return $tabResult;
	}
	
	public function addParagraphChapter($textParagraph, $title, $number_chapter)
	{

		$db = $this->dbConnect();
		$req = $db->prepare('INSERT INTO chapter(paragraph, title, chapter_number) VALUES(?,?,?)');

		$affectedLines = $req->execute(array($textParagraph, $title, $number_chapter));
		return $affectedLines;

	}

	public function countChapter()
	{
		$db = $this->dbConnect();
		$req = $db->query('SELECT COUNT(*) AS nbChapter FROM chapter');
		return $req;
	}

	public function update($chapter_number, $title, $textParagraph, $id)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('UPDATE chapter SET chapter_number = :new_chapter_number, title = :new_title, paragraph = :new_paragraph WHERE id = :id');
		$req->execute(array(
			'new_chapter_number'=> $chapter_number,
			'new_title' => $title,
			'new_paragraph' => $textParagraph,
			'id' => $id
		));
	}
	
	public function deleteChapter($chapter)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('DELETE FROM chapter WHERE chapter_number = ?');
		$req->execute(array($chapter));
	}

}	