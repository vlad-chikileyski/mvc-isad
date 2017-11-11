    <div class="col-md-8">
    <form action="ad-post-details.php?form=house" method="post">
        <fieldset>
            <div class="section postdetails">
                <h4>Sell an item or service <span class="pull-right">* Mandatory Fields</span></h4>
                <div class="form-group selected-product">
                    <ul class="select-category list-inline">
                        <li>
                            <a href="ad-post.php">
								<span class="select">
								<img src="images/icon/3.png" alt="Images" class="img-responsive"></span>
                                Property
                            </a>
                        </li>

                        <li class="active">
                            <a href="#">House</a>
                        </li>
                    </ul>
                    <a class="edit" href="#"><i class="fa fa-pencil"></i>Edit</a>
                </div>
                <div class="row form-group">
                    <label class="col-sm-3">Type of ad<span class="required">*</span></label>
                    <div class="col-sm-9 user-type">
                        <input type="radio" name="sellType" value="newsell" id="newsell"> <label
                                for="newsell">I want to sell </label>
                        <input type="radio" name="sellType" value="newbuy" id="newbuy"> <label
                                for="newbuy">want to buy</label>
                    </div>
                </div>
                <div class="row form-group add-title">
                    <label class="col-sm-3 label-title">Title for your Ad<span class="required">*</span></label>
                    <div class="col-sm-9">
                        <input type="text" name="title" class="form-control" id="text"
                               placeholder="ex, Home new ">
                    </div>
                </div>
                <div class="row form-group add-image">
                    <label class="col-sm-3 label-title">Photos for your ad <span>(This will be your cover photo )</span>
                    </label>
                    <div class="col-sm-9">
                        <h5><i class="fa fa-upload" aria-hidden="true"></i>Select Files to Upload / Drag
                            and Drop Files <span>You can add multiple images.</span></h5>
                        <div class="upload-section">
                            <label class="upload-image" for="upload-image-one">
                                <input type="file" id="upload-image-one">
                            </label>

                            <label class="upload-image" for="upload-image-two">
                                <input type="file" id="upload-image-two">
                            </label>
                            <label class="upload-image" for="upload-image-three">
                                <input type="file" id="upload-image-three">
                            </label>

                            <label class="upload-image" for="upload-imagefour">
                                <input type="file" id="upload-imagefour">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row form-group select-postcode">
                    <label class="col-sm-3 label-title">Postcode<span class="required">*</span></label>
                    <div class="col-sm-9">
                        <label>Code</label>
                        <input type="text" id="search_postcode" name="search_postcode" class="form-control">
                    </div>
                </div>
                <div id="result"></div>


                <div class="row form-group select-price">
                    <label class="col-sm-3 label-title">Price<span class="required">*</span></label>
                    <div class="col-sm-9">
                        <label>$USD</label>
                        <input type="text" class="form-control" id="text1">
                        <input type="radio" name="price" value="negotiable" id="negotiable">
                        <label for="negotiable">Negotiable </label>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-sm-3 label-title">Mobile Number<span
                                class="required">*</span></label>
                    <div class="col-sm-9">
                        <input type="text" name="mobileNumber" class="form-control"
                               placeholder="ex, +912457895">
                    </div>
                </div>
                <div class="row form-group item-description">
                    <label class="col-sm-3 label-title">Description<span
                                class="required">*</span></label>
                    <div class="col-sm-9">
                                        <textarea class="form-control" name="description" id="textarea"
                                                  placeholder="Write few lines about your products" rows="8"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-9 col-sm-offset-3">
                        <p>5000 characters left</p>
                    </div>
                </div>
            </div><!-- section -->

            <div class="section seller-info">
                <h4>Seller Information</h4>
                <div class="row form-group">
                    <label class="col-sm-3 label-title">Condition<span class="required">*</span></label>
                    <div class="col-sm-9">
                        <input type="radio" name="sellerType" value="individual" id="individual">
                        <label for="individual">Individual</label>
                        <input type="radio" name="sellerType" value="dealer" id="dealer">
                        <label for="dealer">Dealer</label>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-sm-3 label-title">Your Name<span class="required">*</span></label>
                    <div class="col-sm-9">
                        <input type="text" name="name" class="form-control" placeholder="ex, Jhon Doe">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-sm-3 label-title">Your Email ID<span
                                class="required">*</span></label>
                    <div class="col-sm-9">
                        <input type="email" name="email" class="form-control"
                               placeholder="ex, jhondoe@mail.com">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-sm-3 label-title">Mobile Number<span
                                class="required">*</span></label>
                    <div class="col-sm-9">
                        <input type="text" name="mobileNumber" class="form-control"
                               placeholder="ex, +912457895">
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-sm-3 label-title">Address</label>
                    <div class="col-sm-9">
                        <input type="text" name="address" class="form-control"
                               placeholder="ex, alekdera House, coprotec, usa">
                    </div>
                </div>
            </div><!-- section -->

            <div class="section">
                <h4>Make your Ad Premium </h4>
                <p>More replies means more interested buyers. With lots of interested buyers, you have a
                    better chance of selling for the price that you want. <a href="#">Learn more</a></p>
                <ul class="premium-options">
                    <li class="premium">
                        <input type="radio" name="premiumOption" value="day-one" id="day-one">
                        <label for="day-one">Regular Ad Per Day</label>
                        <span>$20.00</span>
                    </li>
                    <li class="premium">
                        <input type="radio" name="premiumOption" value="day-two" id="day-two">
                        <label for="day-two">Top Ad for 3 days</label>
                        <span>$30.00</span>
                    </li>
                    <li class="premium">
                        <input type="radio" name="premiumOption" value="day-three" id="day-three">
                        <label for="day-three">Top Ad for 7 days</label>
                        <span>$50.00</span>
                    </li>
                    <li class="premium">
                        <input type="radio" name="premiumOption" value="day-four" id="day-four">
                        <label for="day-four">Daily Bump Up for 7 days</label>
                        <span>$100.00</span>
                    </li>
                </ul>
            </div><!-- section -->

            <div class="checkbox section agreement">
                <label for="send">
                    <input type="checkbox" name="send" id="send">
                    Send me Trade Email/SMS Alerts for people looking to buy mobile handsets in www By
                    clicking "Post", you agree to our <a href="#">Terms of Use</a> and <a href="#">Privacy
                        Policy</a> and acknowledge that you are the rightful owner of this item and
                    using Trade to find a genuine buyer.
                </label>
                <input name="post-ad-btn-primary" class="btn btn-primary  btn-block"
                       value="Post Your Ad"
                       type="submit">
            </div><!-- section -->

        </fieldset>
    </form><!-- form -->
</div>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {

        load_data();

        function load_data(query) {
            $.ajax({
                url: "request-controller/validate.php",
                method: "POST",
                data: {query: query},
                success: function (data) {
                    $('#result').html(data);
                }
            });
        }

        $('#search_postcode').keyup(function () {
            var search = $(this).val();
            if (search != '') {
                load_data(search);
            }
            else {
                load_data();
            }
        });
    });
</script>
