<template>
    <div class="mt-3 w-25">
        <div>
            <h3>Create person</h3>
        </div>
        <div class="mb-2">
            <input
                type="text"
                v-model="name"
                class="form-control"
                placeholder="name"
            />
        </div>
        <div class="mb-2">
            <input
                type="number"
                v-model="age"
                class="form-control"
                placeholder="age"
            />
        </div>
        <div class="mb-2">
            <input
                type="text"
                v-model="job"
                class="form-control"
                placeholder="job"
            />
        </div>
        <div class="form-check">
            <input
                class="form-check-input"
                type="checkbox"
                value=""
                v-model="isMarried"
                id="flexCheckDefault"
            />
            <label class="form-check-label" for="flexCheckDefault">
                Is married
            </label>
        </div>
        <div>
            <input
                type="submit"
                :disabled="!isDisabled "
                @click.prevent="$store.dispatch('store', {name, age, job, isMarried})"
                class="btn btn-primary"
                value="Create"
            />
        </div>
    </div>
</template>
<script>

export default {
    name: "Create",
    data() {
        return {
            name: null,
            age: null,
            job: null,
            isMarried: false,
        };
    },
    computed: {
         isDisabled(){
            return this.name && this.age && this.job 
        }
    },
    methods: {
       
        // store() {
        //     axios
        //         .post("/api/people", {
        //             name: this.name,
        //             age: this.age,
        //             job: this.job,
        //             isMarried: this.isMarried,
        //         })
        //         .then((res) => {
        //             this.$router.push({name: 'person.index'})
        //                 this.name = null,
        //                 this.age = null,
        //                 this.job = null,
        //                 this.isMarried = false
                      
        //         });
        // },
    },
};
</script>
<style></style>
