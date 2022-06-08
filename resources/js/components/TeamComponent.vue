<template v-html="teamHTML">
    <div class="team">
        <span>{{ equip.id }}</span>
        <span>{{ equip.nom }}</span>
        <span>{{ equip.seu }}</span>
        <span>{{ equip.capita }}</span>
        <span><button class="btn btn-primary" v-on:click="$emit('editar-equip', equip.id)">Editar equip</button></span>
        <span><button class="btn btn-danger">Borrar equip</button></span>
    </div>
</template>

<script>
    export default {
        props: ['equip']
    }
</script>