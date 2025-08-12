import { store, getContext } from '@wordpress/interactivity';

store( 'buntywp/toggle-content', {
	actions: {
		toggleContent: () => {
			const context = getContext();
			context.activeSide =
				context.activeSide === 'left' ? 'right' : 'left';
		},
	},
} );
