(function($, Drupal, drupalSettings){
  //external link:
  Drupal.behaviors.tabs={
    attach:function(context, settings){
      $( "#tabs", context).tabs();
    }
  }
})(jQuery, Drupal, drupalSettings);
