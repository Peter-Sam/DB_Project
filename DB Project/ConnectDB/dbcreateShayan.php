<html>
<head>
</head>
<body>
	    <p>Welcome to the Demo<br /><br/></p>
<p id="demo"></p>
<form action="dbcreate.php">
    <input type="submit" value="Initialize Database" />
</form>
<?php
$con = mysql_connect("localhost", "john", "pass1234");
if (!$con)
{
	die("can not connect: " . mysql_error());
}
mysql_select_db("sampledb", $con);


$sql =" CREATE TABLE PAPER (
paperid int NOT NULL AUTO_INCREMENT, 
title VARCHAR(50),
abstract VARCHAR(250),
pdf VARCHAR(100),
primary key (paperid))";

$sql2  = "CREATE TABLE Author(
Email varchar(100),
FirstName varchar(50),
LastName varchar(50),
Affiliation varchar(100),
primary key(Email))";

$sql3 = "CREATE TABLE PCmember(
Email varchar(50),
FirstName varchar(50),
LastName varchar(50),
primary key(Email))";

$sql4 = "CREATE TABLE WriteFile(
paperid integer,
Email varchar(50),
OrderNo integer,
primary key(paperid, Email),
FOREIGN KEY (paperid) REFERENCES PAPER(paperid),
FOREIGN KEY (Email) REFERENCES Author(Email))";

 $sql5 = "CREATE TABLE ReviewFile(
 ReportID int NOT NULL AUTO_INCREMENT,
 Sdate DATE,
 cmnt VARCHAR(250),
 Recommendation CHAR(1),
 paperid integer,
 Email VARCHAR(100),
 primary key(ReportID, paperid, email),
 FOREIGN KEY (paperid) REFERENCES PAPER(paperid),
 FOREIGN KEY (Email) REFERENCES PCmember(Email))";



//PAPER TABLE
$sql6 = "INSERT INTO PAPER (title, abstract, pdf)
VALUES ('Essay', 'NA', 'Yes')"; 
$sql7 = "INSERT INTO PAPER (title, abstract, pdf)
VALUES ('Article', 'Short', 'Yes')";
$sql8 = "INSERT INTO PAPER (title, abstract, pdf)
VALUES ('Document', 'Long', 'Yes')";
$sql9 = "INSERT INTO PAPER (title, abstract, pdf)
VALUES ('Proposal', 'Long', 'Yes')"; 
$sql10 = "INSERT INTO PAPER (title, abstract, pdf)
VALUES ('Research', 'Short', 'Yes')";
$sql11 = "INSERT INTO PAPER (title, abstract, pdf)
VALUES ('Thesis', 'No Abstract', 'Yes')";
$sql12 = "INSERT INTO PAPER (title, abstract, pdf)
VALUES ('Dissertation', 'Long', 'Yes')";
$sql13 = "INSERT INTO PAPER (title, abstract, pdf)
VALUES ('Application', 'No Abstract', 'Yes')";
$sql14 = "INSERT INTO PAPER (title, abstract, pdf)
VALUES ('Reciept', 'No Abstract', 'No')";
$sql15= "INSERT INTO PAPER (title, abstract, pdf)
VALUES ('Report', 'Short', 'Yes')";



