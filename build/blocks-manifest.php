<?php
// This file is generated. Do not modify it manually.
return array(
	'left-toggle-content' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'buntywp/left-toggle-content',
		'version' => '1.0.0',
		'title' => 'Left Content',
		'category' => 'widgets',
		'icon' => 'arrow-left-alt2',
		'description' => 'A block to add content to the left of the toggle switch.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'parent' => array(
			'buntywp/toggle-content'
		),
		'textdomain' => 'left-toggle-content',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css'
	),
	'right-toggle-content' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'buntywp/right-toggle-content',
		'version' => '1.0.0',
		'title' => 'Right Content',
		'category' => 'widgets',
		'icon' => 'arrow-right-alt2',
		'description' => 'A block to add content to the right of the toggle switch.',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'parent' => array(
			'buntywp/toggle-content'
		),
		'textdomain' => 'right-toggle-content',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css'
	),
	'toggle-content' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'buntywp/toggle-content',
		'version' => '1.0.0',
		'title' => 'Toggle Content',
		'category' => 'widgets',
		'textdomain' => 'toggle-content',
		'icon' => 'editor-table',
		'description' => 'A block with a customizable toggle switch and two content areas.',
		'attributes' => array(
			'labelLeft' => array(
				'type' => 'string',
				'default' => 'Left'
			),
			'labelRight' => array(
				'type' => 'string',
				'default' => 'Right'
			)
		),
		'supports' => array(
			'html' => false,
			'interactivity' => true,
			'shadow' => true,
			'color' => array(
				'background' => true
			),
			'spacing' => array(
				'margin' => true,
				'padding' => true
			),
			'__experimentalBorder' => array(
				'radius' => true,
				'color' => true,
				'width' => true,
				'style' => true,
				'__experimentalDefaultControls' => array(
					'color' => true,
					'radius' => true
				)
			)
		),
		'allowedBlocks' => array(
			'buntywp/right-toggle-content',
			'buntywp/left-toggle-content'
		),
		'editorStyle' => 'file:./index.css',
		'editorScript' => 'file:./index.js',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php',
		'viewScriptModule' => 'file:./view.js'
	)
);
