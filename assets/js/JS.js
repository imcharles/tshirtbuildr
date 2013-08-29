  <script>
  //<--Colorizer-->
    jQuery(function(){
       $(".img-swap").hover(
            function(){this.src = this.src.replace("_front","_back");},
            function(){this.src = this.src.replace("_back","_front");
       });
  });
  $(document).ready(function() {  
    $('.product-preview').productColorizer({'secondaryTransparency':1});
  });

  //<--Drag and Drop Functionality-->
  // $(function  () {
    // $("#draggable").draggable();
    // $("#droppable").droppable({
    //    drop: function( event, ui ) {
    //     $( this )
    //       .addClass( "ui-state-highlight" )
    //       .find( "p" )
    //         .html( "Dropped!" );
    //   }
    // });
    // $("#resizable").resizable();
  // })

  //<--Homepage product flip back and forth-->
    $(document).on('click', '#collared', function(){
        $('#image').attr('src','/assets/img/collared_front.png');
        $('#tt-mask').attr('src' , '/assets/img/collared_mask_front.png');
    });
    $(document).on('click', '#tshirt', function(){
        $('#image').attr('src','/assets/img/tshirt_front.png');
        $('#tt-mask').attr('src' , '/assets/img/tshirt_mask_front.png');
    });
    $(document).on('click', '#sweatshirt', function(){
        $('#image').attr('src','/assets/img/sweatshirt_front.png');
        $('#tt-mask').attr('src' , '/assets/img/sweatshirt_mask_front.png');
    });
    $(document).on('click', '#hat', function(){
        $('#image').attr('src','/assets/img/hat_front.png');
        $('#tt-mask').attr('src' , '/assets/img/hat_mask_front.png');
    });
    $(document).on('.hover', '#image', function(){
        $('image').addclass('.img-swap');
        $('tt-mask').addclass('.img-swap');
    });
  </script>
  