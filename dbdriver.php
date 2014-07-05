<?php
	/**
	 * To whoever takes over:
	 * -change the data in connect_to_database()
	 * -test the code, this code hasn't been tested.
	 * to contact me -> olindgallet@olingallet.com
	 */

	/**
	 * Connect to the database
	 */
	public connect_to_database($dsn, $user, $password){
		try {
    			$dbh = new PDO($dsn, $user, $password);
		} catch (PDOException $e) {
		    //report error with '$e->getMessage();'
		}
	}


	/**
	 * Add hacker to the database
	 */
	public add_hacker($first_name, $last_name, $email, $phone_number){
		$smt = $dbh->prepare('INSERT INTO hackers VALUES (,?,?,?,?,)');
		$smt->execute(array($first_name, $last_name, $email, $phone_number));
	}
	
	/** 
	 * Add project to the database
	 */
	 public add_project($name){
	 	 $smt = $dbh->prepare('INSERT INTO project VALUES (,?,)');
	 	 $smt->execute(array($name));
	 }
	 
	 /**
	  * Add mentor to the database
	  */
	  public add_mentor($first_name, $last_name, $email, $phone_number){
	  	  $smt = $dbh->prepare('INSERT INTO mentors VALUES (,?,?,?,?,)');
	  	  $smt->execute(array($first_name, $last_name, $email, $phone_number));
	  }
	  
	  /**
	   * Add task to the database
	   */
	   public add_task($short_description, $long_description){
	   	   $smt = $dbh->prepare('INSERT INTO task VALUES (,?,?,)');
	   	   $smt->execute(array($short_description, $long_description));
	   }
	   
	   
?>
