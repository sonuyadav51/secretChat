<?php 

$full_link = "https://sonu-secret-msg.herokuapp.com/message.php?id=sonuYadav";
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <title>secret chat 2020</title>
    <?php include("./partials/style.php"); ?>
   
</head>

<body>
  <!--Model begin here-->
<div class="modal fade" id="alertModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Important !!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="row justify-content-center p-2">
            <div class="col-12">
                <div class=" p-2">
                    <div class="info">
                        <h5 class="text-center">please take screenshot of following details before <span class="text-danger text-uppercase">logout!.</span></h5>
                        <hr>
                     
                        <div class="data p-2" style="border:2px solid #ff9933; border-radius:7px;">
                            <h5>USERNAME: <span class="text-danger">
                                    SonuYAdav25</span></h5>
                            <h5>PASSWORD: <span class="text-danger">
                                   2343</span></h5>
                        </div>
                        <hr>
                        <h6>you can login with this details anytime anywhere to see messages sent by your love one. <br> <span class="text-danger">password can not be restored!</span></h6>
                        <h2 class="text-center text-danger">#StayAtHome</h2> 
                    </div>
                </div>
            </div>

    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="model/logout.php" class="btn btn-danger">Logout Now</a>
      </div>
    </div>
  </div>
</div>

  <!--Modal end here-->
  
    <nav class="navbar text-uppercase  fixed-top nav_bar">
        <a href="#"  class="navbar-brand brand_icon">
            <h5 class="text-center text-info text-capitalize">
                <span class="text-danger"><i class="fas fa-lock"></i> secret</span> chitChat <span class="text-danger"><i class="fas fa-heart"></i></span></h5>
        </a>
        <a href="#" class="btn btn-sm btn-outline-danger login text-uppercase " data-toggle="modal" data-target="#alertModal">logout</a>

        <p class="text-left d-none" style="font-size:.7rem;"><span class="text-success" style="font-size:.8rem;">Sonu YADAV </span></p>

    </nav>
    <div class="container mt-5 margin-top" style="margin-top:200px;">
        <div class="row justify-content-center">
            <div class="col-11 col-md-6">
                <div class="box_shadow p-2">
                    <div class="info">
                        <h5 class="text-center">please take screenshot of following details</h5>
                        <hr>
                       
                        <div class="data p-2" style="border:2px solid #ff9933; border-radius:7px;">
                            <h5>USERNAME: <span class="text-danger">
                                    SonuYAdav25</span></h5>
                            <h5>PASSWORD: <span class="text-danger">
                                   2343</span></h5>
                        </div>
                        <hr>
                        <h6>you can login with this details anytime anywhere to see messages sent by your love one. <br> <span class="text-danger">password can not be restored!</span></h6>
                        <h2 class="text-center text-danger">#StayAtHome</h2> 
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-11 col-md-6">
                <div class="box_shadow p-3 links ">
                    <h5 class="text-info">Share this link with your friend and get anonymous Messages.</h5>
                    <input type="text" class="generated_link text-lowercase" value="<?php echo $full_link ?>">
                    <a href="#" class="btn btn-block btn-danger copyLink mb-1"><i class="fas fa-copy"></i> Copy Link </a>
                    <a href="whatsapp://send?text=<?php echo $full_link; ?>" data-action="share/whatsapp/share" class="btn btn-block btn-success whatssappLink"><i class="fab fa-whatsapp"></i> Add To Whatsapp Status </a>
   
                </div>
            </div>
        </div>
    </div>
    <div class="container p-3" id="msgbox">
        <div class="row justify-content-center box_shadow p-3">
            <h4 class="text-danger text-center">Messages sent By Your Friends</h4><br>
            <p class="text-center"><a href="#msgbox" class="btn btn-info btn-sm refresh">refresh for new messagess</a></p>
         
            <div class="col-12 col-md-6 box_shadow p-2 mt-5">
                <p class="text-center text-capitalize">
                    Messages will Appear here
                </p>
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
<script>
   
    const input = document.querySelector('.generated_link');
    const btn = document.querySelector('.copyLink');
    btn.onclick = function(e){
        e.preventDefault();
        input.select();
        document.execCommand("copy");
        alert("link copied !!");
    }
    $('.refresh').on('click', function(){
       window.location.reload(); 
    });


</script>
