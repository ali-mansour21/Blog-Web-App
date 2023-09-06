<?php 
include "inc/security.php";
$user = $_SESSION['EMAIL'];
$query= "SELECT * FROM articles WHERE operator = '$user'";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
?>
<center>
    <h2>View Articles</h2>
    <table border="1" cellspacing="5" width="80%">
        <tr>
            <th>Title</th>
            <th>Category</th>
            <th>Date</th>
            <th>Source</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
<?php
while($row = mysqli_fetch_row($result)){
    echo "<tr>
            <td><a href=artDetails.php?ID=".$row[0].">".$row[1]."</a></td>
            <td>".$row[9]."</td>
            <td>".$row[2]."</td>
            <td>".$row[3]."</td>
            <td>";
            if($row[8]==1){
                echo"<a href=status.php?id=".$row[0]."&status=U>UnPublish</a>";
            }else{
                echo"<a href=status.php?id=".$row[0]."&status=P>Publish</a>";
            }
            echo "<td><a href=status.php?id=".$row[0]."&status=d >Delete</a> <a href=editArticle.php?id=".$row[0].">Edit</a></td>
          </tr>";
}
?>
</table>
</center>