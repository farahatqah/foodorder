<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sushi Restaurant Order System</title>
    <script src="{{ asset('js/app.js') }}"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">   
    <style>
      .header {
        background-color: #e1e5e6;
        padding: 20px;
        text-align: center;
      }
      .footer{
        position:relative;
        left: 0;
        bottom: 0;
        height: inherit;
        width:100%;
        color:black;
        background-color: #e1e5e6;
    }
    .column {
      float: left;
      width: 33.33%;
      padding: 10px;
      text-align: center;
      /*height: 300px; /* Should be removed. Only for demonstration */
    }
    .footer .footer-content .footer-section-about {
      text-align:center;
      padding:10px;
    }
    .footer-bottom{
      text-align:center;
      padding: 10px;
    }
    .input-text{
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    </style>
</head>
<body>
<div class="header">
  <h1>Sushi Restaurant</h1>
  <p>Order online system</p>
</div>
<div class="container">
  @yield('content')
</div>
<br><br>
<div class="footer">
  <div class= "footer-content">
    <div class="footer-section-about">
        <h2 class= "logo-text"><span>Food</span>Order</h1>
          <p>
            Food order is the preferabble for us to dine-in or takeaway
          </p>
    </div>
    <div class="row">
      <div class="column" >
        <h2>Contact Information </h2>
        <span><i class= "fas fa-phone"></i>&nbsp;03-6421 4554</span><br>
        <span><i class= "fas fa-envelope"></i>&nbsp;info.foodorder@gmail.com</span><br>
        <a href="#">Facebook<i class="fab fa-facebook"></i></a><br>
        <a href="#">Instagram<i class="fab fa-instagram"></i></a><br>
        <a href="#">Youtube<i class="fab fa-youtube"></i></a><br>
        <a href="#">Twitter<i class="fab fa-twitter"></i></a><br>
        <a href="#">Linked-In<i class="fab fa-linkedin"></i></a><br>
      </div>
  
      <div class="column">
        <h2>Quick Link</h2>
        <a href="#">Events</a><br>
        <a href="#">Terms and Condition</a><br>
        <a href="#">Privacy Policy</a><br>
        <a href="#">Gallery</a><br>
      </div>  

      <div class="column">
        <h2>Contact us</h2>
        <form action="footer.html" method="post">
          <input type="email" name="email" class="input-text" placeholder="Your email address..."><br/>
          <textarea name="message"class="input-text" placeholder="Your message..."></textarea>
          <button type="submit" class="btn btn-big">
            <i class="fas fa-envelope">Send</i>
          </button>
        </form>
      </div>
    
  </div>
  <div class="footer-bottom">
    &copy; Designed by Group 6
  </div>
</div>
</body>
</html>