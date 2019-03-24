CREATE TABLE users(
    id serial,
    email varchar(32) UNIQUE NOT NULL,
    passward varchar(32) NOT NULL,
    relName varchar(32) NOT NULL,
    telephone varchar(32) NOT NULL
);

INSERT INTO users(email, passward, relName, telephone) 
VALUES ('a1877s234137@outlook.com', '123456', 'dizhensheng', '18774883137');


SELECT relname FROM users WHERE email='a187748137@outlook.com' AND passward='123456';

SELECT * FROM users;

-- DELETE * FROM users;

DROP TABLE users;