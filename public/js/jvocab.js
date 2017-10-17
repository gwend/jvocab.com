

function onLoad() {
   loadPage();
   $(window).on("hashchange",function() {
      loadPage();
   });  
   $("a.menu").click(function() {
      if($(".navbar-collapse").hasClass('in'))
         $(".navbar-toggle").click();
         //$(".navbar-collapse").collapse("hide");
      if($(this).attr("href") == window.location.hash) {
         $(window).scrollTop(0);
         return(false);
      }
      return(true);
   });
}

function loadPage() {
   var hash = window.location.hash;
   if(hash == undefined || hash == "" || !$(hash).length)
      hash = "#home";
   $("div.menu").hide();
   $("div.get").hide();
   $(window).scrollTop(0);
   $(hash).fadeIn();
   $("div.get").fadeIn();
   $("li.menu").removeClass('active');
   $("a.menu").filter(function(){
      return($(this).attr("href") == hash);
   }).parent("li").addClass("active");      
}

