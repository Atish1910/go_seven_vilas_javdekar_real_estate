$ (document).ready(function(){

    $('.vj_form').on('submit' , function() // perform a event on class vj_form on submit 
    {
        var vjform = $(this);  // we created a  attribute
        let url = $(this).find('.vjaction').data('vjform'); // data-vjform attribute mention in form  
        var btn = true; 

        vjform.find('input , textarea').each(function() { 
            var n = $(this).val();
            if ($.trim(n) == ''){
                $(this).css('border', '1px solid red');
                btn = false;
            }
            else {
                $(this).css('border', '1px solid #ccc');
            }
        });
        if (btn == true)
        {
            var mbtn = vjform.find('button'); 
            mbtn.html('please wait...');
            mbtn.attr('disabled', true);
            mbtn.css('cursor', 'not allowed');
            $.ajax({
                type: 'POST',
                url: url,
                data: vjform.find(':input').serializeArray(),
                success : function (data){
                    if (data == 'y')
                    {
                        vjform.find('.success1').html('message Send Successfully');
                        setTimeout(function (){
                            mbtn.attr('disabled', false);
                            mbtn.css('cursor', 'pointer');
                            location.href('thankyou.php');
                        }, 2000)
                    }
                    else 
                    {
                        vjform.find('.error1').html(data);
                        setTimeout(function(){
                            vjform.find('.error1').html('');
                            mbtn.html('Enquire Now');
                        } ,4000)
                        mbtn.attr('desabled', false);
                        mbtn.css('cursor', 'pointer');
                    }
                }
            });
        }
        alert(btn);
        return false;
    })
})