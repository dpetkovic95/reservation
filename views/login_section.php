
<section class="w3l-contact-1">
    <div class="contacts-9 py-5">
        <div class="container py-lg-4">
            <div class="headerhny-title text-center">
                <h3 class="hny-title mb-0">LOGIN</h3>
            </div>
            <p class="invalid-form" id="invalid">*Invalid username or password.</p>
            <div class="contact-view mt-lg-5 mt-4">
                <div class="conhny-form-section">
                    <div  class="formhny-sec">
                        <div class="form-grids">
                            <div class="form-input">
                                <input type="text" name="username" id="w3lName" placeholder="Username " required />
                            </div>
                            <div class="form-input">
                                <input type="password" name="password" id="w3lSubject" placeholder="Enter your password " required />
                            </div>
                        </div>
                                      
                        <div class="submithny text-right mt-4">
                            <button type="button" onclick = "login()" id="dugme" class="btn read-button">Login</button>
                        </div>
                        <br>
                        <p>Don't have an account? <a href="registration.php">Sign up now</a>.</p>
                    </div>
                </div>
</section>




<script>
var input = document.getElementById("w3lSubject");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("dugme").click();
  }
});
</script>

<script>
var input = document.getElementById("w3lName");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
   event.preventDefault();
   document.getElementById("dugme").click();
  }
});
</script>



<script> 

  function login() {

  var username = document.getElementById('w3lName').value;
  var password = document.getElementById('w3lSubject').value;
  var myJSON = {"username": username, "password": password};
  var myObj = JSON.stringify(myJSON);
  
  console.log(myObj);
   var xhttp = new XMLHttpRequest();
   xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
     var response = JSON.parse(this.responseText);
     console.log(response.success);
     if(response.success) {
        document.getElementById("invalid").style.display = "none";
        window.location.href = "index.php"
     }else  {
        document.getElementById("invalid").style.display = "block";

     }
      
    }
   };
  xhttp.open("POST", "connections/login.php", true);
  xhttp.setRequestHeader("Content-type", "json");
  xhttp.send(myObj);
  
   }
</script>

