<!DOCTYPE html>

<html>

<head>
	<title>Account Registration</title>
    <script type="text/javascript" src = "createAccount.js"></script>
    <Link rel="stylesheet" type="text/css" href="createAccount.css">
</head>

<body>

<form id="contactForm" onsubmit="return formValidator()" method="POST" action="createAcc.php">
    <div class="container">
        
    <a href="Frontpage.html"><img src="https://w7.pngwing.com/pngs/906/671/png-transparent-newspaper-editorial-cartoon-headline-comics-white-cartoon.png"></img></a>
            
        <h1>Create Account</h1>
        
        <div>
            <input type="text" id="fName" name="fName" placeholder="First Name">
        </div>

        <div>
            <input type="text" id="lName" name="lName" placeholder="Last Name">
        </div>

        <div>
            <input type="text" id="username" name="username" placeholder="Username">
            <p class="validatorDesc">within 8-15 characters</p>
        </div>

        <div>
            <input type="text" id="contactNo" name="contactNo" placeholder="Contact number">
        </div>

        <div>
            <input type="email" id="email" name="email" placeholder="Email Address">
            <p class="validatorDesc">must contain @</p>
        </div>

        <div>
            <input type="password" id="password" name="password" required placeholder="Create Password"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" >
            <p class="validatorDesc">Must contain at least one number and one uppercase and lowercase letter,</p>
            <p class="validatorDesc"> </p>
            <p class="validatorDesc">and at least 8 or more characters</p>
    
        </div>

        <div>
            <input type="password" id="cpassword" name="cpassword" placeholder="Confirm Password">
            <p class="validatorDesc">must match with password</p>
        </div>
        
                
        <button class="button" type="submit">Create Account</button>
        

        <div class="text">Already have an account? <a href="login.html">Log in.</a></div>
        
    </div>

    <footer>
		<p>Powered by News API</p>
		<p>Contact us: email@example.com</p>
	</footer>

</form>

<script>
    // Add JavaScript to handle form submission
    const contactForm = document.getElementById('contactForm');
    contactForm.addEventListener("submit", (e) =>
    {
        //e.preventDefault(); // Prevent the form from submitting
        // Get the form data
        const formData = new FormData(contactForm);
        const fname = formData.get('fName');
        const lname = formData.get('lName');
        const name = formData.get('username');
        const email = formData.get('email');
        const contactNo = formData.get('contactNo');
        const password = formData.get('password');
        const cpassword = formData.get('cpassword');

        // Send the form data to the server (you can replace this with your own logic)
        // Here, we're simply logging the data to the console
        console.log('Name:', name);
        console.log('First Name:', fName);
        console.log('Last Name:', lName);
        console.log('Email:', email);
        console.log('Password:', password);
        console.log('cPassword:', cpassword);
        // Optionally, reset the form after submission
        //contactForm.reset();
    });

</script>      	
</body>
</html>


