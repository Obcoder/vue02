<template>
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
import MainLayout from "@/Layouts/MainLayout.vue";

// defineProps({
//     regions: Array,
// });
export default {
    name: "regions",
    components: {MainLayout},
    props: {
        regions: Array,
    }
}
</script>

<style scoped>

</style>
