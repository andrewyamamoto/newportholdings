$(document).ready(function(){

    $('body').scrollspy({ target: '#navbar', offset:111});


   //  $(".scrollto").on('click', function(e) {
   //
   //      e.preventDefault();
   //
   //      var hash = this.hash;
   //
   //      $('html, body').animate({
   //          scrollTop: $(hash).offset().top - 111
   //      }, 300, function(){
   //          window.location.hash = hash;
   //      });
   //
   // });

    function registerForm(formClass, toHide){
        var tester = $(formClass).serialize();
        $.ajax({
            type: "POST",
            url: "/process.php", //process to mail
            data: $(formClass).serialize(),
            success: function(msg){
                $(toHide).modal('hide');
            },
            error: function(){
                alert("failure");
            }
        });
    }

    $(".navbar-nav li a").click(function(event) {
        $(".navbar-collapse").collapse('hide');
    });

    function reposition() {
        var modal = $(this),
            dialog = modal.find('.modal-dialog');

        modal.css('display', 'block');
        dialog.css("margin-top", Math.max(0, ($(window).height() - dialog.height()) / 2));
    }


    $('.modal').on('show.bs.modal', reposition);

    $(window).on('resize', function() {
        $('.modal:visible').each(reposition);
    });

    $("button#submit-acc").click(function(e){
        e.preventDefault();
        registerForm('form.acc','#accredited');
    });
    $("button#submit-con").click(function(e){
        e.preventDefault();
        registerForm('form.con','#consultation');
    });
    $("button#submit-inv").click(function(e){
        e.preventDefault();
        registerForm('form.inv','#investor');
    });
    $("button#submit-imm").click(function(e){
        e.preventDefault();
        registerForm("form.imm","#immigration-zh");
    });

    function getQueryVariable(variable){

       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return pair[1];}
       }
       return(false);
    }

    var language = getQueryVariable("lang");
    if(language){
        $('html').attr('lang', 'zh');
    }else{
        $('html').attr('lang', 'en');
    }
});
