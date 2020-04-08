<?php
$servername="localhost";
$username="root";
$password="";

// Create connection
$conn = new mysqli($servername, $username, $password);


// Check connection
if ($conn->connect_error) {
    die("Connection failed:".$conn->connect_error);
} 
echo "<center><font face='Times New Roman' size='24'>",$_POST["hdg"],"</font></center>";
?>
<?php
echo "<center><table border='0'><tr><td>";
echo "<i><font face='Times New Roman' size='3'><b>Name:</b>",$_POST["name"],"</font></i>";
echo "<br><i><font face='Times New Roman' size='3'><b>Department:</b>",$_POST["dept"],"</font></i>";
echo "<br><i><font face='Times New Roman' size='3'><b>Organization:</b>",$_POST["org"],"</font></i>";
echo "<br><i><font face='Times New Roman' size='3'><b>Country:</b>",$_POST["ctry"],"</font></i>";
echo "<br><i><font face='Times New Roman' size='3'><b>City:</b>",$_POST["city"],"</font></i>";
echo "<br><i><font face='Times New Roman' size='3'><b>E-Mail:</b>",$_POST["email"],"</font></i>";
echo "</td><td></td><td></td></tr></table></center>";
echo "<hr>";
?>
<?php
echo "<table border='0'><tr><td>";
echo "<i><font face='Times New Roman' size='4'><b><p>Abstract--</p></b><p>",$_POST["abs"],"</p></font></i>";
echo "<i><font face='Times New Roman' size='4'><b><p>Keywords--</p></b><p>",$_POST["key"],"</p></font></i>";
echo "<br><font face='Times New Roman' size='4'><b><p>I.Introduction:</p></b><p>",$_POST["intro"],"</p></font>";
echo "<br><font face='Times New Roman' size='4'><b><p>II.Methodology:</p></b><p>",$_POST["method"],"</p></font>";
echo "</td><td><br></td><td><font face='Times New Roman' size='4'><b><p>III.</b>",$_POST["subtitle"],"</p><p>",$_POST["res"],"</p></font>";
echo "<br><font face='Times New Roman' size='4'><b><p>IV.Conclusion:</p></b><p>",$_POST["con"],"</p></font>";
echo "<br><font face='Times New Roman' size='4'><b><p>V.References:</p></b><p>",$_POST["ref"],"</p></font>";
echo "<br><br><font color='red'>IEEE conference templates contain guidance text for composing and formatting conference papers. Please ensure that all template text is removed from your conference paper prior to submission to the conference. Failure to remove template text from your paper may result in your paper not being published. </font></td></tr></table>";
?>
