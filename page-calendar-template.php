<?php
/*
 Template Name: Calendar
*/
?>

<?php get_header(); ?>

<div class="container" id="about">
    <div class="row">
        <div class="col-md-12">
            <h2 class="post-title">Schedule</h2>
        </div>
    </div>
    <br />
    <div class="row">
        <div class="col-md-12 text-center">
            <p><b>Please click below to download the current month's schedule:</b></p>
            <p style="font-size: .85em;"><b>***NOTE:</b> for <b>Gaia Kosha classes</b>, follow the link to register: <a class="external-link" href="http://www.gaiakosha.com/" target="_blank">Gaia Kosha <i class="fa fa-external-link"></i></a></p>
            <button class="btn btn-primary"><a href="<?php echo get_template_directory_uri(); ?>/dist/August-2017-schedule.pdf" download>Schedule</a></button>
        </div>
    </div>
    <br />
    <br />
    <!--div id="calendar"></div>
    <br />
    <br /-->
</div>
<br />
<br />

<?php get_footer(); ?>