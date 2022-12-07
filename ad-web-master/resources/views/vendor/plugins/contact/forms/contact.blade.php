{!! Form::open(['route' => 'public.send.contact', 'method' => 'POST', 'class' => 'contact-form']) !!}
<div class="contact-form-row">
    {!! apply_filters('pre_contact_form', null) !!}

    <div class="container">
        <div class="our-friend">
            <div class="heading text-center">
                <h1 class="mt-4">
                    Contact Us
                </h1>

                <div class="row">
                    <div class="col-md-12">
                        <div class="row form-card">
                            <p class="banner-disc mb-20">
                                Please fill your contact details below
                            </p>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="contact_name" class="form-label visually-hidden required">{{ __('Name') }}</label>
                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="contact_name" placeholder="{{ __('Name') }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="contact_email" class="form-label visually-hidden required">{{ __('Email') }}</label>
                                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="contact_email" placeholder="{{ __('Email') }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="contact_subject" class="form-label visually-hidden">{{ __('Subject') }}</label>
                                        <input type="text" class="form-control" name="subject" value="{{ old('subject') }}" id="contact_subject" placeholder="{{ __('Subject') }}" />
                                    </div>
                                </div> 
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="contact_phone" class="form-label visually-hidden">{{ __('Phone') }}</label>
                                        <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" id="contact_phone" placeholder="{{ __('Phone') }}" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <textarea name="content" id="contact_content" class="form-control" rows="5" placeholder="{{ __('Message') }}">{{ old('content') }}</textarea>
                                    </div>
                                </div>
                            </div>

                            @if (is_plugin_active('captcha'))
                            @if (setting('enable_captcha'))
                                <div class="contact-form-row">
                                    <div class="contact-column-12">
                                        <div class="contact-form-group">
                                            {!! Captcha::display() !!}
                                        </div>
                                    </div>
                                </div>
                            @endif
                    
                            @if (setting('enable_math_captcha_for_contact_form', 0))
                                <div class="contact-form-group">
                                    <label for="math-group" class="contact-label required">{{ app('math-captcha')->label() }}</label>
                                    {!! app('math-captcha')->input(['class' => 'contact-form-input', 'id' => 'math-group']) !!}
                                </div>
                            @endif
                        @endif
                    
                        {!! apply_filters('after_contact_form', null) !!}
                    
                        <div class="contact-form-group"><p>{!! BaseHelper::clean(__('The field with (<span style="color:#FF0000;">*</span>) is required.')) !!}</p></div>
                    

                            

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary text-capitalize mb-0">{{ __('Send') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{!! apply_filters('after_contact_form', null) !!}

<div class="contact-form-group">
    <div class="contact-message contact-success-message" style="display: none;"></div>
    <div class="contact-message contact-error-message" style="display: none;"></div>
</div>

{!! Form::close() !!}
