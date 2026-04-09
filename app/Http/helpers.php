<?php
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

if (! function_exists('display_validation_error_inline')) {
    function display_validation_error_inline($field, $errors){
        $message = '<ul class="rvt-list-plain rvt-m-top-xxs">';
        foreach($errors as $err){
            $message .= '<li>' . $err . '</li>';
        }
        $message .= "</ul>";

        $alert = <<<EOF
        <div class="rvt-inline-alert rvt-inline-alert--danger">
            <span class="rvt-inline-alert__icon">
                <svg aria-hidden="true" width="16" height="16" viewBox="0 0 16 16">
                    <g fill="currentColor">
                        <path d="M8,0a8,8,0,1,0,8,8A8,8,0,0,0,8,0ZM8,14a6,6,0,1,1,6-6A6,6,0,0,1,8,14Z"></path>
                        <path d="M10.83,5.17a1,1,0,0,0-1.41,0L8,6.59,6.59,5.17A1,1,0,0,0,5.17,6.59L6.59,8,5.17,9.41a1,1,0,1,0,1.41,1.41L8,9.41l1.41,1.41a1,1,0,0,0,1.41-1.41L9.41,8l1.41-1.41A1,1,0,0,0,10.83,5.17Z"></path>
                    </g>
                </svg>
            </span>
            <span class="rvt-inline-alert__message" id="$field-error-message">
                $message
            </span>
        </div>
EOF;
        echo $alert;
    }
}