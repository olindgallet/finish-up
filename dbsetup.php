<?php
	/* To whoever takes over:
	 * -change the data in connect_to_database()
	 * -test the code, this code hasn't been tested.
	 * to contact me -> olindgallet@olingallet.com
	 */

	public connect_to_database($dsn, $user, $password){
		try {
    			$dbh = new PDO($dsn, $user, $password);
		} catch (PDOException $e) {
		    //report error with '$e->getMessage();'
		}
	}
	
	public drop_tables(){
		$smt = $dbh->prepare("DROP TABLE hackers IF EXISTS");
		$smt->execute();
		$smt = $dbh->prepare("DROP TABLE project_set IF EXISTS");
		$smt->execute();
		$smt = $dbh->prepare("DROP TABLE project IF EXISTS");
		$smt->execute();
		$smt = $dbh->prepare("DROP TABLE mentors IF EXISTS");
		$smt->execute();
		$smt = $dbh->prepare("DROP TABLE task_sets IF EXISTS");
		$smt->execute();
		$smt = $dbh->prepare("DROP TABLE tasks IF EXISTS");
		$smt->execute();
	}
	
	/**
	 * Create tables.
	 */
	 public create_tables(){
	 	 $smt = $dbh->prepare('CREATE TABLE hackers(hacker_id varchar(255),
		     first_name varchar(255),
		     last_name varchar(255),
		     email varchar(255),
		     phone_number int,
		     project_set_id int);');
		 $smt->execute();
		 $smt = $dbh->prepare('CREATE TABLE project_set(project_set_id int,
			 project_id int);');
		 $smt->execute();
		 $smt = $dbh->prepare('CREATE TABLE projects(project_id int,
		 	 name varchar(255),
		 	 task_set_id int);');
		 $smt->execute();
		 $smt = $dbh->prepare('CREATE TABLE mentors(mentor_id int,
		     first_name varchar(255),
		     last_name varchar(255),
		     email varchar(255),
		     phone_number int,
		     task_set_id int);');
		 $smt->execute();
		 $smt = $dbh->prepare('CREATE TABLE task_set(task_set_id int,
		      task_id int);');
		 $smt->execute();
		 $smt = $dbh->prepare('CREATE TABLE tasks(task_id int,
		  short_description varchar(255),
		  long_description varchar(max);');
		 $smt->execute();
	 }
	
	connect_to_database();
	drop_tables();
	create_tables();
?>
