<html>

<?
    foreach($data["navigation"] as $key=>$link){
        if($data["pagename"] == $key){
            echo"<a href='".$link."', style='color:red'>".strtoupper($key)."</a> |";
        }else{
            echo"<a href='".$link."', style='color:black'>".strtoupper($key)."</a> |";
        }
    }
?>