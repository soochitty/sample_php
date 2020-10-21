<?php

route::set('add-new-books', function(){
	$bookname = $_POST['booktitle'];
	add_new_books::addbook($bookname);
});
route::set('add-new-author', function(){
	$authorname = $_POST['name'];
	add_new_author::addauthor($authorname);
});
route::set('assign', function(){
		$authorid = $_POST['author'];
		$bookid = $_POST['book'];
	assign::addrelation($authorid,$bookid);
});
Route::set('add_new_author', function(){
    add_new_author::view('author');
});
Route::set('add_new_books', function(){
    add_new_books::view('book');
});
?>
