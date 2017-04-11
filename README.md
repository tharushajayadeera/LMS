# LMS
----How to Use this LMS----


1)Copy the "Final" folder to to c:/xampp/htdocs .

2)Export quries in to phpmyadmin to create databases.(there two databases quries attached with this CD).

create a database as "nsbm" and import the "nsbm.sql" file to that.
create a database as "lectures" and import the "lectures.sql" file to that.

2)Open "main2.php" .That is the home page.

3)If a lecturer want to log in to lms, we have given a permission column in the database.If 
the permission cloumn has a data called "admin" then only that user becomes a lecturer. 
As a example we registered username = "viraj" and password = "viraj123" and gave admin rights. 
So olny the lecturer can upload slide to the lms.

4)If a student want to log in to lms, we have given that permission column empty in database.
As example we registered username = "tharusha" and password = "tharusha123" and gave permission=null.
then student only can see the slide contents and download.

5)First upload a document to lms by login in as an admin. then only students can veiw or download
files.(without uploading docs to the lms by lecturer, student can not see any file).

6)Contact us page can give make a inquiry and that details will move to the database=nsbm, 
table=contact.
