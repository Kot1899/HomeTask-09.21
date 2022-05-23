# insert into mycat.student (name,age) values ('kile', 82), ('oll',4),('pol',23);
# select * from mycat.student where name='oll' and num >3;
select * from mycat.student where name='oll' or age >3 limit 10;
# select * from mycat.student;
# UPDATE student SET name = 'jim', age=16 WHERE id=3 or name='oll'  ;
# delete from mycat.student;