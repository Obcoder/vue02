<template>
    <Head title="{{title}}" />
    <MainLayout>
        <main>
            <div>
                <div v-for="item in counties" class="bg-amber-950 text-amber-50">
                    {{item}}
                </div>
            </div>
        </main>
    </MainLayout>
</template>

<script>
import MainLayout from "@/Layouts/MainLayout.vue";

export default {
    props: {
        title: String,
        counties: Array,
    },
    // components:{
    //     MainLayout,
    // },
    name: "countries",
    layout: MainLayout,
}
</script>

<style scoped>

</style>
