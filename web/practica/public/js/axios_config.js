//se permite que axios permite hacer peticiones a laravel
window.axios.defaults.headers.common["X-CSRF-TOKEN"] = document.querySelector("meta[name='csrf-token']").content;