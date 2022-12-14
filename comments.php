<div class="col-12 section-space--top--60">
    <div class="comment-wrapper">

        <h3><?php echo esc_html( 'Leave Your Comment', 'construct' ); ?></h3>

        <div class="comment-form">
            <?php
            comment_form(  );
            ?>
            <!-- <form action="#">
                <div class="row row-10">
                    <div class="col-md-6 col-12 section-space--bottom--20"><input type="text" placeholder="Your Name"></div>
                    <div class="col-md-6 col-12 section-space--bottom--20"><input type="email" placeholder="Your Email"></div>
                    <div class="col-12"><textarea placeholder="Your Message"></textarea></div>
                    <div class="col-12"><input type="submit" value="Send Comment"></div>
                </div>
            </form> -->
        </div>

    </div>
</div>