-- $password = md5('1111111');
-- INSERT INTO users(username,email,password)
-- VALUES ('newuser','newuser@gmail.com','chuoidamahoa');

-- INSERT INTO bills(id_customer,date_order,total)
-- VALUES (40,'2019-03-27',20000);

--#1452 - Cannot add or update a child row: a foreign key constraint fails (`php1802_shopping`.`bills`, CONSTRAINT `1` FOREIGN KEY (`id_customer`) REFERENCES `customers` (`id`))

-- INSERT INTO users
-- VALUES(...)


-- UPDATE, DELETE 
-- UPDATE users 
-- SET fullname = 'new user',
--     birthdate = '1999-12-20'
-- WHERE id=1;

-- DELETE FROM users
-- WHERE id=22

-- SELECT * FROM `users` WHERE 1 ~ SELECT * FROM `users`


-- SELECT * FROM `users`

-- manager01@gmail.com , manager02@gmail.com

SELECT fullname, email
FROM users
WHERE email = 'manager01@gmail.com'
OR email = 'manager02@gmail.com'
-- AND email = 'manager02@gmail.com'

SELECT name, price, id_type
FROM products
WHERE id_type = 7
OR id_type = 11







-- MSSQL
-- MySQL
-- pgSQL
-- Oracle

-- NoSQL
-- users
[
    {
        'username':'....',
        'pass': '....',
    },
    {
        'username':'....',
        'pass': '....',
        'gender': '....'
    }
]