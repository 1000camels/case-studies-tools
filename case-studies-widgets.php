<?php


add_action( 'widgets_init', 'case_studies_widget' );


function case_studies_widget() {
	register_widget( 'Teaching_Notes' );
	register_widget( 'Case_Study_PDF' );
}

class Teaching_Notes extends WP_Widget {

	function Teaching_Notes() {
		$widget_ops = array( 'classname' => 'teachingnotes', 'description' => __('This widget displays a link to the related post with the teaching notes.', 'teachingnotes') );
		
		$control_ops = array( 'width' => 300, 'height' => 350, 'id_base' => 'teachingnotes-widget' );
		
		$this->WP_Widget( 'teachingnotes-widget', __('Teaching Notes Widget', 'teachingnotes'), $widget_ops, $control_ops );
	}


	function widget( $args, $instance ) {
		echo $before_widget;

		// Display the widget title 
		if ( $title )
			echo $before_title . $title . $after_title;

		$this->get_teaching_notes();
		print $toc_list;
		
		echo $after_widget;
	}


	function update( $new_instance, $old_instance ) {

	}

	function get_teaching_notes() {
		$posttags = get_the_tags();
		print_r($posttags);

		exit;
	}

}