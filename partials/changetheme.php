    <script>
     $(document).ready(function(){
          
     $('#light').on('click',function(){
      
        document.cookie = "theme = 1; path=/";
        $('#light').addClass("d-none");
         $('.dark').removeClass("d-none");
         $(':root').css('--mainWhite','#fff');
         $(':root').css('--mainblack','#000');
         $(':root').css('--morelightblack','rgba(0,0,0,.1)');
         $(':root').css('--lightblack','rgba(0,0,0,.2)');
         

   });
         
  $('#dark').on('click',function(){
     
       document.cookie = "theme = 0; path=/";
         $('#light').removeClass("d-none");
         $('.dark').addClass("d-none");
         $(':root').css('--mainWhite','#000');
         $(':root').css('--mainblack','#fff');
         $(':root').css('--morelightblack','rgba(255,255,255,.1)');
         $(':root').css('--lightblack','rgba(255,255,255,.2)');
         

   });
         <?php if(isset($_COOKIE['theme']) && $_COOKIE['theme'] == '1'): ?>
         $('#light').addClass("d-none");
         $('.dark').removeClass("d-none");
         $(':root').css('--mainWhite','#fff');
         $(':root').css('--mainblack','#000');
         $(':root').css('--morelightblack','rgba(0,0,0,.1)');
         $(':root').css('--lightblack','rgba(0,0,0,.2)');
         <?php endif ?>
        <?php if(isset($_COOKIE['theme']) && $_COOKIE['theme'] == '0'): ?>
         $('#light').removeClass("d-none");
         $('.dark').addClass("d-none");
         $(':root').css('--mainWhite','#000');
         $(':root').css('--mainblack','#fff');
         $(':root').css('--morelightblack','rgba(255,255,255,.1)');
         $(':root').css('--lightblack','rgba(255,255,255,.2)');

         <?php endif ?>
});
        
        
    
    </script>