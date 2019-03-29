-- $password = md5('1111111');
-- INSERT INTO users(username,email,password)
-- VALUES 
-- ('newuser','newuser@gmail.com','chuoidamahoa'),
-- ('newuser1','newuser1@gmail.com','chuoidamahoa'),
-- ('newuser1','newuser1@gmail.com','chuoidamahoa');

-- -- INSERT INTO bills(id_customer,date_order,total)
-- -- VALUES (40,'2019-03-27',20000);

-- --#1452 - Cannot add or update a child row: a foreign key constraint fails (`php1802_shopping`.`bills`, CONSTRAINT `1` FOREIGN KEY (`id_customer`) REFERENCES `customers` (`id`))

-- -- INSERT INTO users
-- -- VALUES(...)


-- -- UPDATE, DELETE 
-- -- UPDATE users 
-- -- SET fullname = 'new user',
-- --     birthdate = '1999-12-20'
-- -- WHERE id=1;

-- -- DELETE FROM users
-- -- WHERE id=22

-- -- SELECT * FROM `users` WHERE 1 ~ SELECT * FROM `users`


-- -- SELECT * FROM `users`

-- -- manager01@gmail.com , manager02@gmail.com

-- SELECT fullname, email
-- FROM users
-- WHERE email = 'manager01@gmail.com'
-- OR email = 'manager02@gmail.com'
-- -- AND email = 'manager02@gmail.com'

-- SELECT name, price, id_type
-- FROM products
-- WHERE id_type = 7
-- OR id_type = 11







-- -- MSSQL
-- -- MySQL
-- -- pgSQL
-- -- Oracle

-- -- NoSQL
-- -- users
-- [
--     {
--         'username':'....',
--         'pass': '....',
--     },
--     {
--         'username':'....',
--         'pass': '....',
--         'gender': '....'
--     }
-- ]


-- Cho biet ten sp va ten loai cua sp đó
WHERE table1.PK = table2.FK
AND table1.PK = table3.FK
-- AND table2.PK = table3.FK


-- 100 sp
-- 10 loai
-- =>100
-- id sp <10 => 9
SELECT c.name AS tenloai, p.name AS tensp
FROM categories c, products p
WHERE c.id = p.id_type
AND p.id<10


SELECT categories.name AS tenloai,products.name AS tensp
FROM categories
INNER JOIN products ON categories.id = products.id_type
-- INNER JOIN bill_detail ON products.id = bill_detail.id_product
WHERE products.id<10


SELECT categories.name AS tenloai,products.name AS tensp
FROM products RIGHT JOIN categories ON categories.id = products.id_type

-- Cho biet so luong sp theo tung loai

SELECT  c.name tenloai, 
        count(p.id) as soluong
FROM products  as p
RIGHT JOIN categories c ON c.id = p.id_type
GROUP BY c.id
-- HAVING soluong<=10
 
-- max 12 rows
--  <12 rows
-- nu:0
-- nam:10


-- cho biet ds sp cua loai la apple watch
SELECT  c.name tenloai, 
        p.name as tensp
FROM products  as p
INNER JOIN categories c 
    ON c.id = p.id_type
WHERE c.name='Apple Watch'

SELECT name 
FROM products
WHERE id_type = (
    SELECT id
    FROM categories
    WHERE name = 'Apple Watch'
)