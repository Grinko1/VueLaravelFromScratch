<template>
    <div class="mt-3" v-if="person">
        <p>
            Name: <b>{{ this.person.name }}</b>
        </p>
        <p>
            Age: <b>{{ this.person.age }}</b>
        </p>
        <p>
            Job: <b>{{ this.person.job }}</b>
        </p>
        <p>
            Married: <b>{{ this.person.isMarried ? "Yes" : "No" }}</b>
        </p>
        <div>
            <router-link
                class="btn btn-outline-success"
                :to="{ name: 'person.edit', params: { id: this.person.id } }"
                >Edit</router-link
            >
        </div>
    </div>
</template>
<script>
export default {
    name: "Show",
    data() {
        return {
            // person: null,
        };
    },
    methods: {
        // getPerson() {
        //     axios.get(`/api/people/${this.$route.params.id}`).then((res) => {
        //         this.person = res.data.data;
        //     });
        // },
    },
    computed:{
        person(){
            return this.$store.getters.person
        }
    },
    mounted() {
        this.$store.dispatch('getPerson',this.$route.params.id )
        // this.getPerson();
    },
};
</script>
<style></style>
