<?php
include_once 'configuration.php';
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="decoration.css">
</head>

<body>
<table width="600" align="center" >
<tr>
    <td><h3><font face="arial">BSc (Special) Management Information Systems</font></h3></td>
</tr>
    <tr><td>

        <ul id="bl">
            <li class="dropdown">
                <a href="#" class="dropbtn">1st Year <font color="red">(active)</font></a>
                <div class="dropdown-content">

                    <br><b class="sm">BMIS105 Database Management Systems</b>

                    <table width="100%" border="1">

                        <tr>
                            <td>Lecture Materials</td>
                            <td>View/Download</td>
                        </tr>

                        <?php
                        $sql="SELECT * FROM dbms";
                        $result_set=mysqli_query($con,$sql);
                        while($row=mysqli_fetch_array($result_set))
                        {
                            ?>
                            <tr>
                                <td><?php echo $row['file'] ?></td>


                                <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
                            </tr>
                            <?php
                        }
                        ?>
                        <a href="index.php">upload new files...</a>
                    </table>

                    <br><b class="sm">BMIS111 Internet Technology</b>

                    <table width="100%" border="1">

                        <tr>
                            <td>Lecture Materials</td>
                            <td>View/Download</td>
                        </tr>

                        <?php
                        $sql="SELECT * FROM web";
                        $result_set=mysqli_query($con,$sql);
                        while($row=mysqli_fetch_array($result_set))
                        {
                            ?>
                            <tr>
                                <td><?php echo $row['file'] ?></td>


                                <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
                            </tr>
                            <?php
                        }
                        ?>
                        <a href="index2.php">upload new files...</a>
                    </table>


                </div>
            </li>
        </ul>


    </td></tr>


    <tr><td>

        <ul id="bl">
            <li class="dropdown">
                <a href="#" class="dropbtn">2nd Year</a>
                <div class="dropdown-content">

                    <a href="#">CS105 Mathematics for Computing I</a>
                    <a href="#">CS104 Data Structures & Algorithms</a>
                    <a href="#">CS103 Object Oriented Programming with C++</a>
                    <a href="#">BMIS108 Programming in Java</a>
                    <a href="#">BMIS112 System Analysis and Design</a>
                    <a href="#">BMIS110 System Software</a>
                    <a href="#">CS110 Software Engineering Project 1</a>

                </div>
            </li>
        </ul>

    </td></tr>


    <tr><td>

            <ul id="bl">
                <li class="dropdown">
                    <a href="#" class="dropbtn">3rd Year</a>
                    <div class="dropdown-content">

                        <a href="#">CS210 UCD-CS-Software Engineering Project 2</a>
                        <a href="#">BMIS204 Business Statistics for Information Technology</a>
                        <a href="#">BMIS210 Computer Networks</a>
                        <a href="#">CS201 Algorithmic Problem Solving</a>
                        <a href="#">CS202 Introduction to Cryptography</a>
                        <a href="#">CS203 Digital Image Processing</a>

                    </div>
                </li>
            </ul>

        </td></tr>


    <tr><td>

            <ul id="bl">
                <li class="dropdown">
                    <a href="#" class="dropbtn">4th Year</a>
                    <div class="dropdown-content">

                        <a href="#">BMIS405 Business Policy and Strategy</a>
                        <a href="#">BMIS406 Professional Issues in ICT</a>
                        <a href="#">BMIS407 Software Quality Assurance</a>
                        <a href="#">BMIS408 Final Project</a>
                        <a href="#">BMIS404 Object Oriented Programming III</a>

                    </div>
                </li>
            </ul>

        </td></tr>
</table>


</body>
</html>
