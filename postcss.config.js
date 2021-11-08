module.exports = {
	plugins: [
		require( 'postcss-import' ),
		require( 'tailwindcss' ),
		require( 'postcss-nested' ),
		require( 'postcss-css-variables' )( {
			preserve: true,
			preserveAtRulesOrder: true,
		} ),
		require( 'postcss-calc' )( {
			precision: 0,
		} ),
		require( 'postcss-discard-duplicates' ),
	],
};
