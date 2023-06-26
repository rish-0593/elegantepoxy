<?php
//$to = "crm.marasim@gmail.com";
$to = "dyyayavar7491@gmail.com";
$subject = "Enquiry From website :Apex Splendour ";
$headers = "From:<apex-splendour >\n";
$headers .= "MIME-Version: 1.0\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\n";

$message = "<html><body>";
$message .= "<table width='400'>
  <tr>
    <td width='31'>&nbsp;</td>
    <td width='122'>Name</td>
    <td width='239'>".$_REQUEST['name']."</td>
  </tr>
  
  
  
  <tr>
    <td>&nbsp;</td>
    <td>Email</td>
    <td>".$_REQUEST['email']."</td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td>Mobile</td>
    <td rowspan='2'>".$_REQUEST['phone']."</td>
  </tr>
  
    <tr>
    <td>&nbsp;</td>
    <td>Comment</td>
    <td rowspan='2'>".$_REQUEST['Comment']."</td>
  </tr>
  
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>";

$message .= "</body></html>";

mail($to, $subject, $message, $headers);
if($mail)
{
?>
<script language="javascript">

  document.location="thanks.html";
</script>

<?php
}
else
{
?>  
<script language="javascript">

  document.location="thanks.html";
</script>
<?php }?>