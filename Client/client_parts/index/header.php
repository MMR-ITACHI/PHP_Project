

    <nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
    <?php 
        include_once("../hakiconfig.php");
        $Take = $_SESSION['email'];

        $l = $Haki->query("SELECT * FROM users WHERE email ='$Take'");

        $e = $l->fetch_assoc();
                ?>
          
          <a class="navbar" href="client_dashboard.php" ><h3><?php echo "Welcome " .$e['fullname'] ?></h3></a> <br>
     
    </div>
    <ul class="nav navbar-nav navbar-right ">
    <li class="active mt-20"><a href="client_dashboard.php">Dashboard</a></li>
            <li><a href="application_form.php">Application Form</a></li>
            <li><a href="loan_form.php">Loan Form</a></li>
            <li><a href="Transaction_Info.php">Transaction Info</a></li>
            <li><a href="online_payment_form.php">Online Payment</a></li>
            <li><a href="Loan_Info.php">Loan Info</a></li>
            <li><a href="../logout.php">Logout</a></li>
    </ul>
  </div>
</nav>



