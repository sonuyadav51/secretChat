<?php  error_reporting(0);?>
<?php 
  

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <title>secret chit chat 2020</title>
  <?php include("./partials/style.php"); ?>

</head>

<body>
   <?php include("./partials/model.php"); ?>
   <?php include("./partials/theme.php"); ?>
   <nav class="navbar text-uppercase  fixed-top nav_bar">
       <a href="#" class="navbar-brand brand_icon">
              <h5 class="text-center text-info text-capitalize">
               <span  class="text-danger"><i class="fas fa-lock"></i> secret</span> chitChat <span class="text-danger"><i class="fas fa-heart"></i></span></h5>
            </a>
            
        <button class="btn btn-sm btn-outline-danger login text-uppercase " data-toggle="modal" data-target="#alertModal">login</button> 
 

   </nav>
   
    <div class="container mt-5 margin-top">
    <div class="row justify-content-center">
        <div class="col-11 col-md-6">
        <div class="box_shadow p-3">
            <?php if(!isset($_GET['status']) && $_GET['status'] != '1'): ?>
            <marquee behavior="" direction=""><h3 class="text-center text-info text-capitalize">
               <span  class="text-danger"><i class="fas fa-lock"></i> secret</span> chitChat <span class="text-danger"><i class="fas fa-heart"></i></span></h3>
               <h6 class="text-center text-capitalize" style="font-size:.8rem;">get secret messages from your friends</h6></marquee> 
                <ul class="p-3 pb-0">
                    <li>
                        Knows what your friends think about you anonymously.
                    </li>
                    <li class="text-succes">
                        Please allow <span class="text-danger">NOTIFICATION</span> to recieve all the notification for new messages.
                    </li>
                    <li>
                        Make your bond more stronger with your love one.
                    </li>
                    <li>
                        Please <span class="text-danger">#StayAtHome.</span> 
                    </li>
                </ul>
                <?php endif; ?>
                
                <!--success message after sending message-->
                <?php if(isset($_GET['status']) && $_GET['status'] == '1'): ?>

                <h1 class="text-center text-danger " style="font-size:5rem;"><i class="fas fa-heart"></i></h1>
                
                <h4 class="text-center">Thanks for writing anonymous message for <span class="text-capitalize"><?php echo $data['name']; ?></span>.</h4>
                <h2 class="text-center text-danger">#StayAtHome</h2> 
                <?php endif ?>
            </div>
        </div>
    </div>

    </div>

    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-11 col-md-6">
               <div class="box_shadow p-3 py-4">
                <form action="./model/register.php" method="post" class="">
                   <label for="user_name" style="font-weight:bold">Enter Your Name :</label>
                    <input type="text" name="user_name" placeholder="enter your name" class="user_name" id="user_name" required>
                    <button type="submit" name="submit" class="form-control btn btn-danger btn-sm text-uppercase my-3">creat your own link</button>
                    
                    <?php if(isset($_GET['status']) && $_GET['status'] == '1'): ?>
                    <h5 class="text-center mb-4">Already have an account?</h5>
                    <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#alertModal">Login</a>
                    <?php endif ?>
                </form>
                </div>
            </div>
        </div>
    </div>
    
    <?php include("./partials/footer.php"); ?>
  

    <script src="./assests/js/lib/jquery.js"></script>
    <script src="./assests/js/lib/bootstrap.min.js"></script>
    <script src="./assests/js/lib/all.min.js"></script>
    <script src="./assests/js/app.js"></script>
  <?php include("./partials/changetheme.php"); ?>
</body>

</html>
