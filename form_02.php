<form class="newformy" action="#" method="post">
    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="ngaction" data-nsform="sen_mail.php"></div>
            <input type="text" class="form-control" placeholder="Enter Full Name *" name="name">
        </div>
        <div class="col-md-12 mb-4">
            <input type="email" class="form-control" placeholder="Enter Email *" name="email">
        </div>
        <div class="col-md-12 mb-4">
            <input type="number" class="form-control" placeholder="Enter Phone No.*" name="phone">
        </div>
        <div class="col-md-6 mb-4">
            <input type="text" class="form-control" placeholder="Enter Your Locality *" name="locality">
        </div>
        <div class="col-md-6 mb-4">
            <select name="plans" class="form-control">
                <option selected disabled>Select Plan *</option>
                <option value="5BHK">5 BHK</option>
                <option value="4BHK">4 BHK</option>
                <option value="3BHK">3 BHK</option>
            </select>
        </div>
        <div class="col-md-12 text-center d-grid">
            <button type="submit" class="btn  px-4 py-2 mt-2 mb-3 btn_01">SEND MESSAGE</button>
            <div class="success1 text-success"></div>
            <div class="error1 text-danger"></div>
        </div>
    </div>
</form>