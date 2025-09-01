<?php
include("connect.php");

$query = "select * from student";
$data = mysqli_query( $con,$query);

$total = mysqli_num_rows( $data);
$result = mysqli_fetch_assoc(result: $data);


echo $result ["full_name"]." ".$result["user_name"]." ".$result["email"]." ".$result["contact"]." ".$result ["password"]." ".$result["cpassword"]." ".$result["gendar"];
 if($total!=0)
    {
    
    while($result=mysqli_fetch_assoc($data))
        {
        echo "
        <tr>
        <td>" .$result['full_Name']. "</td>
        <td>" .$result['user_Name']. "</td>
        <td>" .$result['email']. "</td>
        <td>" .$result['contact']. "</td>
        <td>" .$result['password']. "</td>
        <td>" .$result['cpassword']. "</td>
        <td>" .$result['gendar']. "</td>
        

        </tr>
        ";
    }
 }

?>
              
            
        </table>
    </body>
</html>