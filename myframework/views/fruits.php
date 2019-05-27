<a href="/crud/addform">ADD NEW ITEM</a>
<br>
<? 
foreach($data["fruits"] as $fruit){
    echo $fruit["name"];
    echo " <a href='/crud/editForm?id=".$fruit["id"]."'>Edit</a>";
    echo " <a href='/crud/delete?id=".$fruit["id"]."'>Delete</a>";
    echo "<br>";

}
?>