<?php

if($this->vars['users'])
{     
echo "<table> <tr><td>name</td><td>score</td><tr>";
      
for($i=0;$i<$this->vars['users'];$i++)
{
    echo "<tr><td>".$this->vars['result'][$i]["name"]."</td><td>".$this->vars['result'][$i]["score"]."</td><tr>";
}

echo "</table>";
}