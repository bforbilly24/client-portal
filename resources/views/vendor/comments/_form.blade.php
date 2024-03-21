<div class="card border-0 fixed-bottom">
    <div class="card-body p-0 bg-transparent">
        @if ($errors->has('commentable_type'))
            <div class="alert alert-danger" role="alert">
                {{ $errors->first('commentable_type') }}
            </div>
        @endif
        @if ($errors->has('commentable_id'))
            <div class="alert alert-danger" role="alert">
                {{ $errors->first('commentable_id') }}
            </div>
        @endif
        <form method="POST" action="{{ route('comments.store') }}">
            @csrf
            @honeypot
            <input type="hidden" name="commentable_type" value="\{{ get_class($model) }}" />
            <input type="hidden" name="commentable_id" value="{{ $model->getKey() }}" />

            {{-- Guest commenting --}}
            @if (isset($guest_commenting) and $guest_commenting == true)
                <div class="form-group">
                    {{-- <label for="message">@lang('comments::comments.enter_your_name_here')</label> --}}
                    <input type="hidden" class="form-control @if ($errors->has('guest_name')) is-invalid @endif"
                        name="guest_name" value="{{ $client->name }}" />
                    @error('guest_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    {{-- <label for="message">@lang('comments::comments.enter_your_email_here')</label> --}}
                    <input type="hidden" class="form-control @if ($errors->has('guest_email')) is-invalid @endif"
                        name="guest_email" value="guest@gmail.com" />
                    @error('guest_email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            @endif

            {{-- <div class="form-group">
                <label for="message">@lang('comments::comments.enter_your_message_here')</label>
                <textarea class="form-control @if ($errors->has('message')) is-invalid @endif" name="message" rows="3"
                    style="border-radius: 10px;" placeholder="Enter your message"></textarea>
                <div class="invalid-feedback">
                    @lang('comments::comments.your_message_is_required')
                </div>
                <small class="form-text text-muted">@lang('comments::comments.markdown_cheatsheet', ['url' => 'https://help.github.com/articles/basic-writing-and-formatting-syntax'])</small>
            </div>
            <button type="submit" class="btn btn-sm btn-outline-success text-uppercase">@lang('comments::comments.submit')</button>
            <button type="submit" class="btn btn-sm btn-primary" style="border-radius: 10px;">Send</button> --}}


            {{-- <div class="bg-comment p-0 m-0">

                <div class="coloumn-send ">
                    <div class="container ">
                        <div class="bg-form-comment d-flex justify-content-between align-items-center form-group ">

                            <textarea class=" @if ($errors->has('message')) is-invalid @endif" name="message" placeholder="Enter your message"></textarea>
                            <div class="invalid-feedback">
                                @lang('comments::comments.your_message_is_required')
                            </div>

                            <button type="submit" class="btn btn-send rounded-pill">
                                <svg class="svg-send" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.16649 7.99998L1.11159 14.0613C1.08114 14.1419 1.07486 14.2294 1.09351 14.3134C1.11215 14.3974 1.15493 14.4743 1.21676 14.5351C1.2786 14.5959 1.35688 14.638 1.44231 14.6563C1.52775 14.6747 1.61674 14.6685 1.69871 14.6385L12.7497 8.83331L12.9213 8.74318L13.0928 8.65305L13.2644 8.56291C13.2644 8.56291 13.583 8.41665 13.583 7.99998C13.583 7.58331 13.2644 7.43705 13.2644 7.43705L13.0928 7.34691L12.9213 7.25678L12.7497 7.16665L1.69871 1.36142C1.61674 1.33148 1.52775 1.32531 1.44231 1.34364C1.35688 1.36197 1.2786 1.40403 1.21676 1.46482C1.15493 1.52562 1.11215 1.60259 1.09351 1.68659C1.07486 1.77059 1.08114 1.85809 1.11159 1.93869L3.16649 7.99998ZM3.16649 7.99998H7.33301"
                                        stroke="#FAFAFA" stroke-width="2.1" stroke-linecap="round"
                                        stroke-linejoin="round" />

                                </svg>
                            </button>

                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="coloumn-send position-fixed w-100">
                <div class="container pb-4">
                    <div class="bg-form-comment d-flex justify-content-between align-items-center form-group mb-0 pb-0">

                        <textarea class=" @if ($errors->has('message')) is-invalid @endif" name="message" placeholder="Enter your message"></textarea>
                        <div class="invalid-feedback">
                            @lang('comments::comments.your_message_is_required')
                        </div>

                        <button type="submit" class="btn btn-send rounded-pill">
                            <svg class="svg-send" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.16649 7.99998L1.11159 14.0613C1.08114 14.1419 1.07486 14.2294 1.09351 14.3134C1.11215 14.3974 1.15493 14.4743 1.21676 14.5351C1.2786 14.5959 1.35688 14.638 1.44231 14.6563C1.52775 14.6747 1.61674 14.6685 1.69871 14.6385L12.7497 8.83331L12.9213 8.74318L13.0928 8.65305L13.2644 8.56291C13.2644 8.56291 13.583 8.41665 13.583 7.99998C13.583 7.58331 13.2644 7.43705 13.2644 7.43705L13.0928 7.34691L12.9213 7.25678L12.7497 7.16665L1.69871 1.36142C1.61674 1.33148 1.52775 1.32531 1.44231 1.34364C1.35688 1.36197 1.2786 1.40403 1.21676 1.46482C1.15493 1.52562 1.11215 1.60259 1.09351 1.68659C1.07486 1.77059 1.08114 1.85809 1.11159 1.93869L3.16649 7.99998ZM3.16649 7.99998H7.33301"
                                    stroke="#FAFAFA" stroke-width="2.1" stroke-linecap="round"
                                    stroke-linejoin="round" />

                            </svg>
                        </button>

                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
<br />
