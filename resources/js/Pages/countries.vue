<template>
    <Head title="{{title}}" />
    <section>
        <input type="text" v-model="new_country" @input="set_country">
    </section>
    <div class="container w-1/3 mx-auto">
        <div></div>
        <div>
            <div v-for="item in countries" class="grid grid-cols-3 gap-1 text-black hover:bg-lime-50">
                <div>
                    <img class="w-2/3" v-bind:src="'/storage/imgs/flags/' + item.flag">
                </div>
                <div>
                    <img class="w-12" v-bind:src="'/storage/imgs/coatofarms/' + item.coatofarms">
                </div>
                <div>
                    {{item.name}}
                </div>
            </div>
        </div>
        <div></div>
    </div>
</template>

<script setup> //composition API - удобнее, веселее
import MainLayout from "@/Layouts/MainLayout.vue";
import {ref} from "vue";

let new_country = ref("");

function set_country(e){
    // new_country.value = "Австралия";
    console.log(e.target.value);
}
 defineProps({
         title: String,
         countries: Object,
 });

defineOptions({
    layout: MainLayout,
});

    // components:{
    //     MainLayout,
    // },
    // name: "countries",
    // layout: MainLayout,

</script>

<style scoped>

</style>
