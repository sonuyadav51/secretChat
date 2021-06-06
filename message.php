<?php 
  error_reporting(0);
  $user_id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>secretchitchat 2020</title>
    <?php include("./partials/style.php"); ?>

</head>
<body>
   <?php include("./partials/model.php"); ?>
       <nav class="navbar text-uppercase  fixed-top nav_bar">
       <a href="#" class="navbar-brand brand_icon">
              <h5 class="text-center text-info text-capitalize">
               <span  class="text-danger"><i class="fas fa-lock"></i> secret</span> chitChat <span class="text-danger"><i class="fas fa-heart"></i></span></h5>
            </a>
                <button class="btn btn-sm btn-outline-danger login text-uppercase " data-toggle="modal" data-target="#alertModal">login</button>

   </nav> 
    
       <div class="container my-5 margin-top">
        <div class="row justify-content-center">
            <div class="col-11 col-md-6">
               <div class="box_shadow p-3 py-4">
               <h4 class="text-info mb-1">Send message to your friend anonymously,<br>
               he/she will never know who sent message him/her.</h4>
               <h2 class="text-center text-danger mb-3">#StayAtHome.</h2>
                <form action="model/messagedb.php?id=<?php echo $user_id ;?>" method="post">
                  <textarea name="msg" id="msg" cols="30" rows="10" class="form-control" placeholder="Write your message here" required></textarea>
                  <button type="submit" name="submit" class="btn btn-danger btn-block mt-4">Send Secret Message</button>
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