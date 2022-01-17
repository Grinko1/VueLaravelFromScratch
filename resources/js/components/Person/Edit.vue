<template>
    <div class="mt-3 w-25" v-if="person">
        <div>
            <h3>Edit person's data</h3>
        </div>
        <div class="mb-2">
            <input
                type="text"
                v-model="person.name"
                class="form-control"
                placeholder="name"
            />
        </div>
        <div class="mb-2">
            <input
                type="number"
                v-model="person.age"
                class="form-control"
                placeholder="age"
            />
        </div>
        <div class="mb-2">
            <input
                type="text"
                v-model="person.job"
                class="form-control"
                placeholder="job"
            />
        </div>
        <div class="form-check">
            <input
                class="form-check-input"
                type="checkbox"
                value=""
                v-model="person.isMarried"
                id="flexCheckDefault"
            />
            <label class="form-check-label" for="flexCheckDefault">
                Is married
            </label>
        </div>
        <div>
            <input
                :disabled="!isDisabled"
                type="submit"
                @click.prevent="
                    $store.dispatch('updatePerson', {
                        id: person.id,
                        name: person.name,
                        age: person.age,
                        job: person.job,
                        isMarried: person.isMarried,
                    })
                "
                class="btn btn-primary"
                value="Update"
            />
        </div>
    </div>
</template>
<script>
export default {
    name: "Edit",
    data() {
        return {
            // name: null,
            // age: null,
            // job: null,
            // isMarried: false,
        };
    },
    mounted() {
        this.$store.dispatch("getPerson", this.$route.params.id);
    },
    computed: {
        isDisabled() {
            return this.person.name && this.person.age && this.person.job;
        },
        person() {
            return this.$store.getters.person;
        },
    },
    methods: {
        // getPerson(){
        //     axios.get(`/api/people/${this.$route.params.id}`)
        //     .then(res=>{
        //        this.name = res.data.data.name
        //        this.age = res.data.data.age
        //        this.job = res.data.data.job
        //        this.isMarried = res.data.data.isMarried
        //     })
        // },
        // updatePerson() {
        //     axios
        //         .patch(`/api/people/${this.$route.params.id}`, {
        //             name: this.name,
        //             age: this.age,
        //             job: this.job,
        //             isMarried: this.isMarried,
        //         })
        //         .then((res) => {
        //             this.$router.push({
        //                 name: "person.show",
        //                 params: { id: this.$route.params.id },
        //             });
        //         });
        // },
    },
};
</script>
<style></style>
