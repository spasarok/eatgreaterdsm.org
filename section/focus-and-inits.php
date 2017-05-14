<section class="container">
    <div class="row">

        <?php $focus_args = array(
            'post_parent' => 10,
            'post_type' => 'page',
            'post_status' => 'publish')
        ?>
        <?php $focus = new WP_Query($focus_args); ?>
        <div class="col-md-6">
            <section class="card">
                <h2>Focus Areas</h2>
                <ul>
                    <?php while($focus->have_posts()): $focus->the_post();?>
                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <?php endwhile; ?>
                </ul>
            </section>
        </div>


        <?php $init_args = array(
            'post_parent' => 12,
            'post_type' => 'page',
            'post_status' => 'publish')
        ?>
        <?php $inits = new WP_Query($init_args); ?>
        <div class="col-md-6">
            <section class="card">
                <h2>Initiatives</h2>
                <ul>
                    <?php while($inits->have_posts()): $inits->the_post();?>
                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <?php endwhile; ?>
                </ul>
            </section>
        </div>
    </div>
</section>