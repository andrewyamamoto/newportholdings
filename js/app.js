$(document).ready(function(){

    $('body').scrollspy({ target: '#navbar', offset:111, });

    $(".navbar ul li a[href^='#'], #intro a, footer a, #about a").on('click', function(e) {

        e.preventDefault();
        var hash = this.hash;

        $('html, body').animate({
            scrollTop: $(hash).offset().top - 111
        }, 300, function(){
            window.location.hash = hash;
        });

    });

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
        $.ajax({
            type: "POST",
            url: "process.php", //process to mail
            data: $('form.acc').serialize(),
            success: function(msg){
                console.log('success');
                $("#accredited").modal('hide');
            },
            error: function(){
                alert("failure");
            }
        });
    });
    $("button#submit-con").click(function(e){
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "process.php", //process to mail
            data: $('form.con').serialize(),
            success: function(msg){
                console.log('success');
                $("#consultation").modal('hide');
            },
            error: function(){
                alert("failure");
            }
        });
    });
    $("button#submit-inv").click(function(e){
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "process.php", //process to mail
            data: $('form.inv').serialize(),
            success: function(msg){
                console.log('success');
                $("#investor").modal('hide');
            },
            error: function(){
                alert("failure");
            }
        });
    });
});
