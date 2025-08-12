import { __ } from '@wordpress/i18n';
import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';
import './editor.scss';

export default function Edit() {
	const blockProps = useBlockProps( {
		className: 'toggle-content',
	} );

	return (
		<div { ...blockProps }>
			<small>Right Content</small>
			<InnerBlocks />
		</div>
	);
}
