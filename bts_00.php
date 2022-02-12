<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title> bts_00 </title>

<script type="text/javascript">

</script>

</head><body>

<center>
<h2> bts_00: CREATE TABLE 
BoToS.db3/tabulka </h2>


<?php

try {
    /*** connect to SQLite database ***/
    $dbh  = new PDO("sqlite:BoToS.db3");
    $dbh1 = new PDO("sqlite:BoToS-kor.db3");

    /*** echo a message saying we have connected ***/
    echo 'Connected to database<br />';

    /*** CREATE TABLE animals ***/
    $dbh->exec('CREATE TABLE tabulka (
 a00 int,
 a01 int,
 a02 int,
 a03 varchar,
 a04 varchar,
 a05 varchar,
 a06 varchar,
 a07 varchar,
 a08 varchar,
 a09 varchar,
 a10 varchar,
 a11 varchar,
 a12 varchar,
 a13 varchar

 ) ; ');

    $dbh1->exec('CREATE TABLE tab_korpus (
 a00 int,
 a01 int,
 a02 int,
 a03 int,
 a04 varchar,
 a05 varchar
 ) ; ');

    /*** close the database connection ***/
    $dbh  = null;
    $dbh1 = null;
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?>

<p>
<a href="index.html"> Zpět</a>
</p>

</body>
</html>
