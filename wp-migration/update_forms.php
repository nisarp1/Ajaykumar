<?php
require_once('./wp-load.php');

$form_configs = [
    'Enquiry Form' => '
<div class="row">
    <div class="col-md-4 mb-4">
        <label class="form-label fw-600 text-dark-gray">Full Name</label>
        [text* contact-name class:form-control class:form-control-lg placeholder "Enter your name"]
    </div>
    <div class="col-md-4 mb-4">
        <label class="form-label fw-600 text-dark-gray">Email Address</label>
        [email* contact-email class:form-control class:form-control-lg placeholder "example@domain.com"]
    </div>
    <div class="col-md-4 mb-4">
        <label class="form-label fw-600 text-dark-gray">Enquiry Type</label>
        [select* contact-type class:form-control class:form-control-lg "Select Option" "General Enquiry" "Feedback / Suggestions" "Regional Issue Report" "Appointment Request"]
    </div>
    <div class="col-md-12 mb-4">
        <label class="form-label fw-600 text-dark-gray">Your Message</label>
        [textarea contact-message class:form-control class:form-control-lg x4 placeholder "How can we help you? Describe in detail..."]
    </div>
    <div class="col-md-12">
        [submit class:btn class:btn-large class:bg-royal-blue class:text-white class:btn-rounded class:w-100 class:py-3 "Send Message"]
    </div>
</div>',
    'Volunteer Form' => '
<div class="row g-4">
    <div class="col-md-6">
        <label class="form-label fw-800 text-royal-blue fs-12 text-uppercase mb-1">Full Name</label>
        [text* volunteer-name class:form-control class:border-radius-8px class:p-3 placeholder "Enter your full name"]
    </div>
    <div class="col-md-6">
        <label class="form-label fw-800 text-royal-blue fs-12 text-uppercase mb-1">Phone Number</label>
        [tel* volunteer-phone class:form-control class:border-radius-8px class:p-3 placeholder "Enter mobile number"]
    </div>
    <div class="col-md-12">
        <label class="form-label fw-800 text-royal-blue fs-12 text-uppercase mb-1">Preferred Role</label>
        [select* volunteer-role class:form-control class:border-radius-8px class:p-3 "Select a role..." "Digital Warrior" "Field Agent" "Researcher" "Community Lead"]
    </div>
    <div class="col-12">
        <label class="form-label fw-800 text-royal-blue fs-12 text-uppercase mb-1">Area / Village Name</label>
        [text* volunteer-area class:form-control class:border-radius-8px class:p-3 placeholder "Which area would you like to cover?"]
    </div>
    <div class="col-12">
        <label class="form-label fw-800 text-royal-blue fs-12 text-uppercase mb-1">Why do you want to join?</label>
        [textarea volunteer-message class:form-control class:border-radius-8px class:p-3 x3 placeholder "Tell us a bit about your motivation"]
    </div>
    <div class="col-12 pt-2">
        [submit class:btn class:btn-extra-large class:bg-royal-blue class:text-white class:w-100 class:btn-rounded class:shadow-sm "Submit Registration"]
    </div>
</div>',
    'Voice of the People' => '
<div class="row">
    <div class="col-md-6 mb-4">
        <label class="form-label fw-600">Your Full Name</label>
        [text* voice-name class:form-control class:border-radius-8px class:p-3 placeholder "Enter your name"]
    </div>
    <div class="col-md-6 mb-4">
        <label class="form-label fw-600">Mobile Number</label>
        [tel* voice-phone class:form-control class:border-radius-8px class:p-3 placeholder "+91 XXXXX XXXXX"]
    </div>
    <div class="col-md-12 mb-4">
        <label class="form-label fw-600">Concern Category</label>
        [select* voice-category class:form-control class:border-radius-8px class:p-3 "Select Category..." "Infrastructure & Roads" "Agriculture & Irrigation" "Employment & Training" "Healthcare & Sanitation"]
    </div>
    <div class="col-md-12 mb-4">
        <label class="form-label fw-600">Describe Your Issue or Suggestion</label>
        [textarea voice-issue class:form-control class:border-radius-8px class:p-3 x5 placeholder "How can we help? Describe your locality and the issue in detail..."]
    </div>
    <div class="col-md-12">
        [submit class:btn class:btn-large class:bg-royal-blue class:text-white class:btn-rounded class:w-100 class:py-3 "Submit Your Voice"]
    </div>
</div>',
    'Join the Movement' => '
<div class="row">
    <div class="col-md-6 mb-4">
        [text* join-name class:form-control class:input-premium placeholder "Full Name *"]
    </div>
    <div class="col-md-6 mb-4">
        [email* join-email class:form-control class:input-premium placeholder "Email Address *"]
    </div>
    <div class="col-md-12 mb-4">
        [tel* join-phone class:form-control class:input-premium placeholder "Phone Number *"]
    </div>
    <div class="col-md-12 mb-5">
        [select* join-interest class:form-control class:input-premium "Interested in... *" "Volunteer Work" "General Membership" "Digital Campaigning" "Event Coordination"]
    </div>
    <div class="col-md-12">
        [submit class:btn class:btn-extra-large class:bg-royal-blue class:text-white class:btn-rounded class:w-100 class:shadow-lg "Submit Application"]
    </div>
</div>',
    'Subscription Form' => '
<div class="d-flex w-100 flex-nowrap" style="max-width: 500px;">
    [email* sub-email class:form-control class:bg-white class:border-radius-0px class:p-15px placeholder "Your email address"]
    [submit class:btn class:bg-royal-blue class:text-white class:border-radius-0px class:px-30px "Subscribe"]
</div>'
];

foreach ($form_configs as $title => $markup) {
    $form = get_page_by_title($title, OBJECT, 'wpcf7_contact_form');
    if ($form) {
        // Update the form markup
        update_post_meta($form->ID, '_form', $markup);
        echo "Successfully updated markup for: <strong>$title</strong><br>";
    } else {
        echo "Form not found: <strong>$title</strong>. Please ensure the title matches exactly.<br>";
    }
}
echo "<br><strong>All forms processed! You can now refresh your site pages.</strong>";
