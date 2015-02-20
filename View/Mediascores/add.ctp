<?php
    echo '<div class="container">';
        echo $this->Form->create('Mediascore', array( 'action' => 'add' ) );
        echo $this->Form->input('Mediascore.name_de', array( 'label' => __('Name of the media(german):') ) );
        echo $this->Form->input('Mediascore.name_en', array( 'label' => __('Name of the media(english):') ) );
        echo $this->Form->input('Mediascore.rate', array( 'label' => __('Rating:') ) );
        echo $this->Form->input('Mediascore.launch_year', array( 'label' => __('Year of Launch:') ) );
        echo $this->Form->input('Mediascore.type', array( 'label' => __('Type:') ) );
        echo $this->Form->input('Mediascore.done_until', array( 'label' => __('Done Until:') ) );
        echo $this->Form->input('Mediascore.stored', array
        (
            'label' => __('Stored:'),
        ));
        echo $this->Form->end( array( 'label' => __('Add mediascore') ) );
    echo '</div>';
        
