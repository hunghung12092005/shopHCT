<?php 
   if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
}  
?>
<div class="container">
    <h1>Góp ý cho chúng tôi</h1>
    <form id="contact-form" method="post">
    <div class="form-group">     
        <input type="hidden" name="user_id" value="<?= $user_id ?>">
    </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="message">Message:</label>
        <textarea id="message" name="noi_dung" required></textarea>
      </div>
      <button type="submit" class="submit-btn">Send Message</button>
    </form>
  </div>

  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2/dist/email.min.js"></script>
  <!-- <script>
    document.getElementById('contact-form').addEventListener('submit', function(event) {
      event.preventDefault();

      var serviceID = 'service_mmjhzig';
      var templateID = 'template_xfhek9m';
      var userID = '41hW0aa-uFS2o7EqP';

      emailjs.init(userID);

      var formData = {
        
        name: document.getElementById('name').value,
        to: document.getElementById('email').value,
        message: document.getElementById('message').value

      };

      emailjs.send(serviceID, templateID, formData)
        .then(function(response) {
          alert('Email sent successfully!');
          document.getElementById('email-form').reset();
        }, function(error) {
          alert('Error sending email. Please try again.');
          console.log('Email send error:', error);
        });
    });
  </script> -->
