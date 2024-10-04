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
        debugger
        var vjform = $(this);
        let url = $(this).find(".vjaction").data("vjform");
        var btn = true;
    
        // Form validation
        vjform.find('.form-control').each(function () {
            var n = $(this).val();
            if ($.trim(n) === "") {
                $(this).css("border", "1px solid red");
                btn = false;
            } else {
                $(this).css("border", "1px solid #ccc");
            }
        });
    
        if (btn === true) {
            var mbtn = vjform.find('button');
            mbtn.html('Please Wait...');
            mbtn.attr('disabled', true);
            mbtn.css("cursor", "not-allowed");
    
            // Serialize form data and add UTM parameters
            var formData = vjform.find(":input").serializeArray();
            formData.push({ name: "utm_source", value: getParameterByName("utm_source") });
            formData.push({ name: "utm_medium", value: getParameterByName("utm_medium") });
            formData.push({ name: "utm_campaign", value: getParameterByName("utm_campaign") });
            formData.push({ name: "utm_term", value: getParameterByName("utm_term") });
            formData.push({ name: "utm_content", value: getParameterByName("utm_content") });
    
            // AJAX form submission
            $.ajax({
                type: 'POST',
                url: url,
                data: formData,
                success: function (data) {
                    if (data == "y") {
                        vjform.find('.success1').html('Message sent successfully');
                        setTimeout(function () {
                            mbtn.attr('disabled', false);
                            mbtn.css("cursor", "pointer");
                            window.location.href = 'https://gharpravesh.com/pune-west/thankyou';
                        }, 2000);
                    } else {
                        vjform.find('.error1').html(data);
                        setTimeout(function () {
                            vjform.find(".error1").html("");
                            mbtn.html('Submit Now');
                        }, 4000);
                        mbtn.attr('disabled', false);
                        mbtn.css("cursor", "pointer");
                    }
                }
            });
        }
        console.log(btn);
        return false;
    });
    
    // Function to get URL parameters (assuming you already have it somewhere in your code)
    function getParameterByName(name) {
        name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
            results = regex.exec(location.search);
        return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    }
    


    var zoom = 1;
    $('.modaly .modaly-content img').click(function() {
        zoom += 0.1;
        $(this).css('transform','scale(' + zoom + ')')
    })
})