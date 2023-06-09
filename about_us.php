<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue layout-top-nav">
  <style>
    html {
      box-sizing: border-box;
    }
    img{
      height: 500px;
      width: 100px;
    }
    *,
    *:before,
    *:after {
      box-sizing: inherit;
    }

    .column {
      float: left;
      width: 25%;
      margin-bottom: 16px;
      padding: 0 8px;
    }

    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      margin: 8px;
    }

    .about-section {
      padding: 50px;
      text-align: center;
      background-color: #474e5d;
      color: white;
    }

    .container {
      padding: 0 16px;
    }

    .container::after,
    .row::after {
      content: "";
      clear: both;
      display: table;
    }

    .title {
      color: grey;
    }

    .button_box {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
    }

    .button:hover {
      background-color: #555;
    }

    @media screen and (max-width: 650px) {
      .column {
        width: 100%;
        display: block;
      }
    }
  </style>
  <div class="wrapper">

    <?php include 'includes/navbar.php'; ?>

    <div class="content-wrapper">
      <div class="container-fluid">
        <div class="about-section">
          <h2>About Us!</h2>
          <h3 style="text-align: center;">Welcome To <span id="W_Name1">Rstudio</span></h3>
          <p><span id="W_Name2">Rstudio</span> is a Professional <span id="W_Type1">Online selling,ecommerce</span> Platform. Here we will provide you only interesting content, which you will like very much. We're dedicated to providing you the best of <span id="W_Type2">Online selling,ecommerce</span>, with a focus on dependability and <span id="W_Spec">online selling, normal designing, fast ui</span>. We're working to turn our passion for <span id="W_Type3">Online selling,ecommerce</span> into a booming <a href="https://www.blogearns.com/2021/05/free-about-us-page-generator.html" rel="do-follow" style="color: inherit; text-decoration: none;">online website</a>. We hope you enjoy our <span id="W_Type4">Online selling,ecommerce</span> as much as we enjoy offering them to you.</p>
          <p>I will keep posting more important posts on my Website for all of you. Please give your support and love.</p>
          <p style="font-weight: bold; text-align: center;">Thanks For Visiting Our Site<br><br>
            <span style="color: blue; font-size: 16px; font-weight: bold; text-align: center;">Have a nice day!</span>
          </p>
        </div>

        <h2 style="text-align:center">Our Team</h2>
        <div class="row">
          <div class="column">
            <div class="card">
              <img src="./user_photos/vaibhav.jpg" alt="Jane" style="width:100%">
              <div class="container">
                <h2>Vaibhav Vaghasiya</h2>
                <p class="title">Devloper</p>
                <p>I am Vaibhav Vaghasiya. Creator and Devloper</p>
                <p>vdvaghasiya78@gmail.com</p>
              </div>
            </div>
          </div>

          <div class="column">
            <div class="card">
              <img src="./user_photos/bhavya.jpg" alt="Mike" style="width:100%">
              <div class="container">
                <h2>Bhavya Patel</h2>
                <p class="title">Designer</p>
                <p>I am Bhavya Patel. Designer</p>
                <p>bhavyap@gmail.com</p>
              </div>
            </div>
          </div>

          <div class="column">
            <div class="card">
              <img src="./user_photos/jeet.jpg" alt="Mike" style="width:100%">
              <div class="container">
                <h2>Jeet Patel</h2>
                <p class="title">Devloper</p>
                <p>I am jeet Patel. Devloper</p>
                <p>jeetp@gmail.com</p>
              </div>
            </div>
          </div>

          <div class="column">
            <div class="card">
              <img src="./user_photos/tirth.jpg" alt="John" style="width:100%">
              <div class="container">
                <h2>Tirth Modi</h2>
                <p class="title">Designer</p>
                <p>I am Tirth Modi. Designer.</p>
                <p>tirthm@gmail.com</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include 'includes/footer.php'; ?>
  </div>

  <?php include 'includes/scripts.php'; ?>
</body>

</html>