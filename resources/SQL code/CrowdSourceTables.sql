CREATE TABLE PreArrival(
                           id			INT				UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                           title		VARCHAR(50)		NOT NULL,
                           advice		VARCHAR(1000)	NOT NULL,
                           user_ID		INT				NOT NULL,
                           CONSTRAINT fk_prearrival_users FOREIGN KEY (user_ID) REFERENCES users (user_ID));

CREATE TABLE OnArrival(
                          id			INT				UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                          title		VARCHAR(50)		NOT NULL,
                          advice		VARCHAR(1000)	NOT NULL,
                          user_ID		INT				NOT NULL,
                          CONSTRAINT fk_onarrival_users FOREIGN KEY (user_ID) REFERENCES users (user_ID));
CREATE TABLE PreDeparture(
                             id			INT				UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                             title		VARCHAR(50)		NOT NULL,
                             advice		VARCHAR(1000)	NOT NULL,
                             user_ID		INT				NOT NULL,
                             CONSTRAINT fk_predeparture_users FOREIGN KEY (user_ID) REFERENCES users (user_ID));