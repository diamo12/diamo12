@extends('layouts.rivet')

@section('content')
<form action="{{ route('guestbook.store') }}" method="POST" id="submitform">
    <input type="hidden" name="_token" value={{csrf_token()}}>
    <fieldset class="rvt-fieldset">
        <legend class="rvt-sr-only">Guestbook Entry info</legend>
        <div class="rvt-container rvt-m-bottom-xs rvt-m-left-sm">
            <div class="rvt-row">
                <div class="rvt-cols-10-md rvt-m-bottom-xs">
                    <label for="name" class="rvt-label rvt-text-bold">Name <div class="rvt-ts-12 rvt-display-inline-block">required</div></label>
                    <input id="name" name="name" type="text" value="{{old('name')}}"
                    <?php if($errors->has('name')) {
                        echo 'class="rvt-text-input rvt-validation-danger" aria-describedby="name-error-message"';
                    } else {
                        echo 'class="rvt-text-input"';
                    }
                        ?>
                    >
                    <?php if($errors->has('name')) { display_validation_error_inline('name', $errors->get('name')); } ?>
                </div>
                <div class="rvt-cols-10-md rvt-m-bottom-xs">
                    <label for="website_url" class="rvt-label rvt-text-bold">Website URL <div class="rvt-ts-12 rvt-display-inline-block">required</div></label>
                    <input id="website_url" name="website_url" type="text" value="{{old('website_url')}}"
                    <?php if($errors->has('website_url')) {
                        echo 'class="rvt-text-input rvt-validation-danger" aria-describedby="website_url-error-message"';
                    } else {
                        echo 'class="rvt-text-input"';
                    }
                        ?>
                    >
                    <?php if($errors->has('website_url')) { display_validation_error_inline('website_url', $errors->get('website_url')); } ?>
                </div>
                <div class="rvt-cols-10-md rvt-m-bottom-xs">
                    <label for="message" class="rvt-label rvt-text-bold">Message <div class="rvt-ts-12 rvt-display-inline-block">required</div></label>
                    <textarea class="rvt-textarea" id="message" name="message" type="text" value="{{old('message')}}"
                    <?php if($errors->has('message')) {
                        echo 'class="rvt-text-input rvt-validation-danger" aria-describedby="message-error-message"';
                    } else {
                        echo 'class="rvt-text-input"';
                    }
                        ?>
                    ></textarea>
                    <?php if($errors->has('message')) { display_validation_error_inline('message', $errors->get('message')); } ?>
                </div>
            </div>
        </div>

        <div class="rvt-cols-10-md rvt-m-top-sm rvt-button-group">
            <button type="submit" class="rvt-button">Create Guestbook Entry</button>
        </div>
    </fieldset>
</form>
@endsection