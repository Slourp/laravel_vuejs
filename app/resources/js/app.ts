import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import type { DefineComponent } from "vue";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";

const resolvePage = async (name: string): Promise<DefineComponent> => {
    const page = await resolvePageComponent<DefineComponent>(
        `../views/Pages/${name}.vue`,
        import.meta.glob("../views/Pages/**/*.vue") as Record<
            string,
            () => Promise<DefineComponent>
        >
    );
    return page;
};

createInertiaApp({
    resolve: resolvePage,
    setup: ({ el, App, props, plugin }) => {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el);
    },
});
