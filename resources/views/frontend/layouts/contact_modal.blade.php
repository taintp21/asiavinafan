<div id="contact-modal" @if (Request::url() === url('/contact-us') || Request::url() === ('/contact-us*')) style="display: none;" @endif>
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
        <form method="post" action="{{route('send-contact')}}">
            @csrf
            <div class="col-auto">
                <label class="sr-only" for="input-name">Your Name</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text @error('nameContact')border-danger @enderror">
                            <i class="fa-solid fa-user"></i>
                        </div>
                    </div>
                    <input type="text" name="nameContact" class="form-control @error('nameContact')border-danger @enderror" id="input-name" placeholder="Your Name" value="{{old('nameContact')}}">
                </div>
                @error('nameContact') <p class="text-danger">{{$message}}</p> @enderror
            </div>
            <div class="col-auto">
                <label class="sr-only" for="input-email">Your Email</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text @error('emailContact')border-danger @enderror">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                    </div>
                    <input type="text" name="emailContact" class="form-control @error('emailContact')border-danger @enderror" id="input-email" placeholder="Your Email" value="{{old('emailContact')}}">
                </div>
                @error('emailContact') <p class="text-danger">{{$message}}</p> @enderror
            </div>
            <div class="col-auto">
                <label class="sr-only" for="input-content">Content</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text @error('contentContact')border-danger @enderror">
                            <i class="fa-regular fa-message"></i>
                        </div>
                    </div>
                    <textarea class="form-control @error('contentContact')border-danger @enderror" id="input-content" name="contentContact" placeholder="Content">{{old('contentContact')}}</textarea>
                </div>
                @error('contentContact') <p class="text-danger">{{$message}}</p> @enderror
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
@if(session('success'))
    <script>
        $(document).ready(function(){
            Swal.fire({
                icon: 'success',
                title: 'Your data has been send',
            });
        })
    </script>
@endif
@if($errors->first("nameContact") || $errors->first("emailContact") || $errors->first("contentContact"))
    <script>
        $(document).ready(function(){
            jQuery('.modal').show();
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
            });
        })
    </script>
@endif
