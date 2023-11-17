<script setup>
import {Link} from "@inertiajs/vue3";

defineProps({
    title: String,
});

</script>

<template>
    <main>
        <header>
            <nav>
                <ul class="flex flex-row">
                    <li class="mr-3 bg-yellow-300">
                        <Link href="/">
                            Home
                        </Link>
                    </li>
                    <li>
                        <Link href="/countries">
                            Страны
                        </Link>
                    </li>
                    <li>
                        <Link href="/regions">
                            Regions
                        </Link>
                    </li>
                </ul>
            </nav>
        </header>
        <div>
            <div class="container mx-auto">
                <slot />
            </div>
        </div>
    </main>
    <footer></footer>

</template>

<style scoped>

</style>
