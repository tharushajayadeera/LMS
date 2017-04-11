<html>

<body>

<table width="200" align="center" bgcolor="#f0ffff">
    <tr>

        <td colspan="2" width="100%"><img src="lms2.jpg" width="1280"> </td>

        <td bgcolor="#6495ed" width="100" >
            <form action="2.php" method="POST">
                <table align="right" bgcolor="#6495ed" height="190">
                    <caption><h3>You are not logged in...</h3></caption>
                    <tr>
                        <td>User Name:</td>
                        <td><input type="text" name="username" /></td>
                    </tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" /></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" value="Log In" /></td>
                    </tr>
                </table>
            </form>
        </td>

    </tr>

    <tr>

       <td></td>

        <td >
            <table>
                <tr>
                    <td bgcolor="#8b0000" width="150"> <font size="4" color="white">News and Events....</font></td>
                    <td bgcolor="#E5E7E9" width="920"><marquee>American Degrees soon at NSBM/ Engineering Degrees soon at NSBM/ The day is not far off...</marquee></td>
                </tr>
            </table>
        </td>

         <td style="background-color: blue;">
             <a href="contact/ContactUs.html"><font color="white"><center>Contact us</center></font></a>
         </td>

    </tr>



    <tr>
        <td style="vertical-align:top"><?php
            include_once "leftside/left2.html";
            ?>
        </td style="vertical-align:top">
        <td bgcolor="#006400" ><center><img src="ccc.gif"></center> </td>
        <td>
            <?php
            include_once "calender.php";
            ?>
        </td>
    </tr>

    <tr>
        <td colspan="3" style="vertical-align:top">
            <?php
            include_once "footer.html";
            ?>
        </td>
    </tr>


</table>
</body>

<!--   -->

</html>
