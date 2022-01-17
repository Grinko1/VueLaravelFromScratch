<template>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job</th>
                <th scope="col">Is married</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="person in people" :key="person.id">
                <th scope="row">{{ person.id }}</th>
                <td>
                    <router-link
                        :to="{ name: 'person.show', params: { id: person.id } }"
                    >
                        {{ person.name }}</router-link
                    >
                </td>
                <td>{{ person.age }}</td>
                <td>{{ person.job }}</td>
                <td>{{ person.isMarried ? "Yes" : "No" }}</td>
                <td>
                    <router-link
                        class="btn btn-outline-success"
                        :to="{ name: 'person.edit', params: { id: person.id } }"
                        >Edit</router-link
                    >
                </td>
                <td>
                    <a
                        href="#"
                        @click.prevent="$store.dispatch('deletePerson',person.id)"
                        class="btn btn-outline-danger"
                        >Delete</a
                    >
                </td>
            </tr>
        </tbody>
    </table>
</template>
<script>
import router from "../../router";
export default {
    name: "Index",
    data() {
        return {
            // people: null,
        };
    },
    mounted() {
        this.$store.dispatch('getPeople')
        // this.getPeople();
    },
    computed:{
        people(){
           return this.$store.getters.people 
        }
    },
    methods: {
        // getPeople() {
        //     axios.get("/api/people").then((res) => {
        //         // console.log(res.data.data)
        //         this.people = res.data.data;
        //     });
        // },
        // deletePerson(id) {
        //     axios.delete(`/api/people/${id}`).then((res) => {
        //         this.getPeople();
        //         //    console.log('deleted')
        //     });
        // },
    },
};
</script>
<style></style>
