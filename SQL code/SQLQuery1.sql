USE db1808760_database
GO

 -- Drop the database if it already exists
 IF  EXISTS (SELECT name FROM sys.databases WHERE name = N'IntStu')
    DROP DATABASE IntStu
 GO

  -- Now create the IntStu database
 CREATE DATABASE IntStu
 GO

 -- Ensure that IntStu is the current database in use
 USE IntStu
 GO

 /* Drop table User if it exists */
IF OBJECT_ID('Students', 'U') IS NOT NULL
  DROP TABLE Students
GO

/* Create table Students */
CREATE    TABLE Students (
user_number            int                NOT NULL,
email                nvarchar(30)    NOT NULL,
password_text        nvarchar(30)    NOT NULL,
first_name            nvarchar(20)    NULL,
last_name            nvarchar(20)    NULL,
nationality            nvarchar(20)    NULL,
CONSTRAINT pk_Users PRIMARY KEY (user_number))

INSERT INTO Students 
VALUES ('1', 'test1', 'test1'),('2', 'test@testing.com', 'Test123');
INSERT INTO Students
VALUES ('3','0903777@rgu.ac.uk', 'Correct123Input', 'Lynne', 'Buchan');

SELECT * from Users