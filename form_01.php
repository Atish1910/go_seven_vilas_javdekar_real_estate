<form class="vj_form" action="#" method="post">
    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="vjaction" data-vjform="sen_mail.php"></div>
            <input type="text" class="form-control" placeholder="Enter Full Name *" name="fname">
        </div>
        <div class="col-md-12 mb-4">
            <input type="email" class="form-control" placeholder="Enter Email *" name="email">
        </div>
        <div class="col-md-12 mb-4">
            <input type="number" class="form-control" placeholder="Enter Phone No.*" name="phone">
        </div>
        <div class="col-md-12 mb-4">
            <textarea class="form-control" placeholder="Leave a comment here" name="msg"
                style="height: 100px"></textarea>
        </div>
        
        <!-- Hidden fields to store UTM parameters -->
        <input type="hidden" name="utm_source" value="">
        <input type="hidden" name="utm_medium" value="">
        <input type="hidden" name="utm_campaign" value="">
        <input type="hidden" name="utm_term" value="">
        <input type="hidden" name="utm_content" value="">

        <div class="col-md-12 text-center d-grid">
            <button type="submit" class="btn  px-4 py-2 mt-2 mb-3 btn_01">Submit Now</button>
            <div class="success1 text-success"></div>
            <div class="error1 text-danger"></div>
        </div>
    </div>
</form>