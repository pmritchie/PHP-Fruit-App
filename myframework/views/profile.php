<div class="containter m-3">
    <div class="row m-3">
    </div>
    <div class="row">
        <div class="col-3 ">
            <img src="./assets/pica.jpeg" class="img-thumbnail picture">
        </div> 
        <div class="col-2 ">
            <div class="row">
                <p>Email: <? echo $_SESSION["username"]?></p>
            </div>
            <div class="row">
                <p>Bio: <? echo $_SESSION["bio"]?> </p>
            </div>
        </div>
    </div>
    </div>
    <div class="row m-3">
        <form action="profile/update" method="post" enctype="multipart/form-data">
            <label class="btn btn-default btn-file">Browse
                <input name="img" type="file"  sytle="display: none;">
            </label>
            <input type="submit" value="Update" class="btn btn-primary">
        </form>
    </div>
    
        
</div>