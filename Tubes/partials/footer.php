<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

<script>
    $(".sidebar ul li").on('click' , function(){
      $(".sidebar ul li.active").removeClass('active');
      $(this).addClass('active');
    });

         $('.open-btn').on('click' , function(){
        $('.sidebar').addClass('active');
      
      });

         $('.close-btn').on('click' , function(){
        $('.sidebar').removeClass('active');
      
      })


  </script>