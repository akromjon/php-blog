@extends('layouts.base')
@section('meta')
    {!! seo($seoData) !!}
@endsection
@section('main')
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog_single_info">
                        <div class="blog_single_item">

                            <h1>Privacy Policy</h1>
                            <p>Last Updated: Oct 11, 2023</p>

                            <p>Thank you for visiting {{config("app.name")}}, an online blogging platform dedicated to PHP, Laravel, and
                                programming. At <a href="{{config('app.url')}}">{{config('app.url')}}</a>, we are committed to protecting your
                                privacy and ensuring the security of your personal information. This Privacy Policy explains
                                how we collect, use, and protect your data. By using our website, you consent to the
                                practices described in this policy.</p>

                            <h2>Information We Collect</h2>

                            <h3>1. Personal Information</h3>
                            <p>
                                <strong>Name</strong>: We may collect your name if you choose to provide it voluntarily when
                                contacting us or leaving comments on our blog posts.<br>
                                <strong>Email Address</strong>: If you contact us via email or subscribe to our newsletter,
                                we may collect your email address.
                            </p>


                            <h3>2. Non-Personal Information</h3>
                            <p>
                                <strong>Log Data</strong>: Like many websites, we automatically collect certain information,
                                including your IP address, browser type, operating system, and access times.<br>
                                <strong>Cookies</strong>: We use cookies to improve your experience on our website. These
                                are small text files that are stored on your computer or device. You can control the use of
                                cookies through your browser settings.
                            </p>


                            <h2>How We Use Your Information</h2>
                            <p>We use your information for the following purposes:</p>
                            <ul>
                                <li>To respond to your inquiries and provide customer support.</li>
                                <li>To send you updates, newsletters, and other information if you have subscribed to our
                                    mailing list.</li>
                                <li>To analyze and improve the functionality and content of our website.</li>
                                <li>To protect our website and its users from misuse, fraud, or unauthorized access.</li>
                                <li>To comply with legal obligations.</li>
                            </ul>

                            <h2>Data Sharing</h2>
                            <p>We do not sell, trade, or rent your personal information to third parties. We may share your
                                data with trusted third-party service providers who assist us in operating our website,
                                conducting our business, or servicing you. These service providers may have access to your
                                information only to perform specific tasks on our behalf.</p>

                            <h2>Data Security</h2>
                            <p>We take appropriate measures to protect your personal information. However, please be aware
                                that no method of transmission over the internet or electronic storage is 100% secure. We
                                cannot guarantee absolute security.</p>

                            <h2>Your Choices</h2>
                            <p>You have the right to:</p>
                            <ul>
                                <li>Review, update, or delete your personal information.</li>
                                <li>Unsubscribe from our mailing list.</li>
                                <li>Set your browser to block cookies.</li>
                            </ul>

                            <h2>Children's Privacy</h2>
                            <p>Our website is not intended for children under the age of 13. We do not knowingly collect or
                                maintain personal information from children under 13.</p>

                            <h2>Changes to this Privacy Policy</h2>
                            <p>We may update this Privacy Policy from time to time. Please review the "Last Updated" date at
                                the top of the page for the most recent version. By continuing to use our website, you agree
                                to the updated policy.</p>

                            <h2>Contact Us</h2>
                            <p>If you have any questions or concerns about our Privacy Policy, please contact us at <a href="mail: {{config('app.contact_email')}}">{{config('app.contact_email')}}</a>.</p>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
