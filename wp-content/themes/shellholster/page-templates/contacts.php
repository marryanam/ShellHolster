<?php
/**
 * Template name: Contacts
 */

get_header(); ?>

<main class="page-wrapper contact-us-page">

    <?php get_template_part( 'template-parts/content', 'heading' ); ?>

    <?php shell_contact_info('map'); ?>

    <div class="container">
        <div class="contacts">
            <div class="contacts-block">
                <p class="contacts-heading">
                    <i aria-hidden="true" class="fas fa-home"></i>
                    <b>Address</b>
                </p>
                <p class="contacts-desc">
                    Rome Tech Cases <?php shell_contact_info('address'); ?>
                </p>
            </div>

            <div class="contacts-block">
                <p class="contacts-heading">
                    <i aria-hidden="true" class="fas fa-phone-alt"></i>
                    <b>Phone</b>
                </p>
                <?php shell_contact_info('phones'); ?>
            </div>

            <div class="contacts-block">
                <p class="contacts-heading">
                    <i aria-hidden="true" class="far fa-envelope"></i>
                    <b>Email</b>
                </p>
                <?php shell_contact_info('email'); ?>
            </div>
        </div>

        <div class="contact-us-form">
            <p class="form-title title-2">Have a Question? Contact Us!</p>

            <p class="form-subtitle subtitle-3">Contact us with any questions, returns, or concerns. Our customer support team is available Monday
                through Friday 9am to 5pm (EST).
            </p>

            <p class="form-subtitle-2 subtitle-3">Leave a <b>Message</b></p>

            <form method="post" class="form">
                <fieldset>
                    <input type="text" placeholder="Name"/>
                    <input type="text" placeholder="Phone"/>
                    <input type="email" placeholder="Email"/>
                </fieldset>
                <textarea placeholder="Comment"></textarea>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

</main>

<?php get_footer(); ?>


