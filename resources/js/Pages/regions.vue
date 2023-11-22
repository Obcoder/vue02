<template>
    <Head>
        <title>{{title}}</title>
    </Head>
    <MainLayout>
        <h1>
            Регионы
        </h1>
        <div v-for="item in regions">
            {{item}}
        </div>
    </MainLayout>
</template>

<script>
import {Head} from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";

// defineProps({
//     regions: Array,
// });
export default {
    name: "regions",
    components: {MainLayout, Head},
    props: {
        regions: Array,
        title: String,
    },
    layout: MainLayout,
}
</script>

<style scoped>

</style>
