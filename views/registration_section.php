<section class="w3l-contact-1">
    <div class="contacts-9 py-5">
        <div class="container py-lg-4">
            <div class="headerhny-title text-center">
                <h3 class="hny-title mb-0">Registration</h3>
            </div>
            <div class="contact-view mt-lg-5 mt-4">
                <div class="conhny-form-section">
                    <form action="connections/register.php" method="post" class="formhny-sec">

                        <div class="form-grids">
                        <div class="form-input">
                                <input type="text" name="first_name" id="first_name" placeholder="First name *"
                                       required/>
                            </div>
                        <div class="form-input">
                                <input type="text" name="last_name" id="last_name" placeholder="Last name *"
                                       required/>
                            </div>
                            <div class="form-input">
                                <input type="text" name="phone_number" id="phone_number" placeholder="Phone number *"
                                       required/>
                            </div>
                            <div class="form-input">
                                <input type="text" name="username" id="username" placeholder="Enter your username *"
                                       required/>
                            </div>
                            <div class="form-input">
                                <input type="email" name="email" id="email" placeholder="Enter your email *"
                                       required />
                            </div>
                            <div class="form-input">
                                <input type="password" name="password" id="password" placeholder="Enter your password *"
                                       required />
                            </div>
                            <div class="form-input">
                                <input type="password" name="password_2" id="password" placeholder="Confirm your password *"
                                       required />
                            </div>
                        </div>
                        <div class="submithny text-right mt-4">
                            <button type="submit" name="submit" value='true' class="btn read-button">Register</button>
                        </div>
                        <p>
                            Already a member? <a href="login.php">Sign in</a>
                    </form>
                </div>
</section>