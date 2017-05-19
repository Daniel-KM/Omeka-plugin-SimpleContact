<?php queue_js_url("https://www.google.com/recaptcha/api.js"); head_js(); ?>
<div id="simple-contact">
    <?php echo $this->form('contact_form', $options['form_attributes']); ?>
        <div class="field">
            <?php echo $this->formLabel('name', __('Your Name:') . ' '); ?>
            <div class="inputs">
                <?php echo $this->formText('name', $options['name'], array('class' => 'textinput')); ?>
            </div>
        </div>
        <div class="field">
            <?php echo $this->formLabel('email', __('Your Email:') . ' '); ?>
            <div class="inputs">
                <?php echo $this->formText('email', $options['email'], array('class' => 'textinput')); ?>
            </div>
        </div>
        <div class="field">
            <?php echo $this->formLabel('message', __('Your Message:') . ' '); ?>
            <div class="inputs">
                <?php echo $this->formTextarea('message', $options['message'], array('class' => 'textinput', 'rows' => '10')); ?>
            </div>
        </div>
        <div class="field">
            <?php if (Omeka_Captcha::getCaptcha()): ?>
            <div class="g-recaptcha" data-sitekey="6LcoeSEUAAAAAA5J5bJRK2Uoh8BqSvem1qHqunQK"></div>
            <?php endif; ?>
        </div>
        <?php echo $this->formHidden('path', $options['path']); ?>
        <div class="field">
            <?php echo $this->formSubmit('send', __('Send Message')); ?>
        </div>
    </form>
</div>
