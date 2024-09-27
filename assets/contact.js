 $(document).ready(function() {


    /////////////////////////////////
    window.onscroll = function() {
        toggleNavbarClass();
    };
    
    function toggleNavbarClass() {
        var navbar = document.querySelector('.navbar');
    
        if (document.documentElement.scrollTop > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    }

    
    $(document).ready(function () {
        $('.h_gallrey').owlCarousel({
            margin: 10,
            nav: true,
            autoplay: true,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        })
        $('.h_owl_alumni').owlCarousel({
            margin: 10,
            nav: true,
            autoplay: true,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3.1
                }
            }
        })
    })


    
    $('.vj_form').on('submit', function () {
        var vjform = $(this);
        let url = $(this).find(".vjaction").data("vjform");
        var btn = true;
        vjform.find('input, textarea').each(function () {
            var n = $(this).val();
            if ($.trim(n) == "") {
                $(this).css("border", "1px solid red");
                btn = false;
            } else {
                $(this).css("border", "1px solid #ccc");
            }
        });
        if (btn == true) {
            var mbtn = vjform.find('button');
            mbtn.html('Please Wait...');
            mbtn.attr('disabled', true);
            mbtn.css("cursor", "not-allowed");
            $.ajax({
                type: 'POST',
                url: url,
                data: vjform.find(":input").serializeArray(),
                success: function (data) {
                    if (data == "y") {
                        vjform.find('.success1').html('Message send successfully');
                        setTimeout(function () {
                            mbtn.attr('disabled', false);
                            mbtn.css("cursor", "pointer");
                            window.location.href = 'thankyou';
                            // location.reload();
                        }, 2000)
                    } else {
                        vjform.find('.error1').html(data);
                        setTimeout(function () {
                            vjform.find(".error1").html("")
                            mbtn.html('Submit Now');
                        }, 4000)
                        mbtn.attr('disabled', false);
                        mbtn.css("cursor", "pointer");
                    }
                }
            });
        }
        console.log(btn);
        return false;
    })
    var zoom = 1;
    $('.modaly .modaly-content img').click(function() {
        zoom += 0.1;
        $(this).css('transform','scale(' + zoom + ')')
    })
})