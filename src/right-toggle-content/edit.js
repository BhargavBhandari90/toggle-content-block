import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';
import { getBlockTypes } from '@wordpress/blocks';
import { disAllowedBlocks } from '../components/dis-allowed-blocks';

import './editor.scss';

export default function Edit() {
	const blockProps = useBlockProps( {
		className: 'toggle-content',
	} );

	const ALLOWED_BLOCKS = getBlockTypes()
		.map( ( block ) => block.name )
		.filter( ( blockName ) => ! disAllowedBlocks().includes( blockName ) );

	return (
		<div { ...blockProps }>
			<small>Right Content</small>
			<InnerBlocks allowedBlocks={ ALLOWED_BLOCKS } />
		</div>
	);
}
