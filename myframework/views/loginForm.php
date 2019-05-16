<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('click', function() {
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

<section class="jumbotron vertical-center">
<div class="container">

<div class="col-5 offset-md-3 align-items-center">
<form class="container m-3 needs-validation" action="/welcome/index" method="POST" novalidate>
  <div class="form-group">
    <label for="validationCustom01">Email address</label>
    <input type="email" name="email" class="form-control" id="validationCustom01" aria-describedby="emailHelp" placeholder="Enter email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="validationCustom02">Password</label>
    <input type="password" name="password" class="form-control" id="validationCustom02" placeholder="Password" required>
  </div>
  <input type="button" value ="Login" class="btn btn-primary" id="signIn"/>
</form>
</div>
</div>
</section>


<script>
  $("#signIn").click(function(){
    $.ajax({
        method: "POST",
        url: "/welcome/ajaxPar",
        data: {email:$("#validationCustom01").val(), password: $("#validationCustom02").val()},
        success : function(msg){
           
            if(msg=="welcome"){
                window.location = '/welcome/index'
            }else{
              alert("Wrong email try bob@saget.com")
            }
        }
      })
    })
</script>