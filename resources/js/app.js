import { createInertiaApp } from '@inertiajs/inertia-svelte'

createInertiaApp({
	resolve: async name => {
		let page = await import(`./Pages/${name}.svelte`)
		return page
	},
	setup({ el, App, props }) {
		new App({ target: el, props })
	},
})

