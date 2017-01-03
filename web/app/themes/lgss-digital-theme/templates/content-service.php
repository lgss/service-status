    <tr>
      <td><a href="<?php the_permalink() ?>"><?php the_title() ?></a></td>
      <td><div class="icon-status--<?php echo strtolower(get_field('ccc_status')); ?>"></div>&nbsp;<?php echo get_field('ccc_status'); ?></td>
      <?php if(strtolower(get_field('ccc_status')) != 'green' && get_field('ccc_reason')) { ?>
      <td><?php echo get_field('ccc_reason'); ?></td>
      <?php } else { ?>
        <td>-</td>
      <?php } ?>
    </tr>



  

   
