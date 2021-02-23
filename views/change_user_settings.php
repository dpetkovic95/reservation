<?php include_once 'connections/update_user_settings.php'; ?>
<section class="w3l-contact-1">
    <div class="contacts-9 py-5">
        <div class="container py-lg-4">
            <div class="headerhny-title text-center">
                <h3 class="hny-title mb-0">Account settings</h3>
            </div>
            <div class="contact-view mt-lg-5 mt-4">
                <div class="conhny-form-section">
                    <form action="connections/update_user_settings.php" method="post" class="formhny-sec" style="text-align:center">

                        <div class="form-grids">
                        <div class="form-input">
                                <label for="first_name">First name</label>
                                <input value = "<?php echo $_SESSION['first_name'];?>" type="text" name="first_name" id="first_name" placeholder="First name *"
                                       />
                        </div>
                        <div class="form-input">
                                 <label for="last_name">Last name</label>
                                 <input value = "<?php echo $_SESSION['last_name'];?>" type="text" name="last_name" id="last_name" placeholder="Last name *"
                                       />
                        </div>
                            <div class="form-input">
                                <label for="phone_number">Phone number</label>
                                <input value = "<?php echo $_SESSION['phone_number'];?>" type="text" name="phone_number" id="phone_number" placeholder="Phone number *"
                                       />
                            </div>
                        </div>
                        <div class="submithny mt-4">
                            <button type="button" name="submit" value='true' class="btn read-button" id="change-user-settings-btn">Update account</button>
                        </div>
                        <div class="button-section" style="width: 55%">
                            <div class="success-msg" style="display: none;" id="update_success">
                                <i class="fa fa-check"> Successful update.</i>
                            </div>
                        </div>
                    </form>
                </div>
</section>

<script> 

    document.getElementById('change-user-settings-btn').addEventListener('click', function(){
    var id = '<?php echo $_SESSION['id']; ?>';
    var name = document.getElementById('first_name').value;
    var surname = document.getElementById('last_name').value;
    var phone = document.getElementById('phone_number').value;

    var json = {"id": id,"first_name": name, "last_name": surname, "phone_number": phone};

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        document.getElementById('update_success').style.display = 'block';
       }
     };
     xhttp.open("POST", "connections/update_user_settings.php", true);
     xhttp.send(JSON.stringify(json));
    });



</script>