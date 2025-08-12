import { __ } from '@wordpress/i18n';
import { useState } from '@wordpress/element';
import {
	InspectorControls,
	InnerBlocks,
	useBlockProps,
} from '@wordpress/block-editor';
import { Button, PanelBody, TextControl } from '@wordpress/components';
import './editor.scss';

export default function Edit( { attributes, setAttributes } ) {
	const { labelLeft, labelRight } = attributes;
	const [ activeSide, setActiveSide ] = useState( 'left' );
	const blockProps = useBlockProps();

	const toggle = () => {
		const side = activeSide === 'left' ? 'right' : 'left';
		setActiveSide( side );
	};

	const MY_TEMPLATE = [
		[ 'buntywp/left-toggle-content', {} ],
		[ 'buntywp/right-toggle-content', {} ],
	];

	return (
		<div { ...blockProps }>
			<InspectorControls>
				<PanelBody title={ __( 'Toggle Settings', 'toggle-content' ) }>
					<TextControl
						label={ __( 'Left Label', 'toggle-content' ) }
						value={ labelLeft }
						onChange={ ( val ) =>
							setAttributes( { labelLeft: val } )
						}
						__next40pxDefaultSize
						__nextHasNoMarginBottom
					/>
					<TextControl
						label={ __( 'Right Label', 'toggle-content' ) }
						value={ labelRight }
						onChange={ ( val ) =>
							setAttributes( { labelRight: val } )
						}
						__next40pxDefaultSize
						__nextHasNoMarginBottom
					/>
				</PanelBody>
			</InspectorControls>
			<div className={ activeSide }>
				<div className="toggle-buttons">
					{ labelLeft || 'Left' }
					<Button
						className="toggle-switch"
						onClick={ toggle }
						aria-label="Toggle"
					></Button>
					{ labelRight || 'Right' }
				</div>

				<InnerBlocks template={ MY_TEMPLATE } />
			</div>
		</div>
	);
}