// AUTHOR TABLE
$sql16 = "INSERT INTO Author (Email, FirstName, LastName, Affiliation)
VALUES ('noemail@wayne.edu', 'John', 'Smith' 'C&IT')";
$sql17 = "INSERT INTO Author (Email, FirstName, LastName, Affiliation)
VALUES ('noemail@gmail.com', 'Bob', 'Jones', 'City of Detroit')";
$sql18 = "INSERT INTO Author (Email, FirstName, LastName, Affiliation)
VALUES ('noemail@hotmail.com', 'Greame', 'Smith'   'Detroit Lions')";
$sql19 = "INSERT INTO Author (Email, FirstName, LastName, Affiliation)
VALUES ('noemail@yahoo.com', 'Calvin', 'Klien', 'GM')";
$sql20 = "INSERT INTO Author (Email, FirstName, LastName, Affiliation)
VALUES ('noemail@outlook.com', 'Kieth', 'Fatouhi', 'Ford')";
$sql21 = "INSERT INTO Author (Email, FirstName, LastName, Affiliation)
VALUES ('noemail@live.com', 'Fatouhi', 'Summers', 'FCA')";
$sql22= "INSERT INTO Author (Email, FirstName, LastName, Affiliation)
VALUES ('noemail@macomb.edu', 'Lisa', 'Perry', 'Macomb CC')";
$sql23 = "INSERT INTO Author (Email, FirstName, LastName, Affiliation)
VALUES ('noemail1@hotmail.com', 'Julia', 'Hayes', 'Blimpie')";
$sql24 = "INSERT INTO Author (Email, FirstName, LastName, Affiliation)
VALUES ('noemail3@live.com', 'Jeremy', 'Lu', 'SOS')";
$sql25= "INSERT INTO Author (Email, FirstName, LastName, Affiliation)
VALUES ('noemail5@hotmail.com', 'Raj', 'Kumar', '7-Eleven')";

//PC MEMBER TABLE
$sql26 = "INSERT INTO PCmember (Email, FirstName, LastName)
VALUES ('noemail@wayne.edu', 'John', 'Smith')";
$sql27= "INSERT INTO PCmember (Email, FirstName, LastName)
VALUES ('noemail@gmail.com', 'Bob', 'Jones')";
$sql28 = "INSERT INTO PCmember (Email, FirstName, LastName)
VALUES ('noemail@hotmail.com', 'Greame', 'Smith')";
$sql29 = "INSERT INTO PCmember (Email, FirstName, LastName)
VALUES ('noemail@yahoo.com', 'Calvin', 'Klien')";
$sql30 = "INSERT INTO PCmember (Email, FirstName, LastName)
VALUES ('noemail@outlook.com', 'Kieth', 'Fatouhi')";
$sql31 = "INSERT INTO PCmember (Email, FirstName, LastName)
VALUES ('noemail@live.com', 'Aaron', 'Summers')";
$sql32 = "INSERT INTO PCmember (Email, FirstName, LastName)
VALUES ('noemail@macomb.edu', 'Lisa', 'Perry')";
$sql33 = "INSERT INTO PCmember (Email, FirstName, LastName)
VALUES ('noemail1@hotmail.com', 'Julia', 'Hayes')";
$sql34 = "INSERT INTO PCmember (Email, FirstName, LastName)
VALUES ('noemail3@live.com', 'Marie', 'Brosnan')";
$sql35 = "INSERT INTO PCmember (Email, FirstName, LastName)
VALUES ('noemail5@hotmail.com', 'Raj', 'Kumar')";

// WRITE FILE TABLE
$sql36 = "INSERT INTO WriteFile (paperid, Email, OrderNo)
VALUES ('1', 'noemail@wayne.edu', '1')";
$sql37 = "INSERT INTO WriteFile (paperid, Email, OrderNo)
VALUES ('2', 'noemail@gmail.com', '2')";
$sql38 = "INSERT INTO WriteFile (paperid, Email, OrderNo)
VALUES ('3', 'noemail@hotmail.com', '3')";
$sql39 = "INSERT INTO WriteFile (paperid, Email, OrderNo)
VALUES ('4', 'noemail@yahoo.com', '4')";
$sql40 = "INSERT INTO WriteFile (paperid, Email, OrderNo)
VALUES ('5', 'noemail@outlook.com', '5')";
$sql41 = "INSERT INTO WriteFile (paperid, Email, OrderNo)
VALUES ('6', 'noemail@live.com', '6')";
$sql42 = "INSERT INTO WriteFile (paperid, Email, OrderNo)
VALUES ('7', 'noemail@macomb.edu', '7')";
$sql43 = "INSERT INTO WriteFile (paperid, Email, OrderNo)
VALUES ('8', 'noemail5@hotmail.com', '8')";
$sql44 = "INSERT INTO WriteFile (paperid, Email, OrderNo)
VALUES ('9', 'noemail5@hotmail.com', '9')";
$sql45 = "INSERT INTO WriteFile (paperid, Email, OrderNo)
VALUES ('10', 'noemail5@hotmail.com', '10')";


