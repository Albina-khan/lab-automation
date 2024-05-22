use my_conn;

select * from products;

create table cpri(cpri_id int primary key auto_increment , P_name  varchar(50), p_price int , p_des varchar(500)   );
select * from cpri;

truncate table cpri;
