USE master
GO

 -- Drop the database if it already exists
 IF  EXISTS (SELECT name FROM sys.databases WHERE name = N'db0903777_CMM004')
    DROP DATABASE db0903777_CMM004
 GO

  -- Now create the IntStu database
 CREATE DATABASE db0903777_CMM004
 GO

 -- Ensure that IntStu is the current database in use
 USE db0903777_CMM004
 GO

 /* Drop table User if it exists */
IF OBJECT_ID('Users', 'U') IS NOT NULL
  DROP TABLE Users
GO

/* Create table Users */
CREATE TABLE Users (
	[user_ID]			int				NOT NULL		IDENTITY(1,1),
	email				nvarchar(30)    NOT NULL,
	password_text		nvarchar(30)    NOT NULL,
	first_name			nvarchar(20)    NULL,
	last_name			nvarchar(20)    NULL,
	nationality			nvarchar(20)    NULL,
	user_type			nvarchar(20)    NOT NULL, 
CONSTRAINT pk_Users PRIMARY KEY ([user_ID]))

INSERT INTO Users (email, password_text, user_type) VALUES
('test1', 'test1', 'USER'),
('test@testing.com', 'Test123', 'USER');

INSERT INTO Users VALUES
('0903777@rgu.ac.uk', 'Correct123Input!', 'Lynne', 'Buchan', null, 'ADMIN');
