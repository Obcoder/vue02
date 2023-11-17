<template>
    <MainLayout>
        <h1>
            Регионы
        </h1>
        <div v-for="region in regions" :key="region">
            {{region}}
        </div>
    </MainLayout>
</template>

<script>
import MainLayout from "@/Layouts/MainLayout.vue";

defineProps({
    regions: Array,
});
export default {
    name: "regions",
    components: {MainLayout}
}
</script>

<style scoped>

</style>
