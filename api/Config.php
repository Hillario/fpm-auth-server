<?php
/**
 * Created by SARO LABS
 * Programmer: HILLARY CHESARO
 * Date: 04/07/2023
 * Property of SARO LABS, all rights reserved
 * Configuration settings of the project
 * MYSQL Settings
 */
/*Using define method to elaborate on the constants so as to help in the definition of project scope(Global)*/
/*Database Name*/
define('DB_NAME','fpmauth'); //codorpsc_e-afya2015

/*Database User*/
define('DB_USER','root'); //codorpsc_e-afya

/*Database User Password*/
define('DB_PASSWORD',''); //1SODvv%Nv=&i

/*ADVANCED SETTINGS*/

/*Database host*/
define('DB_HOST','localhost'); //database is stored in the local server and manipulated accordingly

/*Database Character set*/
define('DB_CHARSET','utf8'); //complete set of numbers,letters,symbols and characters that are arranged and used in computer code

/*Database Collation*/
define('DB_COLLATE',''); //put the file created and arrange in accordance to the file that is created.


//SELECT SUM(outgoingtotal) AS Total FROM `outgoingstock` WHERE DateOut LIKE CONCAT(CURDATE(),'%')
