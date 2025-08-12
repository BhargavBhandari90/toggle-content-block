import { useInnerBlocksProps, useBlockProps } from '@wordpress/block-editor';

export default function save() {
	const blockProps = useBlockProps.save( {
		className: 'toggle-content',
	} );
	const innerBlocksProps = useInnerBlocksProps.save();

	return (
		<div { ...blockProps }>
			<div { ...innerBlocksProps } />
		</div>
	);
}
