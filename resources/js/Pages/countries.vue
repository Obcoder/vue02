<template>
    <MainLayout>
        <main>
            <div>
                <div>
                    Россия
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
