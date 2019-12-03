



SELECT * FROM product ORDER BY created_date DESC;
SELECT * FROM product ORDER BY price ASC;
SELECT * FROM product ORDER BY price DESC;

select product_id, time_stamp from view where user_id = 5 order by time_stamp DESC;

SELECT product_id from (SELECT * from view where user_id = 5) A GROUP BY product_id ORDER BY count(*) DESC;

select * from product where id in (select product_id from ( SELECT product_id from (SELECT * from view where user_id = 5) A GROUP BY product_id ORDER BY count(*) DESC)a);

SELECT list.id from
(select * from product where id in (select product_id from ( SELECT (@row_number:=@row_number + 1) AS num, product_id,count(*) as rank from (SELECT * from view where user_id = 5) A GROUP BY product_id ORDER BY count(*) DESC)a)) list
LEFT OUTER JOIN product p ON p.id=list.id;