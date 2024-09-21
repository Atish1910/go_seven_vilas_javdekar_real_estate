 $(document).ready(function() {

    $('.newformy').on('submit', function () {

        var nform = $(this);
        let url = $(this).find(".ngaction").data("nsform");
        // let url = 'sen_mail.php';
        var btn = true;
        nform.find('input, textarea').each(function () {
            var n = $(this).val();
            if ($.trim(n) == "") {
                $(this).css("border", "1px solid red");
                btn = false;
            } else {
                $(this).css("border", "1px solid #ccc");
            }
        });
        if (btn == true) {
            var mbtn = nform.find('button');
            mbtn.html('Please Wait...');
            mbtn.attr('disabled', true);
            mbtn.css("cursor", "not-allowed");
            $.ajax({
                type: 'POST',
                url: url,
                data: nform.find(":input").serializeArray(),
                success: function (data) {
                    if (data == "y") {
                        nform.find('.success1').html('Message send successfully');
                        setTimeout(function () {
                            mbtn.attr('disabled', false);
                            mbtn.css("cursor", "pointer");
                            location.reload();
                        }, 2000)
                    } else {
                        nform.find('.error1').html(data);
                        setTimeout(function () {
                            nform.find(".error1").html("")
                            mbtn.html('Download Brochure');
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