<?php
echo "Ma view est bien chargée";

echo "<h1>VIEW</h1>";

foreach ($taskListView as $task){
  echo "<br/>-".$task["name"]."<form method='post' action= 'http:\//localhost/classes/index.php/tasks' >
<button type='hidden' id='reset'>X</button></form>";


}



 ?>
 <form method="post" action="http://localhost/classes/index.php/tasks" >
         <input type="text" name="name" >
         <button type="submit" name="submit">Add Task</button>
     </form>
