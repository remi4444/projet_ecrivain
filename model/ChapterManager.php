<?php

class ChapterManager extends Manager
{
	public function getChapter()
	{	
		$db = $this->dbConnect();
	    $req = $db->query('SELECT * FROM chapter ORDER BY chapter_number');
		$tabResult = array();
		while($data = $req->fetch()){
			$tabResult[] = new ChapterObject($data);
		}
		
		return $tabResult;
	  
	}

	public function getChapterById($id)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT * FROM chapter WHERE id =?');
		$req->execute(array($id));
		$data = $req->fetch();
		return new ChapterObject($data);
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
		$data = $req->fetch();
		return $data;
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
	
	public function deleteChapter($id_chapter)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('DELETE FROM chapter WHERE id = ?');
		$req->execute(array($id_chapter));
	}

	public function getNextChapterId($chapterNumber)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT id FROM chapter WHERE chapter_number > ? ORDER BY chapter_number ASC LIMIT 1' );
		$req->execute(array($chapterNumber));
		$data = $req->fetch();
		return $data['id'];
	}
	public function getBeforeChapterId($chapterNumber)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT id FROM chapter  WHERE chapter_number < ? ORDER BY chapter_number DESC LIMIT 1');
		$req->execute(array($chapterNumber));
		$data = $req->fetch();
		return $data['id'];
	}
}	