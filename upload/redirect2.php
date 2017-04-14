<?
session_start();
?>

<html>

<body>

<table width="200" align="center" bgcolor="#f0ffff">
  <tr>

    <td colspan="2" width="100%"><img src="../lms2.jpg" width="1280"> </td>

    <td bgcolor="#6495ed" width="100" >
      <form action="../main2.php" method="POST">
        <h3 align="center">You are logged in...</h3>
        <center><input type="submit" value="Logout"/></center>
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
      <a href="../contact/ContactUs.html"><font color="white"><center>Contact us</center></font></a>
    </td>

  </tr>



  <tr>
    <td style="vertical-align:top">
      <?php
      include_once "leftside/left2.html";
      ?>
    </td>
    <td style="vertical-align:top" >
      <?php
      include_once "dropdown2.php";
      ?>
    </td>
    <td style="vertical-align:top">
      <?php
      include_once "../calender.php";
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


</html>