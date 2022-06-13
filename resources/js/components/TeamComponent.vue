<template v-html="teamHTML">
    <div class="team">
        <span>{{ equip.nom }}</span>
        <span>{{ equip.seu }}</span>
        <span>{{ equip.ciutat }}</span>
        <span>{{ equip.capita }}</span>
        <span><button class="btn btn-primary" v-on:click="$emit('editar-equip', equip.id)">Editar equip</button></span>
        <span><button class="btn btn-danger" v-on:click="$emit('borrar-equip', equip.id)">Borrar equip</button></span>
    </div>
</template>

<script>
    export default {
        props: ['equip']
    }
</script>