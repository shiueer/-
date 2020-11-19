<?php
session_start();
require("dbconnect.php");
?>
<h1>Delete Task</h1>
<table>
  <tr><form method="post" action="deleteTask.php">
    <td><label>
      <input type="submit" name="Submit" value="送出" />
    </label></td>
    <td><label>
      Task ID: <input name="id" type="text" id="id" />
    </label></td>
	</form>
  </tr>
</table>