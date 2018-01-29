(function($, Drupal, drupalSettings){
  //external link:
  Drupal.behaviors.externalLink={
    attach:function(context, settings){
      $("a[href^='http']", context).attr('target', '_blank').addClass('external');
    }
  }
  //blockCollapsable={
  Drupal.behaviors.blockCollapsable= {
    attach:function(context, settings){
       $(".sidebar.block.h2, context").click(function(){
           $(this).siblings('.content').slideToggle('fast');
       });
    }
  }
/*(function($, Drupal, drupalSettings) {
   $(document).ready(function() {
      // alert('hello kaouther!');
       $("a[href^='http']").attr('target', '_blank');
       //block collapsable:
        $(".sidebar.block.h2").clik(function(){
          $(this).siblings('.content').slideToggle('fast');
        })
      });*/
})(jQuery, Drupal, drupalSettings);
