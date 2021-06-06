          <!--Model begin here-->
<div class="modal fade" id="alertModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login Here</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action="./model/login.php" method="post">
             <input type="text" class="form-control my-2" name="user_name" placeholder="Enter your Username" required>
             <input type="password" class="form-control my-2" name="pwd" placeholder="Enter your Password" required>
             <button type="submit" name="login" class="form-control my-2 btn btn-primary">Login</button>
             <h5 class="text-center">Not having an account</h5>
             <a href="./index.php" class="btn btn-danger form-control">Creat Account</a>
         </form>
        
           

      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

  <!--Modal end here-->