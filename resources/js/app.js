// Import the Bootstrap configuration to ensure proper setup
import './bootstrap';

// Import necessary functions and libraries from Vue and Inertia
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'

// Create the Inertia app
createInertiaApp({
  // Resolve the page components dynamically using Vite's import.meta.glob
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    return pages[`./Pages/${name}.vue`]
  },
  // Set up the app by providing the root element, App component, props, and plugin
  setup({ el, App, props, plugin }) {
    // Create a Vue app, use the Inertia plugin, and mount it to the provided element
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el)
  },
})