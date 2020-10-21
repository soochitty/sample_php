<?php

class Controller extends dbh{


    public static function addbook($bookName){
    	$tst2 = new test();
    	$tst2->setbooks($bookName);
    	 
    }
     public static function addauthor($authorName){
    	$tst2 = new test();
    	$tst2->setauthor($authorName);
    	 
    }
    public static function addrelation($aid,$bid){
    	$tst2 = new test();
    	$tst2->setbookauthor($aid,$bid);
    	 
    }
    public static function view($viewname){
    	require_once('./views/'.$viewname.'.php');

    }
}

?>
