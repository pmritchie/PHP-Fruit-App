<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">My Framework</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
<?
    foreach($data["navigation"] as $key=>$link){
        if($data["pagename"] == $key){
?>
            <li class="nav-item">
                <a class="nav-link text-primary" href="<?=$link?>"><?=strtoupper($key)?></a>
            </li>
<?
        }else{
?>
            <li class="nav-item">
                <a class="nav-link text-secondary" href="<?=$link?>"><?=strtoupper($key)?></a>
            </li>
<?
        }
    }
?>
          
        </ul>
      </div>
    </div>
  </nav>