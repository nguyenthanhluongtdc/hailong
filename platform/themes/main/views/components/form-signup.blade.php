<div class="container-customize">
    <div class="form-sign-up-wrapper">
        <div class="row align-items-center">
          
                <div class="col-md-2 col-sm-12">
                    <div class="newsletter_title text_white">
                        <h3> {!! __('Title newsletter') !!} </h3> 
                    </div>
                </div> 
                <div class="col-md-3 col-sm-12 pl-0">
                    <div class="newsletter_text text_white">
                        <p> {!! __('Sign up to receive news, promotions and new products of Hailong Glass') !!} </p>
                    </div>
                </div> 
              
                <div class="col-md-4 col-sm-6">
                    <div class="newsletter_form">
                        <form method="POST" action="{{ route('public.newsletter.subscribe') }}">
                            @csrf
                            {{-- <input type="hidden" name="_token" value="">  --}}
                            <input name="email" type="email" placeholder="{!! __('Enter your email') !!}" class="form-control"> 
                            <button type="submit" class="btn-icon-submit">
                                {{-- <img src="{{Theme::asset()->url('images/news/Icon zocial-email.jpg')}}" alt="">
                                 --}}
                                 {{-- <i class="far fa-envelope"></i> --}}
                            </button>
                        </form> 
                        <div class="newsletter-message newsletter-success-message" style="display: none;">
                        </div> <div class="newsletter-message newsletter-error-message" style="display: none;">
                        </div>
                    </div>
                </div>
            
            
            <div class="col-md-3 col-sm-6">
                <div class="newsletter_img">
                    <img width="310" height="150" src="{{Theme::asset()->url('images/news/globalization-affects-workplace.jpg')}}" alt="">
                </div>
            </div> 
        </div>
    </div>
   
</div>