//REVIEW FILE TABLE
$sql46 = "INSERT INTO ReviewFile (Sdate, cmnt, Recommendation, paperid, Email)
VALUES ('2018-11-20','Submission Completed', 'y', '1', 'noemail1@hotmail.com')";
$sql47 = "INSERT INTO ReviewFile (Sdate, cmnt, Recommendation, paperid, Email)
VALUES ('2018-11-21','Submission Completed', ' y', '2', 'noemail3@live.com')";
$sql48 = "INSERT INTO ReviewFile (Sdate, cmnt, Recommendation, paperid, Email)
VALUES ('2018-11-22','Submission Completed', 'y', '3', 'noemail5@hotmail.com')";
$sql49 = "INSERT INTO ReviewFile (Sdate, cmnt, Recommendation, paperid, Email)
VALUES ('2018-11-23','Submission Completed', 'y', '4', 'noemail@gmail.com')";
$sql50 = "INSERT INTO ReviewFile (Sdate, cmnt, Recommendation, paperid, Email)
VALUES ('2018-11-24','Submission Completed', 'y', '5', 'noemail@hotmail.com')";
$sql51 = "INSERT INTO ReviewFile (Sdate, cmnt, Recommendation, paperid, Email)
VALUES ('2018-11-25','Submission Completed', 'y', '6', 'noemail@live.com')";
$sql52 = "INSERT INTO ReviewFile (Sdate, cmnt, Recommendation, paperid, Email)
VALUES ('2018-11-26','Submission Completed', 'y', '7', 'noemail@macomb.edu')";
$sql53=  "INSERT INTO ReviewFile (Sdate, cmnt, Recommendation, paperid, Email)
VALUES ('2018-11-27','Submission Completed', 'y', '8', 'noemail@outlook.com')";
$sql54= "INSERT INTO ReviewFile (Sdate, cmnt, Recommendation, paperid, Email)
VALUES ('2018-11-28','Submission Completed', 'y', '9', 'noemail@wayne.edu')";
$sql55 = "INSERT INTO ReviewFile (Sdate, cmnt, Recommendation, paperid, Email)
VALUES ('2018-11-29', 'Submission Completed', 'y', '10', 'noemail@yahoo.com')";

mysql_query($sql, $con);
mysql_query($sql2, $con);
mysql_query($sql3, $con);
mysql_query($sql4, $con);
mysql_query($sql5, $con);
mysql_query($sql6, $con);
mysql_query($sql7, $con);
mysql_query($sql8, $con);
mysql_query($sql9, $con);
mysql_query($sql10, $con);
mysql_query($sql11, $con);
mysql_query($sql12, $con);
mysql_query($sql13, $con);
mysql_query($sql14, $con);
mysql_query($sql15, $con);
mysql_query($sql16, $con);
mysql_query($sql17, $con);
mysql_query($sql18, $con);
mysql_query($sql19, $con);
mysql_query($sql20, $con);
mysql_query($sql21, $con);
mysql_query($sql22, $con);
mysql_query($sql23, $con);
mysql_query($sql24, $con);
mysql_query($sql25, $con);
mysql_query($sql26, $con);
mysql_query($sql27, $con);
mysql_query($sql28, $con);
mysql_query($sql29, $con);
mysql_query($sql30, $con);
mysql_query($sql31, $con);
mysql_query($sql32, $con);
mysql_query($sql33, $con);
mysql_query($sql34, $con);
mysql_query($sql35, $con);
mysql_query($sql36, $con);
mysql_query($sql37, $con);
mysql_query($sql38, $con);
mysql_query($sql39, $con);
mysql_query($sql40, $con);
mysql_query($sql41, $con);
mysql_query($sql42, $con);
mysql_query($sql43, $con);
mysql_query($sql44, $con);
mysql_query($sql45, $con);
mysql_query($sql46, $con);
mysql_query($sql47, $con);
mysql_query($sql48, $con);
mysql_query($sql49, $con);
mysql_query($sql50, $con);
mysql_query($sql51, $con);
mysql_query($sql52, $con);
mysql_query($sql53, $con);
mysql_query($sql54, $con);
mysql_query($sql55, $con);

?>

</body>
</html>