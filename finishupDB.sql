CREATE TABLE hackers(hacker_id varchar(255),
		     first_name varchar(255),
		     last_name varchar(255),
		     email varchar(255),
		     phone_number int,
		     project_set_id int);

CREATE TABLE project_set(project_set_id int,
			 project_id int);

CREATE TABLE project(project_id int,
		     name varchar(255),
		     task_set_id int);

CREATE TABLE mentors(mentor_id int,
		     first_name varchar(255),
		     last_name varchar(255),
		     email varchar(255),
		     phone_number int,
		     task_set_id int);

CREATE TABLE task_set(task_set_id int,
		      task_id int);

CREATE TABLE task(task_id int,
		  short_description varchar(255),
		  long_description varchar(max);