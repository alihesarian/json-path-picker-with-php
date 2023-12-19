function JPPickerInit() {
  const $pathTarget = document.querySelectorAll('.path');
  const $source = document.querySelector('#json-renderer');

  const defaultOpts = {
    pathNotation: 'dots',
    pathQuotesType: 'single',
    pickerIcon: '#x7f7'
  };

  function transformJson() {
    let jsonData = null;
    try {
      jsonData = document.querySelector('.json-input').value;
      jsonData = JSON.parse(jsonData);
    } catch (error) {
      alert(`Cannot eval JSON: ${error}`);
      return;
    }

    JPPicker.render($source, jsonData, $pathTarget, defaultOpts);
  }
  transformJson();
}
JPPickerInit();


// Attach a submit handler to the form
$( "#fetch-patch" ).on( "submit", function( e ) {

  // Stop form from submitting normally
  e.preventDefault();

  // Get some values from elements on the page:
  let $form = $( this ),
    patch = $form.find( "input.path" ).val(),
    url = $form.attr( "action" );

  // Send the data using post
  let posting = $.post( url, {
    patch: patch
  });

  $(".response").html('');
  // Put the results in a div
  posting.done(function( data ) {
    if(data.status){
      let alert = `<div class="alert alert-success">${data.message}</div>`;
      $(".response").html(alert);
    }else{
      let alert = `<div class="alert alert-error">${data.message}</div>`;
      $(".response").html(alert);
    }
  });

});
