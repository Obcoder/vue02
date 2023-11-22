<template>
    <Head>
        <title>{{title}}</title>
    </Head>
    <section>
        <h1>
            {{headerfrompage}}
        </h1>
        <input type="text" v-model="headerfrompage" @input="set_country">
    </section>
    <section>
        <div>
            <button class="rounded border px-2" @click="toggle">Добавить страну</button>
        </div>
        <div></div>
    </section>
    <div class="container w-3/4 mx-auto">
        <div>
            <table class="min-w-full divide-y divide-gray-200">
                <thead>
                <tr>
                    <td>Flag</td>
                    <td>Emblem</td>
                    <td>Name</td>
                    <td>Area</td>
                    <td>Calling code</td>
                    <td>Actions</td>
                </tr>
                </thead>
                <tbody>
                    <tr v-if="isVisible">
                        <td>
                            <input type="text" v-model="form.flag" class="rounded px-2 py-1 text-sm w-full">
                        </td>
                        <td>
                            <input type="text" v-model="form.coatofarms" class="rounded px-2 py-1 text-sm w-full">
                        </td>
                        <td>
                            <input type="text" v-model="form.name" class="rounded px-2 py-1 text-sm w-full">
                        </td>
                        <td>
                            <input type="text" v-model="form.area" class="rounded px-2 py-1 text-sm w-full">
                        </td>
                        <td>
                            <input type="text" v-model="form.callingcode" class="rounded px-2 py-1 text-sm w-full">
                        </td>
                        <td>
                            <span @click="saveData" class="text-cyan-600">
                                save
                            </span>
                        </td>
                    </tr>
                    <tr v-for="country in countries" :key="country.id" class="divide-y divide-gray-300 hover:bg-slate-100">
                        <td>
                            <img v-bind:src="'/storage/imgs/flags/' + country.flag" class="w-1/3">
                        </td>
                        <td>
                            <img v-bind:src="'/storage/imgs/coatofarms/' + country.coatofarms" class="w-1/4">
                        </td>
                        <td class="font-sans text-2xl w-1/3">
                            {{country.name}}
                        </td>
                        <td>
                            {{country.area}}
                        </td>
                        <td>
                            {{country.callingcode}}
                        </td>
                        <td>
                            <div>
                                <div>edit</div>
                                <div>del</div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
<!--            <div v-for="item in countries" class="grid grid-cols-3 gap-1 text-black hover:bg-lime-50">-->
<!--                <div>-->
<!--                    <img class="w-2/3" v-bind:src="'/storage/imgs/flags/' + item.flag">-->
<!--                </div>-->
<!--                <div>-->
<!--                    <img class="w-16" v-bind:src="'/storage/imgs/coatofarms/' + item.coatofarms">-->
<!--                </div>-->
<!--                <div class="font-sans text-2xl">-->
<!--                    {{item.name}}-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
</template>

<script setup> //composition API - удобнее, веселее
import {Head, useForm} from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";
import {ref} from "vue";
import ConfirmsPassword from "@/Components/ConfirmsPassword.vue";

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

let form = useForm({
    flag:"",
    coatofarms:"",
    name:"",
    area:"",
    callingcode:"",
});

let isVisible = ref(false);

function toggle(){
    isVisible.value = !isVisible.value;
}

let headerfrompage = ref("monday");

function saveData(){
    form.post(route('country.save'));
}

// form.put(route(model_route(model.toLowerCase()) + '.update', {slug: form.slug, id: form.id}), {
//     errorBag: 'updateInformation',
//     preserveScroll: true,
//     onSuccess: () => {
//         Event.emit('form_updated');
//     }
// });

    // components:{
    //     MainLayout,
    // },
    // name: "countries",
    // layout: MainLayout,

</script>

<style scoped>

</style>
