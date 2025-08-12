import { store, getContext, getElement } from '@wordpress/interactivity';

const { state } = store( 'buntywp/toggle-content', {
	state: {},
	actions: {
		toggleContent: () => {
			const context = getContext();
			context.activeSide =
				context.activeSide === 'left' ? 'right' : 'left';
		},
	},
	callbacks: {},
} );
