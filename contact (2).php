<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Wreaths by Yana | Colorful wreaths for every occasion</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400italic,700italic,400,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Homemade+Apple" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <header>
      <a href="index.html" id="logo" tabindex="-1">
        <h1>Wreaths by Yana</h1>
        <h2><span style="color: #EF0A0E;">Colorful</span> wreaths for every occasion</h2>
      </a>
      <nav>
        <ul>
          <li><a href="index.php" tabindex="1">Home</a></li>
          <li><a href="examples.php" tabindex="2">Examples</a></li>
          <li><a href="about.php" tabindex="3">About</a></li>
          <li><a href="contact.php" class="selected" tabindex="-1">Contact</a></li>
        </ul>
      </nav>
    </header>
    <div id="wrapper">
      <section id="primary">
        <h3>General Information</h3>
		<p>Here are the ways to contact me if you have any questions or you would like to order a wreath.</p>
					<p>Please only use phone contact for urgent inquries.  Otherwise, please fill out the form below and I will contact you to answer your questions and/or go over your design requirements.</p>
            <form action="contact.php" method="POST" enctype="multipart/form-data">
            		<table>
                        <tr>
                            <td><label for="name">Name (required)</label></td>
                        </tr>
                        <tr>
                            <td><input type="text" id="name" name="name" value="" /></td>
                        </tr>
                        <tr>
                            <td><label for="email">Email (required)</label></td>
                        </tr>
                        <tr>
                            <td><input type="text" id="email" name="email" value="" /></td>
                        </tr>
                        <tr>
                            <td><label for="phone">Phone Number with area code (required)</label></td>
                        </tr>
                        <tr>
                            <td><input type="text" id="phone" name="phone" value="" /></td>
                        </tr>
                        <tr>
                            <td><label for="message">Message (required)</label></td>
                        </tr>
                        <tr>
                            <td><textarea id="message" name="message"></textarea></td>
                        </tr>
                        <tr style="display:none">
                            <th><label for="address">Address</label></th>
                            <td><input type="text" id="address" name="address" />
                            <p>Please leave this field blank.</p></td>
                        </tr>
                </table>
                <input type="submit" value="Send" />
            </form>
                  </section>
      <section id="secondary">
        <h3>Contact details</h3>
        <ul class="contact-info">
          <li class="phone"><a href="tel:216-870-8222">216-870-8222</a></li>
          <li class="mail"><a href="mailto:alyabe4@aol.com?subject=Wreath Inquiry">alyabe4@aol.com</a></li>
         </ul>
      </section>

      <footer>
        <a href="https://www.pinterest.com/alyanab15/" tabindex="9"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/color-pinterest-48.png" alt="Pinterest Logo" class="social-icon"></a>
        <a href="https://www.facebook.com/wreathsbyyana" tabindex="10"><img src="https://cdn-images.mailchimp.com/icons/social-block-v2/color-facebook-48.png" alt="Facebook Logo" class="social-icon"></a>
        <p>&copy; 2015 Wreaths by Yana.</p>
      </footer>
    </div>
  </body>
</html>
