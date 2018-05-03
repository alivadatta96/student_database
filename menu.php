<?
$reqlevel=1;
include "ck.php";
if($user_current_level<0)
{
?>
<h2 >Entry</h2> 
     <div > 
   <li><a href="entry_stud.php" target="mainFrame">Student</a></li>
   <li><a href="" target="mainFrame">Menu2-2</a></li>
</div>
<?
}
?>
<h2 class="accordion-header">View & Edit</h2> 
     <div class="accordion-content">
<?
if($user_current_level<0 or $user_current_level>=10)
{
?>	 
   <li><a href="view.php" target="mainFrame">Student Details</a></li>
<?
}
?>
   <li><a href="" target="mainFrame">Menu2-2</a></li>
</div>

<h2 class="accordion-header">System</h2> 
     <div class="accordion-content"> 
   <li><a href="#" target="mainFrame">Change Password</a></li>
   <li><a href="logoff.php" target="mainFrame">Logout</a></li>
</div>