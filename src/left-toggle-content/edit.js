import { useBlockProps, InnerBlocks } from '@wordpress/block-editor';
import './editor.scss';

export default function Edit() {
	const blockProps = useBlockProps( {
		className: 'toggle-content',
	} );

	return (
		<div { ...blockProps }>
			<small>Left Content</small>
			<InnerBlocks />
		</div>
	);
}
