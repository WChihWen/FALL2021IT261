(function($){
  $(document).ready(function(){  
     $("#cssmenu").menumaker({
        title: "Menu",
        breakpoint: 1290,
        format: "multitoggle",
        import: "nav.html"
      });       
  });
})(jQuery);
