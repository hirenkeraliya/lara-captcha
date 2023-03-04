<div style="position: absolute; left: -5000px;" aria-hidden="true">
    <input type="text"
        name="custom_{{ config('lara_captcha.input_name') }}[{{ csrf_token() }}]"
        tabindex="-1"
    >
</div>