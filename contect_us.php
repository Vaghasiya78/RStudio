<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<style>
    input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>

<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

        <?php include 'includes/navbar.php'; ?>

        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="container">
                    <div style="text-align:center">
                        <h2>Contact Us</h2>
                        <p>FeedBack, or leave us a message:</p>
                    </div>
                    <div class="row">
                        <div class="column">
                            <img src="./user_photos/map.jpg" style="width:100%">
                        </div>
                        <div class="column">
                            <form action="">
                                <label for="fname">First Name</label>
                                <input type="text" id="fname" name="firstname" placeholder="Your name..">
                                <label for="lname">Last Name</label>
                                <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                                <label for="country">Country</label>
                                <select id="country" name="country">
                                    <option value="india">India</option>
                                    <option value="canada">Canada</option>
                                    <option value="usa">USA</option>
                                </select>
                                <label for="subject">Subject</label>
                                <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
                                <input type="submit" value="Submit">
                            </form>
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