(function(){
  var $content = $('.seehow').detach();   // Remove modal from page
 
  $('#how').on('click', function() {           // Click handler to open modal
    modal.open({content: $content, width:340, height:300});
  });
}());