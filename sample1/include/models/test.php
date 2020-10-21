<?php

class test extends dbh
{
	public function getbooks() {
		$sql = "SELECT * FROM books";
	    $stmt = $this->connect()->query($sql);
	    $rows = $stmt->fetchAll();
	    foreach ($rows as $row) {
	    	echo "<option value='".$row['book_id']."'>".$row['book_title']."</option>";
        }
    }
	public function getauthors() {
		$sql = "SELECT * FROM author";
	    $stmt = $this->connect()->query($sql);
	    $rows = $stmt->fetchAll();
	    foreach ($rows as $row) {
	    	echo "<option value='".$row['author_id']."'>".$row['author_name']."</option>";
        }
    }
	    	

	public function setbooks($booktitle) {
		$sql = "INSERT INTO books(book_title) VALUES (?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$booktitle]);
	}
	public function setauthor($name) {
		$sql = "INSERT INTO author(author_name) VALUES (?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$name]);
	}


	public function setbookauthor($a_id,$b_id) {
		$sql = "INSERT INTO book_author_relation(author_id,book_id) VALUES (?,?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$a_id,$b_id]);
	}

}