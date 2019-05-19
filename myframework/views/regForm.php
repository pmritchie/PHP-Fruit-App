<section class="container">
<div class="col-5 offset-md-3 row align-items-center">
<?

function create_image($cap){
    unlink("./assets/image1.png");
    global $image;
    $image = imagecreatetruecolor(200, 50) or die("Cannot Initialize new GD image stream");
    $background_color = imagecolorallocate($image, 255, 255, 255);  
    $text_color = imagecolorallocate($image, 0, 255, 255);
    $line_color = imagecolorallocate($image, 64, 64, 64);
    $pixel_color = imagecolorallocate($image, 0, 0, 255);
    imagefilledrectangle($image, 0, 0, 200, 50, $background_color);
    for ($i = 0; $i < 3; $i++) {
        imageline($image, 0, rand() % 50, 200, rand() % 50, $line_color);
    }
    for ($i = 0; $i < 1000; $i++) {
        imagesetpixel($image, rand() % 200, rand() % 50, $pixel_color);
    }
    $text_color = imagecolorallocate($image, 0, 0, 0);
    ImageString($image, 22, 30, 22, $cap, $text_color);
/************************************/

    $_SESSION["cap"] = $cap;

/*************************************/
    imagepng($image, "./assets/image1.png");
}
  create_image($data["cap"]);
  echo "<img src='/assets/image1.png'>";

?>
<form class="container m-3 needs-validation" action="/welcome/regComplete" method="POST" novalidate>
  <div class="form-group ">
    <label for="validationCustom01">Email address</label>
    <input name="email" type="email" class="form-control" id="validationCustom01" aria-describedby="emailHelp" placeholder="Enter email" required>
    <div class="valid-feedback">
        Looks good!
    </div>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="validationCustom02">Password</label>
    <small class="form-text text-muted">Minimum of 6 characters</small>
    <input name="password" type="password" class="form-control" id="validationCustom02" placeholder="Password" minlength="6"  required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Bio</label>
    <textarea name="bio" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="custom-control custom-radio">
  <input class="custom-control-input" type="radio" name="radio-stacked" id="customControlValidation1" value="option1" required>
  <label class="custom-control-label" for="customControlValidation1">Female</label>
</div>
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input"  name="radio-stacked" id="customControlValidation2" value="option2" required>
  <label class="custom-control-label" for="customControlValidation2">Male</label>
</div>
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input"  name="radio-stacked" id="customControlValidation3" value="option2" required>
  <label class="custom-control-label" for="customControlValidation3">Opt Out</label>
  <div class="invalid-feedback">Please select one</div>
</div>
<br>

<div class="form-group">
  <select class="custom-select" required>
  <option value="">Select Age</option>
<? 
    for($i = 13; $i < 100; $i++){
?>
    <option value=<?=$i?>><?=$i?></option>  
<? 
}
?> 
  </select>
  <div class="invalid-feedback">Example invalid custom select feedback</div>
</div>

  <div class="form-check">
    <input type="checkbox" class="form-check-label" id="exampleCheck1">
    <label class="form-check-label m1" for="exampleCheck1">I want to recieve the newsletter</label>
  </div>
  <br>
  <div class="form-group">
        <label for="exampleInputEmail1" class="text-secondary">Enter Captcha </label>
        <input name="captcha" type="captcha" id="captcha" placeholder="">
      </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</section>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>



