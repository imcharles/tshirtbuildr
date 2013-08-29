
// Clothing Designer


  jQuery(document).ready(function(){
    var tshirtDesigner = $('#clothing-designer').fancyProductDesigner({editorMode: false, fonts: ['Arial', 'Fearless', 'Destroy', 'Helvetica', 'Times New Roman', 'Verdana', 'Geneva', 'Arcade', 'Comic Book', 'Open Sans', 'Varsity'], customTextParamters: {x: 210, y: 250, colors: "#000000", removable: true, resizable: true, draggable: true, rotatable: true}}).data('fancy-product-designer');

  $('#print-button').click(function(){
    tshirtDesigner.print();
    return false;
  });
  
  $('#image-button').click(function(){
    tshirtDesigner.createImage();
    return false;
  });
  
  $('#checkout-button').click(function(){

    var product = tshirtDesigner.getProduct(true);

    var output = '';
    if(product instanceof Array) {
      for(var i=0; i < product.length; ++i) {
        output += _getProductOutput(product[i]);
      }
    }
    else {
      output = _getProductOutput(product);
    }
    
    $('#tshirt-output').html(output);
    
    $('.nav-tabs a[href="#output-content"]').tab('show');
    
    return false;
  });
  
  
  $('#clothing-designer')
  .bind('productCreate', function(evt){
    $('#tshirt-output').html('Click the "Checkout" button to see the returning object with all properties.');
    $('#tshirt-price').text(tshirtDesigner.getPrice());
  })
  .bind('priceChange', function(evt, price, currentPrice) {
    $('#tshirt-price').text(currentPrice);
  })
  .bind('imageCreate', function(evt, canvas, base64Image) {
    /*$.post("php/sent_mail.php", { base64_image: base64Image }, function(data) {
      if(data) {
        //window.open('product.png', '_blank');
      }
      else {
        //do what you want here, e.g. alert('Image Generation failed!');
      }
    });*/
  });
  
  function _getProductOutput(product) {
    var output = '<strong>Product:</strong> '+product.title;
    
    output += '<br /><strong>Elements:</strong>';
    output += '<p>';
    $(product.elements).each(function(i, elem) {
      output += '<strong>Title:</strong> ' + elem.title;
      output += '<br />';
      output += '<strong>Parameters:</strong><br />';
      for (var prop in elem.parameters) {
          output += prop + ": " + elem.parameters[prop] + ', ';
       }
       output = output.substring(0, output.length-2);
       output += '<br /><br />';
    });
    output += '</p>';
    return output;
  }
  
  //recreate products
  $('#recreation-button').click(function(){
    var product = tshirtDesigner.getProduct(false);
    $('#recreation-form input:first').val(JSON.stringify(product)).parent().submit();
    return false;
  });
  
  //click handler for input upload
  $('#upload-button').click(function(){
    $('#design-upload').click();
    return false;
  });
  
  //upload image
  document.getElementById('design-upload').onchange = function (e) {
    if(window.FileReader) {
      var reader = new FileReader();
        reader.readAsDataURL(e.target.files[0]);
        reader.onload = function (e) {
          var image = new Image();
          image.src = e.target.result;
          image.onload = function() {
          
            //max. width and height for the uploaded image
            var maxWidth = 200,
              maxHeight = 320,
              scaling = 1;
            
            //calculate scaling
            if(this.width > maxWidth && this.width >= this.height) {
              scaling = maxWidth / this.width;
            }
            if(this.height > maxHeight  && this.height > this.width) {
              scaling = maxHeight / this.height;
            }
            //add new image to product
            tshirtDesigner.addElement('image', e.target.result, 'my custom design', {colors: $('#colorizable').is(':checked') ? '#000000' : false, zChangeable: true, removable: true, draggable: true, resizable: true, rotatable: true, x: 200, y: 200, scale: scaling.toFixed(2)});
          };
      };
    }
    else {
      alert('FileReader API is not supported in your browser, please use Firefox, Safari, Chrome or IE10!');
    }
  };
});


jQuery(function(){
       $(".img-swap").hover(
            function(){this.src = this.src.replace("_front","_back");},
            function(){this.src = this.src.replace("_back","_front");
       });
  });
  $(document).ready(function() {
    $('.product-preview').productColorizer({'secondaryTransparency':1});
  });
  //<--Colorizer-->
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


  