<div id="contact-modal">
    <div class="btn btn-theme">
        <i class="fa-regular fa-message"></i>
        <span>Need help?</span>
    </div>

    <div class="modal" style="display: none;">
        <h4 class="title">
            Please leave us some message
            <div class="close" style="cursor: pointer;">
                <i class="fa-solid fa-xmark"></i>
            </div>
        </h4>

        <form method="post" action="/?api=contact-form">

            <div class="col-auto">
                <label class="sr-only" for="input-name">Your Name</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa-solid fa-user"></i>
                        </div>
                    </div>

                    <input type="text" name="name" class="form-control" id="input-name" placeholder="Your Name"
                        required="">
                </div>
            </div>


            <div class="col-auto">
                <label class="sr-only" for="input-email">Your Email</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                    </div>

                    <input type="email" name="email" class="form-control" id="input-email" placeholder="Your Email"
                        required="">
                </div>
            </div>


            <div class="col-auto">
                <label class="sr-only" for="input-content">Content</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa-regular fa-message"></i>
                        </div>
                    </div>

                    <textarea class="form-control" id="input-content" name="content" placeholder="Content" required=""></textarea>
                </div>
            </div>


            <p class="ta-c">
                <button type="submit" class="btn btn-theme">Send</button>
            </p>
        </form>
    </div>

    <script>
        jQuery('#contact-modal .btn').click(function() {
            jQuery('#contact-modal .modal').stop().fadeIn(300);
        });

        jQuery('#contact-modal .close').click(function() {
            jQuery('#contact-modal .modal').stop().fadeOut(300);
        });
    </script>
</div>
