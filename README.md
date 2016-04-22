
CodeIgniter-2.x-mysql-async-query
=======
mysql async query support in CodeIgniter-2.x version


How to use?
========
see test controller php file, there is select & query functions

you can replace the files in these path or you can copy the functions in the files to your files:
file path for CI:
./system/database/DB_driver.php     (search contains word "async" functions)
./system/database/drivers/mysqli/mysqli_driver.php   (search contains word "async" functions)
./application/controller/test.php




performance test
=====
Linux 3.2, two CPU cores, 64 bit, select 457751 rows data

sync select cost:   5.4322929859161  second
async select cost:  3.2787293134161  second


[more contact<82049406@qq.com>]









