<?php
    echo '<div class="container">';
        echo $this->Form->create($Mediascore, [ 'url' => [ 'controller' => 'mediascores', 'action' => 'add' ] ]);
        echo $this->Form->input('name_de', array( 'label' => __('Name of the media(german):') ) );
        echo $this->Form->input('name_en', array( 'label' => __('Name of the media(english):') ) );
        echo $this->Form->input('rate', array( 'label' => __('Rating:') ) );
        echo $this->Html->alert('Beispiele für das Format: 1 | 10 | 5.5 | 7.5', [ 'type' => 'info' ]);
        echo $this->Form->input('launch_year', array( 'label' => __('Year of Launch:') ) );
        echo $this->Form->input('type', array( 'label' => __('Type:') ) );
        echo $this->Form->input('done_until', array( 'label' => __('Done Until:') ) );
        echo $this->Form->input('stored', array
        (
            'label' => __('Stored:'),
        ));
        echo $this->Form->submit(__('Add mediascore'));
        echo $this->Form->end();
    echo '</div>';
        
