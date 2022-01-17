<template>

    <div> 
        <router-link :to="{name:'person.index'}" class="btn btn-outline-primary">People</router-link>
         <router-link :to="{name:'person.create'}" class="btn btn-outline-primary">Create</router-link>
      
        <router-view></router-view>
 
        </div>
</template>
<script>
export default {
    name: "Index"
}
</script>
<style scoped>

</style>