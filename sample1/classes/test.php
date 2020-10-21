 <?php

class test extends dbh
{
	public function getuser() {
		$sql = "SELECT * FROM books";
	    $stmt = $this->connect()->query($sql);
	    while ($row = $stmt->fetch()){
	    	echo $row['book_title'] . '<br>';
	}
}
}
