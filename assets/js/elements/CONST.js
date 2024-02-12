import cleanFromScripts from "/assets/js/elements/cleanFromScripts.js";


function getHostName() {
    const templateInner = document.getElementById("full_window_template");
    if(!templateInner) return

    const route = cleanFromScripts(templateInner.dataset.url);
    const origin = window.location.origin;
    if(route.startsWith(origin)) {
        return route;
    };
}



export const HOST = getHostName();